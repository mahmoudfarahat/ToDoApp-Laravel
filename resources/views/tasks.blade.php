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


<div class="container   ">
    {{-- <h2>{{'welcome'}}</h2> --}}

    {{-- @foreach ($data as $fetchedData)

    @endforeach --}}

<div class="row my-5">
    <div class="col-3">
        <div class="card"  >
            <div class="card-body">
              <h5 class="card-title">{{$title}}</h5>

              <p class="card-text">{{$content}}</p>
              <div class="d-flex">
                <a href="#" class="btn btn-primary mr-2" style="width: 50%">Edit</a>
                <a href="#" class="btn btn-danger" style="width: 50%">Delete</a>
              </div>

            </div>
          </div>
    </div>

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
