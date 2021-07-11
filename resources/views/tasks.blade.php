<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/user')}}">show users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/add')}}">Add Task</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/user/create')}}">Sign up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/login')}}">Log In</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/logout')}}">Log out</a>
              </li>


            </ul>

          </div>
        </div>
      </nav>

<div class="container   "  >
    {{-- <h2>{{'welcome'}}</h2> --}}

    {{-- @foreach ($data as $fetchedData)

    @endforeach --}}
        <h1 class="text-center">My Tasks</h1>
<div class=" row my-5">
    @foreach ($tasks as $fetchedData)
    <div class="col-6">
        <div class="card mb-3 ">
            <h5 class="card-header">
                {{$fetchedData ->title}}
            </h5>
            <div class="card-body">

              <p class="card-text">{{$fetchedData ->content}}</p>
              <p class="card-text">{{$fetchedData ->created_at}}</p>
              <p class="card-text">{{$fetchedData ->updated_at}}</p>
              <div class="d-flex justify-content-end"  ">
                <a href="#" class="btn btn-success me-2 ">Mark as Completed</a>
                <a href="#" class="btn btn-primary me-2 ">Edit</a>
              <a href="#" class="btn btn-danger ">Delele</a>

            </div>
            </div>
          </div>
    </div>



@endforeach

</div>








{{-- @if()
@else
@endif

@for()

@endfor

@foreach ($collection as $item)


@endforeach

@@isset($record)

@endisset
@empty($record)

@endempty --}}


</div>


</body>
</html>
