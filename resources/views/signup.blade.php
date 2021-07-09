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
            action="{{ url('/submitsignup') }}" method="post">
            <h4>Sign Up and Start Your Plans!</h4>
            <hr>

            @csrf

            <div class="mb-3">

                <input placeholder="name" name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror ">
               @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <input placeholder="email" name="email" value="{{old('email')}}"  type="text" class="form-control  @error('email') is-invalid @enderror ">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <input placeholder="Password" name="password"    type="password" class="form-control  @error('password') is-invalid @enderror ">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>






            <button type="submit" class="btn btn-danger submit-btn" style="width: 100%">Sign Up</button>

        </form>

    </div>

</body>

</html>
