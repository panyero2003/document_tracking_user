@extends('layouts.app')

@section('content')

<br><br><br><br>


    <div class="container">
    	
      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Particulars</th>
            <th>AccountCode</th>
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

        @if(count($payrolls) > 0)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="">{{$payroll->department ? $payroll->department->depname : 'No Department'}}</a></td>
                    <td>{{$payroll->pboparticulars}}</td>
                    <td>{{$payroll->pboobrno}}</td>
                    <td>{{$payroll->statuss ? $payroll->statuss->name : ''}}</td>
                    <td>{{$payroll->pboreldate}}</td>
                    <td>{{$payroll->pboreleasedreason}}</td>
                    <td>{{$payroll->acc_status ? $payroll->acc_status->name : ''}}</td>
                    <td>{{$payroll->pacctoreldate}}</td>
                    <td>{{$payroll->pacctoreleasedreason}}</td>
                    <td>{{$payroll->pto_status ? $payroll->pto_status->name : ''}}</td>
                    <td>{{$payroll->ptoreldate}}</td>
                    <td>{{$payroll->ptoreleasedreason}}</td>
                    <td>{{$payroll->pgo_status ? $payroll->pgo_status->name : ''}}</td>
                    <td>{{$payroll->pgoreldate}}</td>
                    <td>{{$payroll->pgoreleasedreason}}</td>
                                          

        </tr>
      @endforeach
        @else
                <div class="alert-success" role="alert">
                    <tr><td colspan="15"><strong>No records found! Please check your OBR Number.</strong></td></tr>
                </div>
    @endif

        </tbody>
    </table>

{!! $payrolls->render() !!}

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

