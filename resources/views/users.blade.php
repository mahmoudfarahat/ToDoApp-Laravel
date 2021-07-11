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
<div class="container "  >
    <a href="{{ url('/lang/ar')}}">AR</a> <a href="{{ url('/lang/en')}}">EN</a>

    <table class="table table-striped">

            <thead>
              <tr>
                <th scope="col">{{trans('site.id')}}</th>
                <th scope="col">{{trans('site.name')}}</th>
                <th scope="col">email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $fetchedData)
              <tr>
                <th scope="row">{{$fetchedData ->id}}</th>
                <td> {{$fetchedData ->name}}</td>
                <td> {{$fetchedData ->email}}</td>
                <td> <a  data-bs-toggle="modal" data-bs-target="#modal_single_del_{{$fetchedData->id }}" class='btn btn-danger m-r-1em'>Delete</a>

                    <a href='{{ url('/user/'.$fetchedData->id.'/edit') }}' class='btn btn-primary m-r-1em'>Edit</td>
              </tr>


            <div class="modal" id="modal_single_del_{{ $fetchedData->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">delete confirmation</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                       </button>
                        </div>

                        <div class="modal-body">
                            <p> {{ 'Confirm to delete user  : '.$fetchedData->name }}</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{url('user/'.$fetchedData->id)}}" method="post">
                                {{-- @csrf --}}
                                {{-- csrf_token() --}}
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <div class="not-empty-record">
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

              @endforeach


            </tbody>

</table>
   </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
