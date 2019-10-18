@extends('layouts.app')

@section('content')
<div class="container">
    <div align="center" class="text-warning">

       <div class="col-md-10"><br><br><br><br><br><br>
       
     
    
      <form action="{{ route('user_pr') }}" method = "GET" role="search" >
        
         <div class="form-group">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Type Purchase Request Number to Search.." name="term" required autofocus>

               <button type="submit" class="btn btn-success">Search</button>


                

            </div>
      
       

    </div>

</form>

    <!-- <div class="fixed-bottom">© 2019 Copyright:
      <a href=""> Provincial Government of Northern Samar - Management Information System Office (MISO)</a>
    </div><br> -->
<div class="footer fixed-bottom">

    <div class="container">

        <div align="center" class="text-warning">
            
        <hr />

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
