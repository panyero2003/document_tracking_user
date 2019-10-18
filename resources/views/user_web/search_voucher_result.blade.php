@extends('layouts.app')

@section('content')

  
	<div class="container">
      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Contractor.</th>
            <th>OBR No</th>
            <th>Amount</th>
            <th>Payee</th>
            <th>Budget Status</th>
            <th>Budget Released Date</th>
            <th>Budget Remarks</th>
            <th>Accounting Status</th>
            <th>Accounting Released Date</th>
            <th>Accounting Remarks</th>
            <th>Treasurer Status</th>
            <th>Treasurer Released Date</th>
            <th>Treasurer Remarks</th>
            <th>PGO Status</th>
            <th>PGO Released Date</th>
            <th>PGO Remarks</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if(count($vouchers) > 0)  

            @foreach($vouchers as $voucher)


                <tr>
                    <td>{{$voucher->id}}</td>
                    
                   <td>{{$voucher->contractor}}</td>
                   <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->obramt}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pbo_status ? $voucher->pbo_status->name : ''}}</td>
                    <td>{{$voucher->pboreldate}}</td>
                    <td>{{$voucher->pboreleasedreason}}</td>
                    <td>{{$voucher->accounting_status ? $voucher->accounting_status->name : ''}}</td>
                    <td>{{$voucher->pacctoreldate}}</td>
                    <td>{{$voucher->pacctoreleasedreason}}</td>
                    <td>{{$voucher->treas_status ? $voucher->treas_status->name : ''}}</td>
                    <td>{{$voucher->ptoreldate}}</td>
                    <td>{{$voucher->ptoreleasedreason}}</td>
                    <td>{{$voucher->pgo_status ? $voucher->pgo_status->name : ''}}</td>
                    <td>{{$voucher->pgoreldate}}</td>
                    <td>{{$voucher->pgoreleasedreason}}</td>
           

        {!! Form::close() !!}
          </td>

        </tr>
      @endforeach
        @else
                <div class="alert-success" role="alert">
                    <tr><td colspan="15"><strong>No records found! Please check your OBR Number.</strong></td></tr>
                </div>
    @endif
        </tbody>
    </table>

{!! $vouchers->render() !!}

<a href="javascript:history.back()">Go Back</a>

</div>

<div class="footer fixed-bottom">
    <footer class="page-footer font-small blue pt-4 mt-4 navbar-fixed-bottom">

    <div class="container">

        <div align="center" class="text-warning">
            
        <!-- <hr /> -->

           <?php
            // $copyYear = 2019; // Set your website start date
            // $curYear = date('Y'); // Keeps the second year updated
            // echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> © 2019 Copyright: Provincial Government of Northern Samar - Management Information System Office (MISO).
            <!-- <p>Email Address: <a href="mailto:panyero2003@yahoo.com">panyero2003@yahoo.com</a>.</p> -->
        </div>
    </div>
    <br>
</div>
@stop

