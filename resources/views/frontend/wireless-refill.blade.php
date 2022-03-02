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
<?php  

$price = Request::get('price');
?>
<!--Shop Section-->
<section class="bills-section bills-page">
	<div class="auto-container">
    	<!--Sort By-->         
      <!-- <div class="sec-title-one">
        <h2>CHOOSE A CARRIER</h2>
      </div> --> 
      <!-- Tabs navs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="{{url('pay-bills')}}" >Wireless Refill</a></li>
    <li role="presentation"><a href="{{url('pay-bills')}}">International Refill</a></li>
  </ul>
<!-- Tabs navs -->   
<!-- Tabs content -->
  <div class="tab-content" style="margin-top: 3rem;">
    <div role="tabpanel" class="tab-pane active" id="home">
     
      <div id="wireless-details">
        <div class="sec-title-one" style="margin-bottom: 10px;">
          <h2>Wireless Refill</h2>
          <h3 style="font-weight: 500;">Enter Your {{$getSingleData->name}} Wireless Number</h3>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-3">
            <form id="billpayment" action="{{url('billPay')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                   <input type="hidden" value="{{$price}}" name="price"/>
               </div>
               <input type="hidden" name="tax" value="{{$getSingleData->tax}}">
               <input type="hidden" name="type" value="wire">
               <input type="hidden"  name="id" value="{{$getSingleData->id}}">
               <input type="hidden"  name="carrier" value="{{$getSingleData->name}}">
               <div class="form-group">
                 <label for="pwd">Mobile no:</label> 
                 <input type="number" class="form-control" name="mobileno" placeholder="+53 xxx xxx xx" required>
               </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding: 6px 25px;">Next Step</button>
              </div>
            </form>
          </div> 
        </div>
        <br><br>
        <div class="sec-title-one" style="margin-bottom: 10px;">
          <h2>Your Carrier and Plan</h2>
        </div>
        <br>
        <div class="row clearfix d-flex justify-content-center" style="margin-top: 20px;">
          
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="bill-box" style="cursor: pointer;">
              <img src="{{asset($getSingleData->image)}}">
            </div>
          </div>
        </div>
        <div class="row clearfix plan-row justify-content-center d-flex" style="margin-top: 20px;">
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="bill-box" style="cursor: pointer;">
              <h4 class="plan-price">${{$price}}</h4>
              <div class="plan-desc">
                <p>Unlimited Talk, Text, Int'l Text, & Data (First 3GB @ 4G Speeds)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <h3><a href="{{url('wireless-refill/plans/'.$getSingleData->id)}}"> < Back</a></h3>
        </div>
      </div>
    </div>
    
  </div>
<!-- Tabs content -->     
  
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
function nextStep(id){
  alert(id);
}
</script>
@endsection