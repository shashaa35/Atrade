@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Parties</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Bill</th>
                                <th>Pending Amount</th>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach ($parties as $party)
                                    <tr>
                                        <td><a href={{url('/')}}/party/{{$party->id}}>{{$party->name}}</a></td>
                                    <?php $bills = "" ;$total=0;?>
                                @foreach($party->bills as $bill)
                                    <?php $bills .= $bill->id."," ; ?>
                                    <?php $total += $bill->total - $bill->paid; ?>
                                @endforeach
                                        <td>{{substr($bills, 0, -1)}}</td>
                                        <td>{{$total}}</td>    
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
