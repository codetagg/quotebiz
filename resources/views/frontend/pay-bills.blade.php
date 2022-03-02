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
      <div class="sec-title-one">
        <h2>CHOOSE A CARRIER</h2>
      </div> 
      <!-- Tabs navs -->
  <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Wireless Refill</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">International Refill</a></li>
  </ul>
<!-- Tabs navs -->   
<!-- Tabs content -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
          <div class="row clearfix" style="margin-top: 20px;">
        @foreach(CityClass::paybills() as $bills)
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="bill-box" style="cursor: pointer;">
            <a href="{{url('wireless-refill/plans/'.$bills->id)}}">
              <img src="{{asset($bills->image)}}">
            </a>
          </div>
        </div>
        <div id="myModal{{$bills->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">{{$bills->name}}</h4>
            </div>
            <div class="modal-body">
             <form id="billpayment" action="{{url('billPay')}}" method="post">
                 {{ csrf_field() }}
                 <div class="form-group">
                  <label >Price:</label>
                    <input type="text" class="form-control" placeholder="Select price" name="price" list="priceValue" required/>
                      <datalist id="priceValue">
                        @foreach(explode(",", $bills->price) as $price)
                          <option value="{{$price}}"></option>
                          @endforeach
                          
                      </datalist>
                </div>
                <input type="hidden" name="tax" value="{{$bills->tax}}">
                <input type="hidden" name="type" value="wire">
                <input type="hidden"  name="id" value="{{$bills->id}}">
                <input type="hidden"  name="carrier" value="{{$bills->name}}">
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
        @endforeach
        
      </div> 
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <div class="country-dropdown">
        <h3 style="margin-bottom: 20px;font-weight: 500;margin-top: 20px;">Select Country</h3>
        <select class="selectpicker countrypicker" onchange="country(this)" data-flag="true" data-countries="CU,PR,DO,HT,HN,GT,SV,JM,MX,TT" data-live-blank="true" data-live-search="true"data-max-options="1" multiple title="select country.."></select>
      </div>
      <div id="searchCountry"> 
      
          <div class="row clearfix" style="margin-top: 20px;">
        @foreach(CityClass::paybillsInt() as $bills)
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div><div class="field_pinles"><i class="glyphicon bfh-flag-{{$bills->country_class}}"></i></div>  </div>
          <div class="bill-box" style="cursor: pointer;">
            <a href="{{url('international-refill/plans/'.$bills->id)}}">
              <img src="{{asset($bills->image)}}">
            </a>
          </div>
        </div>
        <div id="myModals{{$bills->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
              <h4 class="modal-title">{{$bills->name}}</h4>
              <button type="button" class="close" data-dismiss="modal" style="float: none">&times;</button>
            </div>
            <div class="modal-body">
             <form id="billpayment" action="{{url('billPay')}}" method="post">
                 {{ csrf_field() }}
                  <input type="hidden" name="type" value="inter">
                  <input type="hidden" name="tax" value="{{$bills->tax}}">
                  <input type="hidden"  name="carrier" value="{{$bills->name}}">
                  <input type="hidden"  name="id" value="{{$bills->id}}">
                 <div class="form-group">
                  <label >Price: </label>
                    <input type="text" class="form-control" placeholder="Select price" name="price" list="priceValue" required/>
                      <datalist id="priceValue">
                        @foreach(explode(",", $bills->price) as $price)
                          <option value="{{$price}}"></option>
                          @endforeach
                          
                      </datalist>
                </div>
                
                <div class="form-group">
                  <label for="pwd">Mobile no:</label>
                  <input type="number" class="form-control" name="mobileno" id="pwd" required>
                </div>
                <button type="submit" class="btn btn-primary">Pay</button>
             </form>
            </div>
          
          </div>

        </div>
      </div>
        @endforeach
        
      </div> 
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
</script>
@endsection