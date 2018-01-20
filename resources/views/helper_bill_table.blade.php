<table style= " table-layout:fixed;" class="table table-bordered">
    <thead>
        <th style ="word-break:break-all;">Id</th>
        <th style ="word-break:break-all;">Products</th>
        <th style ="word-break:break-all;">Payments</th>
        <th style ="word-break:break-all;">Total</th>
        <th style ="word-break:break-all;">Paid</th>
        <th style ="word-break:break-all;">Remarks</th>
        <th style ="word-break:break-all;">Status</th>
    </thead>
    <tbody>
    @foreach($bill_arr as $bill)
        <tr>
            <td style ="word-break:break-all;">{{$bill->id}}</td>
            <td style ="word-break:break-all;">{{$bill->products}}</td>
            <td style ="word-break:break-all;">{{$bill->payments}}</td>
            <td style ="word-break:break-all;">{{$bill->total}}</td>
            <td style ="word-break:break-all;">{{$bill->paid}}</td>
            <td style ="word-break:break-all;">{{$bill->remarks}}</td>
            <td style ="word-break:break-all;">{{$bill->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<hr>