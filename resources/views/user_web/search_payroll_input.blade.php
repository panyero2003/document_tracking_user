@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
     <div class="card-body">
      <form class="example" action="{{ route('user_payroll') }}" method = "GET" role="search" >
        
        <div class="col-md-10"  align="center">
                
                <input type="text" placeholder="Type OBR Number to Search.." name="term" required>
                
                <button type="submit" class="btn btn-success">Search</button>

     </div>
</form>
</div>


    <!-- <div class="fixed-bottom">© 2019 Copyright:
      <a href=""> Provincial Government of Northern Samar - Management Information System Office (MISO)</a>
    </div><br> -->
    <div class="footer fixed-bottom">
    <footer class="page-footer font-small blue pt-4 mt-4 navbar-fixed-bottom">

    <div class="container">

        <div align="center" class="text-warning" style="color:Tomato;">
            
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

</div>
</div>
</div>

@endsection
