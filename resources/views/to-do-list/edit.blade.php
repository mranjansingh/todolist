@extends('layouts.master')
@section('content')
 
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">TO-DO-LIST</h4>
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
      <form class="forms-sample" action="{{url('update-user/'.$edit->id)}}" method="post">
        <input type="hidden" name="EditId" value="{{$edit->id}}">
      	@csrf
        <div class="form-group">
          <label for="topic">Topic</label>
          <input type="text" class="form-control" value="{{$edit->topic}}" id="topic" name="topic" placeholder="Topic" style="background: lightgray; color:black;">
        </div>  
        <div class="form-group">
          <label for="discreption">Discreption</label>
          <textarea  class="form-control" rows="5" value="" name="discreption" id="discreption" style="background: lightgray;">{{$edit->discreption}}</textarea>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" value="{{$edit->date}}" name="date" id="date" placeholder="Date" style="background: lightgray;">
        </div>  
        <div class="form-group">
          <label for="time">Time</label>
          <input type="time" class="form-control" value="{{$edit->time}}" name="time" id="time" placeholder="Time" style="background: lightgray;">
        </div>        
        <div class="form-group">
          <label for="time">Status</label>
          <select name="status" class="form-control" style="background:lightgray;">
          	<option value="" style="color:black;"  >select status</option>
          	<option value="1" style="color:black;" <?php if($edit->status ==1){echo 'selected';}?>>In-Progress</option>
          	<option value="0" style="color:black;" <?php if($edit->status ==0){echo 'selected';}?>>Completed</option>
          </select>
        </div>   
        <button type="submit" class="btn btn-primary mr-2">update</button>
      </form>
    </div>
  </div>
</div>
@endsection