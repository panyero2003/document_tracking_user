 @extends('layouts.app')

@section('content')

<body><br><br>
	
<div class="container">
	<div class="row">
	
		<!-- <table class="table table-striped" center> -->
        <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
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
            
         
        </tr>
        </thead>
        <tbody>

		@if(count($prs) > 0)		
        	@foreach($prs as $pr)
			
			<tr>
                    <td>{{$pr->id}}</td>
                    <!-- <td><a href="">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td> -->
                    <td>{{$pr->obrpart}}</td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    <td>{{$pr->bacreleaseddate}}</td>
                    <td>{{$pr->bacreleasedreason}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pboreldate}}</td>
                    
                    
                    <td>{{$pr->pboreleasedreason}}</td>
            
                     <td>{{$pr->pacctoreldate}}</td>
                    <td>{{$pr->pacctoreleasedreason}}</td>
            
                    
                    
                     <td>{{$pr->ptoreldate}}</td>
                   
                    <td>{{$pr->ptoreleasedreason}}</td>

                
                     <td>{{$pr->pgoreldate}}</td>
                   
                    <td>{{$pr->pgoreleasedreason}}</td>

           
           
                    
          </td>

			@endforeach

			@else
				<div class="alert-success" role="alert">
					<tr><td colspan="15"><strong>No records found! Please check your Purchase Request Number.</strong></td></tr>
				</div>
		@endif

			</tr>
		 </tbody>
		</table>	
		<div>
			<p><a href="{{route('my-search')}}">Back</a></p>
		
		</div>

</div>

</div>

	</div>
</body>
</html>

@endsection