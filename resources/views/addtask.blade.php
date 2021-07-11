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


<div class="container d-flex justify-content-center  ">
    <form  class="  col-lg-4 col-xxl-3 col-md-5 col-sm-7"  action="{{ url('/addtask') }}"   style=" margin-top: 100px;
}"   method="post"  enctype ="multipart/form-data">
      <h4>Add your Task</h4>

      @csrf
      <div class="mb-3 ">
          <input   type="text" placeholder="title"  value="{{old('title')}}" name="title" class="form-control   @error('title') is-invalid @enderror  "     >
          @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
      <div class="mb-3 ">
          <input   type="text" placeholder="content"  value="{{old('content')}}" name="content"   class="form-control   @error('content') is-invalid @enderror "   >
          @error('content')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

        <button type="submit" class="btn btn-primary  " style="width: 100%" >Add   </button>


      </form>

 </div>
<div class="container">

    <div class=" row my-5">
        @foreach ($tasks as $fetchedData)
        <div class="col-6">
            <div class="card mb-3 ">
                <div class="d-flex justify-content-between card-header"   >
                <h5>{{$fetchedData ->title}}</h5>
                <h5>{{$fetchedData ->updated_at}}</h5>
            </div>

                <div class="card-body">

                  <p class="card-text">{{$fetchedData ->content}}</p>

                  <div class="d-flex justify-content-end"   >
                    {{-- <a href="#" class="btn btn-success me-2 ">Mark as Completed</a> --}}
                    <a href="{{ url('/edittask/'.$fetchedData ->id)}}" class="btn btn-primary me-2 ">Edit</a>
                  <a href="{{ url('/deletetask/'.$fetchedData ->id)}}" class="btn btn-danger ">Delele</a>

                </div>
                </div>
              </div>
        </div>



    @endforeach

    </div>




</div>





</body>
</html>
