  <div class="row clearfix" style="margin-top: 20px;">
        @foreach($carriers as $bills)
        <div class="col-xs-6 col-sm-4 col-md-3 col-{{$bills->country_class}}-{{$bills->id}}">
          <div><div class="field_pinles"><i class="glyphicon bfh-flag-{{$bills->country_class}}"></i></div>  </div>
          <a href="{{url('international-refill/plans/'.$bills->id)}}" style="color: #333;">
          <div class="bill-box" style="cursor: pointer;">
            <img src="{{asset($bills->image)}}">
          </div>
        </a>
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