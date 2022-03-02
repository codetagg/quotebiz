@extends('frontend.layouts.master')
@section('styling')

@endsection

<style>
    .product {
        margin-top: 20px;
        padding-top: 20px top: 100px;
    }

    <style>.checkout-area h3.shoping-checkboxt-title {
        border-bottom: 1px solid #e7e4dd;
        font-size: 24px;
        font-weight: 500;
        margin: 0 0 20px;
        padding-bottom: 10px;
        text-transform: none;
        width: 100%;
    }

    .prod {
        font-size: 2rem;
        line-height: 2.8rem;
        margin: 20px 10px 10px;
        font-family: BodyFont, sans-serif;
        font-weight: 500;
    }

    .single-form-row>input,
    .single-form-row textarea {
        border: 1px solid #e5e5e5;
        height: 42px;
        padding: 0 0 0 10px;
        width: 100%;
    }

    .checkout-review-order {
        background: #f6f6f6 none repeat scroll 0 0;
        padding: 20px;
        margin-top: 40px;
    }

    table.checkout-review-order-table {
        width: 100%;
    }

    .checkout-review-order-table thead th,
    .checkout-review-order-table tbody td,
    .checkout-review-order-table tfoot tr th,
    .checkout-review-order-table tfoot tr td {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border-bottom: 1px solid #dcd8ce;
        border-right: medium none;
        border-top: medium none;
        font-size: 14px;
        padding: 15px 0;
        text-align: left;
    }

    .buy-checkbox-btn {
        margin-top: 20px;
    }

    .buy-checkbox-btn input {
        display: none;
    }

    .buy-checkbox-btn .cbx {
        margin: auto;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
    }

    .buy-checkbox-btn .inp-cbx:checked+.cbx span:first-child {
        background: #00bfa5;
        border-color: #00bfa5;
        animation: wave 0.4s ease;
    }

    .buy-checkbox-btn .inp-cbx:checked+.cbx span:first-child:before {
        transform: scale(3.5);
        opacity: 0;
        transition: all 0.6s ease;
    }

    .buy-checkbox-btn .cbx span:first-child:before {
        content: "";
        width: 100%;
        height: 100%;
        background: #00bfa5;
        display: block;
        transform: scale(0);
        opacity: 1;
        border-radius: 50%;
        transition: 0.5s;
    }

    .buy-checkbox-btn .cbx span:first-child {
        position: relative;
        width: 18px;
        height: 18px;
        border-radius: 3px;
        transform: scale(1);
        vertical-align: middle;
        border: 1px solid #ebebeb;
        transition: all 0.2s ease;
        transition: 0.5s;
    }

    .buy-checkbox-btn .cbx span {
        display: inline-block;
        vertical-align: middle;
        transform: translateZ(0);
    }

    .buy-checkbox-btn .cbx span:first-child svg {
        position: absolute;
        top: 3px;
        left: 2px;
        fill: none;
        stroke: #fff;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 16px;
        stroke-dashoffset: 16px;
        transition: all 0.3s ease;
        transition-delay: 0.1s;
        transform: translateZ(0);
        transition: 0.5s;
    }

    .buy-checkbox-btn .inp-cbx:checked+.cbx span:first-child svg {
        stroke-dashoffset: 0;
    }

    .payment-methd {
        border: 1px solid #00bfa5;
        padding: 10px 20px;
        border-radius: 8px;
        margin-right: 15px;
    }

    .btn-checkout {
        background-color: #00bfa5;
        color: #fff;
        border-radius: 15px;
        padding: 10px 40px;
    }

    @media(max-width: 767px) {
        .checkout-review-order {
            padding: 10px;
            margin-top: 20px;
        }

        .payment-methd {
            border: 1px solid #00bfa5;
            padding: 10px 10px;
            border-radius: 8px;
            margin-right: 15px;
        }

        .checkout-area h3.shoping-checkboxt-title {
            padding-left: 10px;
        }
    }

    .S4bdZ3VYnOhPiTGUyVLzy:not(:first-of-type) {
        margin-top: 5.6rem;
    }

    ._3f0Cq5UU:checked~.cFRv-OWR {
        border-color: #343434;
    }

    ._2cj-nKW5,
    .vfVmvzIY,
    ._14X4XpNG,
    ._1RLplcnS,
    ._2HoNsBaT,
    ._2oP9mv4E {
        transition: all 50ms ease-in;
    }

    .cFRv-OWR {
        background-color: #FFFFFF;
        border-radius: 0.6rem;
        border: 0.1rem solid #E5E5E5;
        box-sizing: border-box;
        padding: 2rem;
    }

    ._2cj-nKW5 {
        color: #111111;
        cursor: pointer;
        display: grid;
        grid-template-columns: auto 1fr auto;
        grid-template-rows: minmax(2rem, auto) 1fr;
        grid-template-areas:
            'tick title image'
            'tick description image';
    }

    .remove {
        padding: 12px;
    }

    .carded {

        padding: 2rem;
        margin-top: 20px;

    }

    .S4bdZ3VYnOhPiTGUyVLzy ._3RCSM95D-k4_JqhjxQqJwy {
        display: flex;
        margin-bottom: 2.4rem;
    }

    ._28IelIKC,
    ._2RGsPtNo,
    ._2-OFoVSR {
        font-family: BodyFont, sans-serif;
        font-weight: 300;
        font-size: 1.6rem;
        line-height: 1.9rem;
    }

    .tdQ {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
    }

</style>
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image: url(frontend-assets/images/background/3.jpg);">
        <div class="auto-container">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li class="active">Cart List</li>
            </ul>
            <h1>Shop Detail</h1>
        </div>
    </section>





    <div class="container">
        <div class="row">
            <div class="col-md-12">
                       <h2 style="font-weight: 700;text-align: center;text-align: center;margin-top: 15px;margin-bottom: 25px;">Provide Your Payment Info</h2>



                        <div class="table-responsive">
                          <h4 style="font-weight: 500;margin-bottom: 15px;">Order Summery</h4>
                       <table class="table">
                          <thead class="thead-dark">
                            <tr style="background-color: #1362a1;color: white;">
                              <th scope="col">Wireless number</th>
                              <th scope="col">Carrier</th>
                              <th scope="col">Amount</th>
                              <th scope="col">Fee</th>
                              <th scope="col">Tax</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">{{$history['mobileno']}}</th>
                              <td>{{$history['carrier']}}</td>
                              <td>$ {{$history['price']}}</td>
                              <td>$ {{$history['tax']}}</td>
                              <td>$ 0</td>
                              <td>${{$history['price'] + $history['tax']}}</td>
                            </tr>
                           
                          </tbody>
                        </table>

                        </div>


            </div>
            <div class="col-md-8 product col-md">
                <div class="card">

                    <!-- Warenty Box -->
                    <div class="warrenty-box">
                 
                        <hr>
                        <div class="row">
                            <div class="col-md-6" style=" margin-left: 16px;">

                                <label>Select Previously Added Address</label>
                                <select class="form-control" onchange="getAddress(this)">
                                    <option value="0"> Select Address</option>
                                    @if (Auth::check())
                                        @foreach (CityClass::shippingAddress() as $shipAddress)
                                            <option value="{{ $shipAddress->id }}">{{ $shipAddress->shipaddress }}
                                            </option>
                                        @endforeach

                                    @else
                                        <option>Fill below Address Info</option>
                                    @endif

                                </select>

                            </div>
                        </div>
                        <br>
                        <div id="getAddress">
                             <form action="{{ route('carrier.payment') }}" id="formSubmit" method="post">
                                {{ csrf_field() }}
                                <div class="modal-body">


                                     <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <label>First name</label>
                                                <input type="text" required  name="first_name" class="form-control" placeholder="First Name"
                                                    required="" @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->first_name}}" @else value="" @endif>
                                                    @if ($errors->has('first_name'))
                                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last name</label>
                                                <input type="text" required name="last_name" class="form-control" placeholder="Last Name"
                                                required="" @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->last_name}}" @else value="" @endif>
                                                @if ($errors->has('last_name'))
                                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                      
                                    </div> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Full Email"
                                            required="" @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->email}}" @else value="" @endif>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                     
                                            <div class="input-group">
                                            <span class="input-group-addon">us +1</span>
                                            <input type="text" required class="form-control" name="mobileNo" aria-label="Amount (to the nearest dollar)" placeholder="Phone Number" Min="10" Max="11" @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->phoneno}}" @else value="{{$history['mobileno']}}" @endif>
                                           
                                            </div>
                                            @if ($errors->has('mobileNo'))
                                                <span class="text-danger">{{ $errors->first('mobileNo') }}</span>
                                            @endif 
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="shipaddress" class="form-control"
                                            placeholder="Full address"  @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->address}}" @else value="" @endif required>
                                    </div>
                                    <!-- <div class="form-group">
                                            <label>Street Address</label>
                                            <input type="text" name="street_address" class="form-control"  placeholder="Street address" required>
                                        </div> -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                                <input type="text" required name="country" placeholder="Country"  @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->country}}" @else value="United States" @endif
                                                    class="form-control" value="United States">
                                            </div>
                                            <div class="col-md-6">
                                                <label>State</label>
                                                <select name="state" class="form-control" onchange="getCities(this)"
                                                    required>
                                                    <option value="0">Select State</option>
                                                    @foreach (CityClass::states() as $state)
                                                        <option @if(Auth::guard('web')->check())  {{($state->name == Auth::guard('web')->user()->state) ? 'selected' : ''}} @endif value="{{ $state->name }}">{{ $state->name }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City Name"
                                                    @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->city}}" @else value="" @endif required>
                                                @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                                <!-- <select name="city" class="form-control" required id="city">
                                                    <option>Select city</option>
                                                </select> -->
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Zip Code</label>
                                                <input type="text" name="zipcode" placeholder="Zip Code"
                                                    class="form-control"  @if(Auth::guard('web')->check()) value="{{Auth::guard('web')->user()->zipcode}}" @else value="" @endif required>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                   
                                    @if(!Auth::guard('web')->check())
                                    <div class="signed">
                                      <span>Already a customer?</span><a href="{{url('signin')}}"> Sign In here</a>
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4  col-xl-4 col-sm-4">
                <div class="card">
              <div class="checkout-payment">
                    <!-- <div class="payment_methods">
                      <p><label>PayPal Express Checkout <a href="#"><img src="https://sneakerxwars.com/frontend-assets/img/icon/pp-acceptance-small.png" alt=""></a></label></p>
                      <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                    </div> -->
                    <div class="row">
                      <div class="col-lg-12 pl-0 pr-0">
                        <p class="text-dark text-uppercase font-weight-bold"><strong>Payment Method</strong></p>
                      </div>
                    </div>
                    
                    <div class="row">
                       <input type="hidden" form="formSubmit" name="address_id" id="address_id">
                       <input type="hidden" form="formSubmit" name="total" id="total" value="{{$history['price']}}">
                       <input type="hidden" form="formSubmit" name="tax" id="tax" value="{{$history['tax']}}">
                       <input type="hidden" form="formSubmit" name="id" id="id" value="{{$history['id']}}">
                       <input type="hidden" form="formSubmit" name="type" id="type" value="{{$history['type']}}">
                       
                       <input type="hidden" form="formSubmit" name="phoneno" id="phoneno" value="{{$history['mobileno']}}">
                      <div class="col-lg-12 pl-0 pr-0 pb-3">
                      <div class="form-group">

                        <!-- @if (isset($tech))
                        <label for="credit-card" class="payment-methd">
                          <button type="button"  data-toggle="modal" data-target="#exampleModalCenter"> Credit Card </button>
                        </label>
                        <label for="cash" class="payment-methd">
                          <input type="radio"  id="cash" name="payment" value="cash"> Cash
                        </label>
                        @else -->
                        <!-- <label for="cash" class="payment-methd">
                          <input type="radio" id="cash" name="payment" value="cash"> Cash
                        </label> -->
                        <label for="paypal" class="payment-methd">
                          <input type="radio" id="paypal" name="payment" form="formSubmit" value="paypal" onchange="valueChanged()"> Paypal
                        </label>
                      <!--   <label for="apple-pay" class="payment-methd">
                          <input type="radio" id="apple-pay" name="payment" form="formSubmit" value="apple-pay" onchange="valueChanged()"> Apple Pay
                        </label> -->
                        <label for="credit-card" class="payment-methd">
                          <button type="button"  data-toggle="modal" data-target="#exampleModalCenter"> Credit Card </button>
                        </label>
                        <!-- @endif -->

                      </div>

                    </div>
                    </div>

                      
                    <button type="submit" form="formSubmit"  class="btn btn-primary btn-style-one ">Checkout</button>
                    @if(Auth::check())
                   
                    @else
                    <a href="{{url('sigin')}}" class="btn btn-primary btn-style-two">Sigin</a>
                    @endif
                   

                  </div>

                </div>
            </div>
        </div>
    </div>



       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Credit Card</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form id="payment-form" method="post">
                {{-- <input type="hidden" name="total" id="price" value="{{$repairOrderType->sum('price')}}"> --}}
                <div id="card-container"></div>
            </div>
               <button type="button" class="btn btn-primary btn-style-one" data-dismiss="modal" style="margin-bottom: 5px;margin-left: 5px">Close</button>
                <button id="card-button" class="btn btn-primary btn-style-one" type="button" style="margin-bottom: 5px">Pay</button>
                <button class="buttonload btn btn-primary btn-style-one" style="display: none" id="buttonload">
                  <i class="fa fa-circle-o-notch fa-spin"></i> Loading
                </button>
              </form>
        </div>

      </div>

  </div>
@endsection
@section('script')
<script>
  function valueChanged()
    {
      if($('#credit-card').is(":checked")) {
        $("#card-form").show();
      }else if($('#paypal').is(":checked")){
        $("#card-form").hide();
      }else if($('#apple-pay').is(":checked")){
        $("#card-form").hide();
      }else{
        $("#card-form").hide();
      }

    }
</script>
<script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
  <script type="text/javascript">
    async function main() {
      const payments = Square.payments('sandbox-sq0idb-XTzUm4GcIO3nEEVwThTwRA', 'LEDBH9HCJM9K6');
      const card = await payments.card();
      await card.attach('#card-container');

      async function eventHandler(event) {
              event.preventDefault();
             $('#card-button').hide();
             $('#buttonload').show();
        try {
          const result = await card.tokenize();
          if (result.status === 'OK') {
            console.log(result.token);
            var squaretoken = (result.token);
            var formData =$('#formSubmit').serialize();
            console.log(formData);
            var address_id = $('#address_id').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var phoneno = $("#phoneno").val();
            var _token = $('input[name="_token"]').val();

             // alert(_token);
            $.ajax({

                    url: "{{ route('square.paymentCarrier') }}",
                    type: 'post',
                    data:{ formData:formData,mobileNo:phoneno,squaretoken:squaretoken,_token: _token},

                    success: function(data) {
                        console.log(data);
                        window.location = '{{ route('payment.completed') }}';
                        // $('#bustype').html(data);
                        //  $("#count").html(data.count);

                        // alert(rowCount);

                    },
                  error: function (xhr) {
                   alert(JSON.parse(xhr.responseText).message);
                    $('#buttonload').hide();
                    $('#card-button').show();
                    }
                });
          }
        } catch (e) {
          console.error(e);
          $('#buttonload').hide();
          $('#card-button').show();
        }
      };

      const cardButton = document.getElementById('card-button');
      cardButton.addEventListener('click', eventHandler);
    }

    main();
  </script>
    <script>
        function couponCode() {
            var coupon = $('#coupon').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{ route('apply.coupon') }}",
                data: {
                    coupon: coupon,
                    _token: _token
                },
                success: function(response) {
                    console.log(response);
                    if (response == "null") {
                        alert('Coupon Code is Not Valid.');

                        $('#coupon').val('');
                    } else {
                        alert('Coupon Code Apply Successfully');
                        // window.location.reload();

                        $("#total").hide();
                        var total = '<strong><span class="total-amount" id="totalss">$' + response +
                            '</span></strong>';
                        $("#totalss").append(total);

                    }
                }
            });
        }



        // window.onload = function() {
        //     var reloading = sessionStorage.getItem("reloading");
        //     if (reloading) {
        //         sessionStorage.removeItem("reloading");
        //         myFunction();
        //     }
        // }

        function myFunction() {

            $.ajax({
                type: "get",
                url: "{{ route('coupon.remove') }}",
                success: function(response) {
                    // console.log(response);
                    // alert('Coupon Remove');


                }
            });
        }



        function recal(pid) {
            // var _token = $('input[name="_token"]').val();
            // alert(pid);
            var id = pid;
            var value = $('#change' + id).val();
            $.ajax({
                type: "post",
                url: "{{ route('cart.update') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: pid,
                    quantity: value
                },
                success: function(user) {
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        // function removeval(id){
        //     //  alert(id);
        //     $("#change"+id).removeVal('value');

        //     }

        function dlt(item) {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "post",
                url: "{{ route('cart.remove') }}",
                data: {
                    id: item,
                    _token: _token
                },
                success: function(user) {
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function getAddress(event) {
            var id = $(event).val();
            $('#address_id').val(id);
            // alert(id);
            console.log(id);
            if (id == 0) {
                $('#getAddress').reset();
            }
          
            $.ajax({
                url: "{{ url('billAddress') }}/" + id,
                type: "get",
                success: function(response) {
                    console.log(response);
                    $('#getAddress').html(response);
                    //   $('#exampleModal'+id).modal('show');
                },

            });


        }

        function getCities(event) {
            var id = $(event).val();
            // alert(id);
            console.log(id);
            if (id == 0) {
                $('#city').reset();
            }

            $.ajax({
                url: "{{ url('getcity') }}/" + id,
                type: "get",
                success: function(response) {
                    console.log(response);
                    $("#city").html(response);
                },

            });

        }
    </script>



@endsection
