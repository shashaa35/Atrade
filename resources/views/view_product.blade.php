@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product Info</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Name : {{$product->name}}</h2>
                    <h2>Qty  : {{$product->qty}}</h2>
                    <h2>Desc : {{$product->desc}}</h2>
                    <h2>Price: {{$product->price}}</h2>
                    <h2>God  : {{$product->godowns->name}}</h2>
                    <h2><a href={{url('/update_product/'.$product->id)}} class="btn btn-info"> Update product</a></h2>
                    <h2><a href={{url('/delete_product/'.$product->id)}} class="btn btn-danger">Delete product</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
