@extends('layouts.app')

@section('content')



    <h1>User Activity Logs</h1>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
        {!! Form::open(['route' => 'user_land.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

        <div class="input-group">

            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
         
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i><b>Search</b>
                </button>
            </span>
        </div>
  {!! Form::close() !!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Authenticable Type</th>
            <th>Authenticable ID</th>
            <th>User Agent</th>
           
            <th>Login At</th>
            
            <th>Logout At</th>
            
            <th>Action Taken</th>
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="">{{$pr->department ? $pr->department->depname : ''}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    
                    <td>{{$pr->pboobrno}}</td>
                    
                    <td>{{$pr->pboreldate}}</td>
                    <td>{{$pr->source ? $pr->source->name : ''}}</td>
                    <td>{{$pr->status ? $pr->status->name : ''}}</td>
                    
                    
                 <td>
            @if ($pr->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="0">
              <input type="hidden" id="pboreldate" name="pboreldate" value="<?php echo date('Y-m-d H:i:s'); ?>">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>

         
          <!-- <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PurchaseRequestController@destroy',$pr->id]]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
          </td> -->

        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $prs->render() !!}
    

@stop

