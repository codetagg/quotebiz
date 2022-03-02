<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\Icarrier;
use App\Models\Alert;
use Illuminate\Http\Request;

class IcarriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $carriers = Icarrier::all();
        return view('admin.carriers.index1',compact('carriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.carriers.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= explode(',', $request->country);
        $country= $data[0];
        $class= $data[1];
         $icarriers = new Icarrier;
            $icarriers->name = $request->name;
            $icarriers->price = $request->price;
            $icarriers->min_limit = $request->min_limit;
            $icarriers->max_limit = $request->max_limit;
            $icarriers->tax = $request->tax;
            $icarriers->package_type = $request->package_type;
            $icarriers->phone_codes = $request->phone_codes;
            $icarriers->country = $country;
            $icarriers->country_class = $class;

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_new = time().$image->getClientOriginalName();
                $image->move('storage/image/carriers/',$image_new);
                $icarriers->image = 'storage/image/carriers/'.$image_new;

            }

        
           $icarriers->save();
        


        return back()->with('message', Alert::_message('success','Carriers Successfully Created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Icarrier  $icarrier
     * @return \Illuminate\Http\Response
     */
    public function show(Icarrier $icarrier)
    {
        //
    }

    public function search(Request $request)
    {
        if($request->country){
             $carriers= Icarrier::where('country_class',$request->country)->get();
        }else{
             $carriers= Icarrier::get();
        }
        
        return view('frontend.bills-search',compact('carriers'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icarrier  $icarrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Icarrier $icarrier)
    {
        return view('admin.carriers.edit1',compact('icarrier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icarrier  $icarrier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icarrier $icarrier)
    {
        $data= explode(',', $request->country);
        $country= $data[0];
        $class= $data[1];

           $icarrier->name = $request->name;
           $icarrier->price = $request->price;
           $icarrier->min_limit = $request->min_limit;
           $icarrier->max_limit = $request->max_limit;
           $icarrier->country = $country;
           $icarrier->country_class = $class;
           $icarrier->tax = $request->tax;
           $icarrier->package_type = $request->package_type;
           $icarrier->phone_codes = $request->phone_codes;

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_new = time().$image->getClientOriginalName();
                $image->move('storage/image/carriers/',$image_new);
                $icarrier->image = 'storage/image/carriers/'.$image_new;

            }

           $icarrier->save();

           return back()->with('message', Alert::_message('success','Carrier Successfully Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icarrier  $icarrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icarrier $icarrier)
    {
        $icarrier->delete();

        return back()->with('message', Alert::_message('success','Blog Successfully Deleted'));
    }

    public function planDetailInternational(Request $request,$id){
        $getSingleData = Icarrier::find($id);
        return View::make('frontend.international-plan')->with([
            'getSingleData' => $getSingleData
        ]);
    }
    public function rechargePlan(Request $request, $id){
      $getSingleData = Icarrier::find($id);
      return View::make('frontend.international-refill')->with([
        'getSingleData' => $getSingleData
      ]);
    }
}