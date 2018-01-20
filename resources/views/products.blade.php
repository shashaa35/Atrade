@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

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
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Godown</th>
                                <th>Location</th>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach ($godowns as $godown)
                                @foreach($godown->products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->qty}}</td>
                                        <td>{{$godown->name}}</td>    
                                        <td>{{$godown->location}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
