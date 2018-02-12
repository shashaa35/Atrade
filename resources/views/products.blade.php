@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Products</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{$godowns}} -->
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Godown</th>
                                <th>Location</th>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach ($godowns as $godown)
                                @foreach($godown->products as $product)
                                    <tr>
                                        <td><a href={{url('/')}}/product/{{$product->id}}>{{$product->name}}</a></td>
                                        <td>{{$product->qty}}</td>
                                        <td>{{$godown->name}}</td>    
                                        <td>{{$godown->location}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                <div class="col-md-12">
                    <a href={{url('/add_product')}} class="col-md-6 col-md-offset-3 btn btn-success">Add a new product</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
