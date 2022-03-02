@extends('frontend.layouts.master')
<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/custom.css')}}">

<style type="text/css">
 .field_pinles {
    position: absolute;
    right: 19px;
    top: 7px;
    font-size: 12px;
    line-height: 16px;
    color: #888;
    z-index: 999;
    font-family: 'PT Sans',sans-serif;
}
.country-dropdown{
  text-align: center;
  margin-top: 15px;
  margin-bottom: 15px;
}
.plan-row .bill-box{
  padding: 0 !important;
  height: 190px !important;
}
.plan-price{
  background: #00bfa5;
  padding: 15px;
  font-size: 25px;
  font-weight: 500;
}
.plan-desc{
  padding: 36px 30px;
}
</style>
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/xcode.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/bootstrap-select-country.min.css')}}">
<!--Page Title-->
<!-- <section class="page-title" style="background-image: url(frontend-assets/images/background/3.jpg);">
	<div class="auto-container">
    	<ul class="bread-crumb">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Shop</li>
        </ul>
    	<h1>Shop</h1>
    </div>
</section> -->
<!--End Page Title-->

<!--Shop Section-->
<section class="bills-section bills-page">
	<div class="auto-container">
    	<!--Sort By-->         
      <!-- <div class="sec-title-one">
        <h2>CHOOSE A CARRIER</h2>
      </div> --> 
      <!-- Tabs navs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li role="presentation"><a href="{{url('pay-bills')}}">Wireless Refill</a></li>
    <li role="presentation" class="active"><a href="{{url('pay-bills')}}">International Refill</a></li>
  </ul>
<!-- Tabs navs -->   
<!-- Tabs content -->
  <div class="tab-content" style="margin-top: 3rem;">
    <div role="tabpanel" class="tab-pane active" id="home">
      <!-- <div class="sec-title-one">
        <h2>{{$getSingleData->name}}</h2>
      </div> -->
          <div class="row clearfix d-flex justify-content-center" style="margin-top: 20px;">
        
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div><div class="field_pinles"><i class="glyphicon bfh-flag-{{$getSingleData->country_class}}"></i></div>  </div>
          <div class="bill-box" style="cursor: pointer;" data-toggle="modal" data-target="#myModal{{$getSingleData->id}}">
            <img src="{{asset($getSingleData->image)}}">
          </div>
        </div>
        <div id="myModal{{$getSingleData->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">{{$getSingleData->name}}</h4>
            </div>
            <div class="modal-body">
             <form id="billpayment" action="{{url('billPay')}}" method="post">
                 {{ csrf_field() }}
                 <div class="form-group">
                  <label >Price:</label>
                    <input type="text" class="form-control" placeholder="Select price" name="price" list="priceValue" required/>
                      <datalist id="priceValue">
                        @foreach(explode(",", $getSingleData->price) as $price)
                          <option value="{{$price}}"></option>
                          @endforeach
                          
                      </datalist>
                </div>
                <input type="hidden" name="tax" value="{{$getSingleData->tax}}">
                <input type="hidden" name="type" value="wire">
                <input type="hidden"  name="id" value="{{$getSingleData->id}}">
                <input type="hidden"  name="carrier" value="{{$getSingleData->name}}">
                <div class="form-group">
                  <label for="pwd">Mobile no:</label>
                  <input type="number" class="form-control" name="mobileno" required>
                </div>
                <button type="submit" class="btn btn-primary">Pay</button>
             </form>
            </div>
          
          </div>

        </div>
      </div>
        
        
      </div> 
      <br>
      @if($getSingleData->package_type == 'fixed')
      <div class="sec-title-one">
        <h2>International Phone Recharge</h2>
        <br>
        <h2>Choose a plan</h2>
      </div>
        <div class="row clearfix plan-row" style="margin-top: 20px;">
          @foreach(explode(",", $getSingleData->price) as $price)
          <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{url('international-refill/'.$getSingleData->id.'?price='.$price)}}" style="color: #333;">

              <div class="bill-box" style="cursor: pointer;">
                <h4 class="plan-price">${{$price}}</h4>
                <div class="plan-desc">
                  <p>Approximately ${{$price}}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          
        </div>
        @else
        <div>
          <div class="sec-title-one">
            <h2>Enter amount</h2>
          </div>
          <div class="row clearfix d-flex justify-content-center">
            
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
              <form method="get" action="{{url('international-refill/'.$getSingleData->id)}}">
                <span class="amount-alert" style="color: red;"></span>
                <br>
                <div class="form-group">
                  <input type="number" name="price" placeholder="{{$getSingleData->min_limit}}-{{$getSingleData->max_limit}}" id="numberbox" class="form-control" onkeyup="checkLimit({{$getSingleData->min_limit}},{{$getSingleData->max_limit}})">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" id="next-btn" disabled="">Next Step</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        @endif
        <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <h3><a href="{{url('pay-bills')}}"> < Back</a></h3>
        </div>
    </div>
    
  </div>
<!-- Tabs content -->     
  
      <div class="row clearfix" style="margin-top: 2em; margin-bottom: 2em;">
        <div class="col-md-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="{{asset('frontend-assets/js/bootstrap-select-country.min.js')}}"></script>  
<script>
function country(event){
  
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
   $.post("{{ url('searchCountry')}}",
  {
    country: event.value
  },
  function(data){
    $('#searchCountry').html(data);
    // alert("Data: " + data );
  });
}
// var min_limit = "{{$getSingleData->min_limit}}";
//   var max_limit = "{{$getSingleData->max_limit}}";
//   console.log(min_limit);
//   console.log(max_limit);
  function checkLimit(min_limit,max_limit){
    // console.log(min_limit);
    // console.log(max_limit);
    var value = $('#numberbox').val();
    // alert(value);
      if (value > max_limit || value < min_limit){
        if(value < min_limit){
          $('.amount-alert').html('Price should be greater then '+ min_limit);
        }
        if(value > max_limit){
          $('.amount-alert').html('Price should be less then '+ max_limit);
        }
        $('#next-btn').prop('disabled', true);
      }else{
        $('.amount-alert').html('');
        $('#next-btn').prop('disabled', false);
      }
  }
// $('#numberbox').keyup(function(){
  
  
//   console.log($(this).val());
//   if ($(this).val() > 50 || $(this).val() < 4){
//     if($(this).val() < 4){
//       $('.amount-alert').html('Price should be greater then '+ 4);
//     }
//     if($(this).val() > 50){
//       $('.amount-alert').html('Price should be less then '+ 50);
//     }
//     $('#next-btn').prop('disabled', true);
//   }else{
//     $('.amount-alert').html('');
//     $('#next-btn').prop('disabled', false);
//   }
// });

</script>
@endsection