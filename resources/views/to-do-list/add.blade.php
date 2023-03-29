@extends('layouts.master')
@section('content')
 
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">ADD-TO-DO-LIST</h4>
  			@if(Session::has('success'))
            	<div class="alert alert-success">{{Session::get('success')}}</div>
            @endif

            @if(Session::has('fail'))
            	<div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
      		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
			@endif
      <form class="forms-sample" action="{{url('add-user')}}" method="post">
      	@csrf
        <div class="form-group">
          <label for="topic">Topic</label>
          <input type="text" class="form-control" value="{{old('topic')}}" id="topic" name="topic" placeholder="Topic" style="background: lightgray; color:black;">
        </div>  
        <div class="form-group">
          <label for="discreption">Discreption</label>
          <textarea  class="form-control" rows="5" value="" name="discreption" id="discreption" style="background: lightgray;">{{old('discreption')}}</textarea>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" value="{{old('date')}}" name="date" id="date" placeholder="Date" style="background: lightgray;">
        </div>  
        <div class="form-group">
          <label for="time">Time</label>
          <input type="time" class="form-control" value="{{old('time')}}" name="time" id="time" placeholder="Time" style="background: lightgray;">
        </div>        
        <div class="form-group">
          <label for="time">Status</label>
          <select name="status" class="form-control" style="background:lightgray;">
          	<option value="">select status</option>
          	<option value="1">In-Progress</option>
          	<option value="0">Completed</option>
          </select>
        </div>   
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection