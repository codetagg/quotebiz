<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\Carrier;
use App\Models\ShippingAddr;
use App\Models\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Twilio\Rest\Client;
use Validator;
// use DB;

class CarriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $carriers = Carrier::all();
        return view('admin.carriers.index',compact('carriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carriers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        // dd($request->all());
            $carriers = new Carrier;
            $carriers->name = $request->name;
            $carriers->price = $request->price;
            $carriers->tax = $request->tax;
            $carriers->package_type = $request->package_type;

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_new = time().$image->getClientOriginalName();
                $image->move('storage/image/carriers/',$image_new);
                $carriers->image = 'storage/image/carriers/'.$image_new;

            }

        
           $carriers->save();
        


        return back()->with('message', Alert::_message('success','Carriers Successfully Created'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function show(Carrier $carrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrier $carrier)
    {
       
        return view('admin.carriers.edit',compact('carrier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrier $carrier)
    {
          
            $carrier->name = $request->name;
            $carrier->price = $request->price;
            $carrier->tax = $request->tax;
            $carrier->package_type = $request->package_type;

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_new = time().$image->getClientOriginalName();
                $image->move('storage/image/carriers/',$image_new);
                $carrier->image = 'storage/image/carriers/'.$image_new;

            }

           $carrier->save();

           return back()->with('message', Alert::_message('success','Carrier Successfully Updated'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrier $carrier)
    {
        $carrier->delete();

        return back()->with('message', Alert::_message('success','Blog Successfully Deleted'));

    }

    public function billPay(Request $request){
        $history= $request->all();
// dd($history);
        return view('frontend.billcheckout',compact('history'));
    }



       ///////////////////// Payments ////////////////////////////
    public function payment(Request $request)
    {
        // dd($request->all());
        $address = 0 ;
        if($request->address_id == null){

               $this->validate($request,[
                'first_name' => 'required|max:255',
             // 'email' => 'required|email|unique:shipping_addrs',
                'mobileNo' => 'required|string|min:10|max:11|regex:/[0-9]{9}/',

              ],[

                'first_name.required' =>'Enter Name',
                'mobileNo.required' => 'Enter Mobile Number',
                'mobileNo.min' => 'Phone number should not be less than 10 digits',
                'mobileNo.max' => 'Phone number should not be more than 11 digits',
              ]);

        $addres= New ShippingAddr;
        if(Auth::check())
        {
            $addres->userId=  Auth::guard('web')->user()->id;
        }
        $addres->first_name= $request->first_name;
        $addres->last_name= $request->last_name;
        $addres->email= $request->email;
        $addres->mobileNo= $request->mobileNo;
        $addres->shipaddress= $request->shipaddress;
        $addres->street_address= $request->street_address;
        $addres->country= $request->country;
        $addres->city= $request->city;
        $addres->state= $request->state;
        $addres->zipcode= $request->zipcode;
        $addres->save();
        $address = $addres->id;
        }else{
           $address = $request->address_id;
        }
// dd($request->total);
       $price = $request->total;
       $tax = $request->tax;
       $total = $price+$tax;

    // dd($total);
    
        // $address = $request->address_id;
        $id = $request->id;
        $type = $request->type;
        $phone = $request->phoneno;
        $desc = $address.'-'.$type.'-'.$phone.'-'.$price.'-'.$tax.'-'.$id;
        // dd($desc);
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                'AXmw8ONlBiU9H3ISoZY7KJgQszN9Mtto7MXfq4Y9PQOeawovyhUSS19Ob8LYlU-xYQo_ERLBOJckp8sq',
              'EPdWVscuS7k-u-45AKc5khipCBlMYqUBfUmbrE3aUV0FJlF8hFcGKn_5p7T9VA2R5HdsR_JmTj1EiUDr'
                 )
        );
            // dd($apiContext);
                $payer = new Payer();
                $payer->setPaymentMethod("paypal");
                // dd($payer);
                // Set redirect URLs
                $redirectUrls = new RedirectUrls();
                $redirectUrls->setReturnUrl(route('paypal.successCarrier'))
                              ->setCancelUrl(route('paypal.cancelCarrier'));
                // dd($redirectUrls);
                // Set payment amount
                $amount = new Amount();
                $amount->setCurrency("USD")
                    ->setTotal($total);


                // Set transaction object
                $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setDescription($desc);
                //   dd($transaction);
                // Create the full payment object
                $payment = new Payment();
                $payment->setIntent('sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirectUrls)
                    ->setTransactions(array($transaction));
                // dd($payment);
                // Create payment with valid API context
                try {

                    $payment->create($apiContext);
                    // dd($payment);
                    // Get PayPal redirect URL and redirect the customer
                    // $approvalUrl =
                    return redirect($payment->getApprovalLink());
                    // dd($approvalUrl);
                    // Redirect the customer to $approvalUrl
                } catch (PayPalConnectionException $ex) {
                    echo $ex->getCode();
                    echo $ex->getData();
                    die($ex);
                } catch (Exception $ex) {
                    die($ex);
                }
 
    }

    public function success(Request $request)
    {
            $apiContext = new ApiContext(
                new OAuthTokenCredential(
                    'AXmw8ONlBiU9H3ISoZY7KJgQszN9Mtto7MXfq4Y9PQOeawovyhUSS19Ob8LYlU-xYQo_ERLBOJckp8sq',
                    'EPdWVscuS7k-u-45AKc5khipCBlMYqUBfUmbrE3aUV0FJlF8hFcGKn_5p7T9VA2R5HdsR_JmTj1EiUDr'
                            )
            );

        // Get payment object by passing paymentId
        $paymentId = $_GET['paymentId'];
        $payment = Payment::get($paymentId, $apiContext);
        $payerId = $_GET['PayerID'];

        // Execute payment with payer ID
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

    try {
        // Execute payment
        $result = $payment->execute($execution, $apiContext);
        // dd($result->transactions[0]->description);
        $str = $result->transactions[0]->description;
        $split = explode('-',$str);
        $address_id =  $split[0];
        $type       =  $split[1];
        $mobile =  $split[2];
        $price =  $split[3];
        $tax =  $split[4];
        $id =  $split[5];
        if(Auth::check())
        {
            $userId=  Auth::guard('web')->user()->id;
        }else{
            $userId=NULL;
        }
        DB::table('carriers_orders')->insert([
           'address_id'=>$address_id, 
           'type'=>$type , 
           'mobile'=>$mobile, 
           'price'=>$price, 
           'tax'=>$tax, 
           'carrier_id'=>$id,
           'user_id'=>$userId,
           'method'=>'Pay Pal',
        ]);
        // $orderSale       = new OrderSale;
        
        // $orderSale->grand_total  = $totals;
        // $orderSale->shipping_id  = $address_id;
        // $orderSale->save();

    //    dd($cartCollection);

    
           //  $details = [
           //      'title' => 'Mail from CellCity',
           //      'subject' => 'Dear Customer ,',
           //      'message' => 'Payment completed Successfully through PayPal',
           //      'shippment' => '“Shipment detail will be sent once order is shipped within 24 hours”',
           //      'Total'  => $total
           //  ];
           //   $messgae = "Succesfully Transferred";
           //   \Mail::to($email)->send(new productMail($details));
           //  //  return response()->json($messgae);


           //  $phone = "+1".$phoneno;
           //  //  dd($phone);
           //   $message = strip_tags(nl2br("Dear Customer, \n You have Successfully Pay  through PayPal . \n Total Amount : $". $total." \n Shipment detail will be sent once order is shipped within 24 hours."));

           //   $account_sid = "ACeb30af8343f53c1b366517b35ea44dc2";
           // $auth_token = "ecc8e9d376d7ef8a19ed22778bb466f8";
           // $twilio_number = +4842553085;
           //   $client = new Client($account_sid, $auth_token);
           //   $client->messages->create($phone,
           //       ['from' => $twilio_number, 'body' => $message] );

                 return redirect()->route('payment.completed');

    } catch (PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
    } catch (Exception $ex) {
        die($ex);
    }
}

  public function cancel()
{
        dd('payment cancel');
}

  public function planDetail(Request $request,$id){
    
    $getSingleData = Carrier::find($id);
    return View::make('frontend.bill-plans')->with([
      'getSingleData' => $getSingleData
    ]);
  }

  public function rechargePlan(Request $request, $id){
    $getSingleData = Carrier::find($id);
    return View::make('frontend.wireless-refill')->with([
      'getSingleData' => $getSingleData
    ]);
  }

}
