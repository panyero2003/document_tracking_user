@extends('layouts.app')

@section('content')
<br><br><br>
  <div class="container">

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Particulars</th>
            <th>PR No</th>
            <th>Amount</th>
            
            <th>BAC Released Date</th>
            <!-- <th>BAC Release To</th> -->
            <th>BAC-Remarks</th>
             <th>BAC Status</th>
            <th>Budget OBR No</th>
            
            <th>Budget Released Date</th>
            <th>Budget Remarks</th>
            <th>Budget Status</th>
            
            <th>Accounting Released Date</th>
            <th>Accounting-Remarks</th>
            <th>Accounting Status</th>
           
            <th>Treasurer Released Date</th>
           
            <th>Treasurer-Remarks</th>
             <th>Treasurer Status</th>
            
            <th>PGO Released Date</th>
          
            <th>PGO-Remarks</th>
            <th>PGO Status</th>
            <!-- <th>Status</th> -->
            
         
        </tr>
        </thead>
        <tbody>

     @if(count($prs) > 0)       

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td>{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</td>
                    <td>{{$pr->obrpart}}</td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    
                    <td>{{$pr->bacdatereleased}}</td>
                    <!-- <td>{{ \Carbon\Carbon::parse($pr->bacreldate)->format('m/d/Y')}}</td> -->
                    <!-- <td>{{$pr->bacreleasedto}}</td> -->
                    <td>{{$pr->bacreleasedreason}}</td>
                    <td>{{$pr->bac_status ? $pr->bac_status->name : ''}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    
                    <!-- <td>{{ \Carbon\Carbon::parse($pr->pboreldate)->format('m/d/Y')}}</td> -->
                    <!-- <td>{{ \Carbon\Carbon::parse($pr->pboreldate)->format('m/d/Y')}}</td> -->
                    <td>{{$pr->pboreldate}}</td>
                    
                    
                    <td>{{$pr->pboreleasedreason}}</td>
                    <td>{{$pr->budget_status ? $pr->budget_status->name : ''}}</td>
                   
                     <td>{{$pr->pacctoreldate}}</td>
                    <td>{{$pr->pacctoreleasedreason}}</td>
                    <!-- <td>{{$pr->pacctopendingstatus}}</td> -->
                    <td>{{$pr->acstatus ? $pr->acstatus->name : ''}}</td>
                    
                    
                     <td>{{$pr->ptoreldate}}</td>
                   
                    <td>{{$pr->ptoreleasedreason}}</td>

                    <td>{{$pr->pto_status ? $pr->pto_status->name : ''}}</td>
                     <td>{{$pr->pgoreldate}}</td>
                   
                    <td>{{$pr->pgoreleasedreason}}</td>

                    <td>{{$pr->pgo_status ? $pr->pgo_status->name : ''}}</td>       
   
          </td>
   
        </tr>
      @endforeach

        @else
                <div class="alert-success" role="alert">
                    <tr><td colspan="15"><strong>No records found! Please check your Purchase Request Number.</strong></td></tr>
                </div>

    @endif
        </tbody>
    </table>

{!! $prs->render() !!}
    
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

