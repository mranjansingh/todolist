<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$title}} | To-Do-List</title>
  @include('partials.styles')
  
</head>
<body>
    <div class="container-scroller">
        @include('partials.headerdashboard')
        @include('partials.header')
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')
             <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('partials.footer')   
            </div>
        </div>
    </div>

@include('partials.scripts')
</body>

</html>