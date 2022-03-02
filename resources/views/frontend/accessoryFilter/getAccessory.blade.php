

 @foreach ($accessories as $accessory)
 @php
     $model = App\Models\Pmodel::where('id',$accessory->model_id)->first();
     $imag = App\Models\AccessoryImage::where('accessory_id',$accessory->id)->first();
 @endphp
<div class="shop-item col-md-4 col-sm-6 col-xs-12">
    <div class="inner-box">
        @if (Auth::user())

        @if (CityClass::accessWishlist($accessory->id) == "1")
        <a href="#" onclick="undoWishlist({{$accessory->id}})"><i class="fa fa-heart" style="font-size: 17px;color:#ff0707"></i></a>
        @else
        <a href="#" onclick="wishlist({{$accessory->id}})"><i class="fa fa-heart" style="font-size: 17px;color:#adadad"></i></a>
        @endif
      @else
      <a href="#" onclick="wishlist({{$accessory->id}})"><i class="fa fa-heart" style="font-size: 17px;color:#adadad"></i></a>
     @endif
      <a href="{{route('accessory.single',$accessory->id)}}" class="colored">
          <figure class="image-box">
             <img src="{{asset('/storage/accessories/images/'.$imag->images)}}" alt="" class="imagess"/>
            </figure>
            <!--Lower Content-->
            <div class="lower-content">
              <h5> <strong>{{ $model->brand->brand_name }} {{ $model->model_name }}</strong></h5>
              <div> <span>{{ $accessory->category_id }} - {{ $accessory->name }}</span> </div>
                <span>
                {{-- Warranty: 12 months --}}
                </span>
                <div>Starting from</div>
                <div class="price">
                <strong>${{ $accessory->sell_price }}.00</strong> <del>${{ $accessory->orig_price }}.00</del></div>
                <!-- <a href="{{url('single')}}" class="cart-btn theme-btn btn-style-two">Add to cart</a> -->
            </div>
                      </a>
      </div>
  </div>
@endforeach
