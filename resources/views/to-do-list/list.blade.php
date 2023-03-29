@extends('layouts.master')
@section('content')
<style>
  .sidebar-nav .nav-link {
    background: #182a55;
    color: white;
    margin-left: 0px;
    margin-top: 7px;
    margin-bottom: 5px;
}
</style>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TO-DO-LIST</h4>
 
                  
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Topic</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                      </thead>
                    <tbody id="table_data">
                         <?php $count=1; ?>
                         @if(count($to_do_list)>0)
                         @foreach($to_do_list as $to_do_lists)
                        <tr id='sid{{$to_do_lists->id}}'>
                          <td>{{$count}}</td>
                          <td>{{$to_do_lists->topic}}</td>
                          <td>{{$to_do_lists->date}}</td>
                          <td>{{$to_do_lists->time}}</td>
                          <td>
                          	@if($to_do_lists->status ==	0)
                          	<a class="btn btn-success">Completed</a>
                          	@else
                          	<a class="btn btn-danger">In-progress</a>
                          	@endif
                          </td>
                          <td class="text-center">
                          	<a class="btn btn-primary" href="{{url('edit/'.$to_do_lists->id)}}">Edit</a>
                          	<a class="btn btn-danger button" data-id="{{$to_do_lists->id}}">Delete</a>
                          </td>
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                         @else
                        <tr>
                          <td colspan="6" class="text-center">no record found</td>
                        </tr>
                         @endif
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection

<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">

  $(document).on('click','.button',function(e){
    e.preventDefault();
    var id = $(this).data('id');
    // alert(id);
      swal({
        title: "Are you sure?",
        text: "Do you realy want to delete this Record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
          url: "delete/"+id,
          type: 'DELETE',
          data: {
              "id":id,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response){
          $('#sid'+id).remove();
        }
      });
    swal("Poof! Your Record  has been deleted!", {
      icon: "success",
    });
    } else {
      swal("Your Record is safe!");
    }
});




    });
  </script>