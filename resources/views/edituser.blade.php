<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>



    <div class="container d-flex justify-content-center  ">
        <form class="  col-lg-4 col-xxl-3 col-md-5 col-sm-7   " style="margin-top: 150px"
            action="{{ url('/user/'.$data['id']) }}" method="post">
            <h4>Edit your Account</h4>
            <hr>

      <input type="hidden" name="_method" value="put">
            @csrf

            <div class="mb-3">

                <input placeholder="name" name="name" value="{{$data['name'] }} " type="text" class="form-control @error('name') is-invalid @enderror ">
               @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <input placeholder="email" name="email" value="{{$data['email'] }}"  type="text" class="form-control  @error('email') is-invalid @enderror ">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>






            <button type="submit" class="btn btn-success submit-btn" style="width: 100%">Edit your Data</button>

        </form>

    </div>

</body>

</html>
