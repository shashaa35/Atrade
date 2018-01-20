@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Party Info</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$party->name}}</h2>
                    <h3>{{$party->mobile}}</h3>
                    <h3>{{$party->email}}</h3>
                    <h3>{{$party->address}}</h3>
                    <hr>
                    @if($party->bills)
                        <?php $pending = array(); $completed = array();?>
                        @foreach($party->bills as $bill)
                            @if($bill->total != $bill->paid)
                                <?php $pending[] = $bill ;?>
                            @else
                                <?php $completed[] = $bill ;?> 
                            @endif
                        @endforeach
                        @if(!empty($pending))
                            <h2>Pending Bills</h2>
                            @include('helper_bill_table',['bill_arr'=>$pending])
                        @endif

                        @if(!empty($completed))
                            <h2>Completed Bills</h2>
                            @include('helper_bill_table',['bill_arr'=>$completed])
                        @endif

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
