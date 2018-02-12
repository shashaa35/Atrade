@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit product</div>

                <div class="panel-body">
                    <form class="form-horizontal" method='get' action="{{url('/')}}/update_product_save/{{$product->id}}">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="name">Name:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="qty">Quantity:</label>
                          <div class="col-sm-10">          
                            <input type="integer" class="form-control" id="qty" value="{{$product->qty}}" name="qty" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="desc">Description:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="desc" value="{{$product->desc}}" name="desc">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="price">Price:</label>
                          <div class="col-sm-10">          
                            <input type="integer" class="form-control" id="price" value="{{$product->price}}" name="price">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="godId">Godown:</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="godId" name="godId" required>
                                @foreach($godowns as $godown)
                                  @if($product->godowns->id == $godown->id)
                                    <option value={{$godown->id}} selected="selected">{{$godown->name}}</option>
                                  @else
                                    <option value={{$godown->id}} >{{$godown->name}}</option>
                                  @endif
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
