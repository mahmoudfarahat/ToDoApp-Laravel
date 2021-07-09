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


<div class="container d-flex justify-content-center  ">
    <form  class="  col-lg-4 col-xxl-3 col-md-5 col-sm-7"  action="{{ url('/updatetask') }}"   style=" margin-top: 100px;
}"   method="post"  enctype ="multipart/form-data">
      <h4>Edit your Task</h4>

      @csrf

      <input type="hidden" name="id" value="{{ $tasks['id']}}">
      <div class="mb-3 ">
          <input   type="text" placeholder="title"  value="{{$tasks->title }}" name="title" class="form-control   @error('title') is-invalid @enderror  "     >
          @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
      <div class="mb-3 ">
          <input   type="text" placeholder="content"  value="{{$tasks->content }}" name="content"   class="form-control   @error('content') is-invalid @enderror "   >
          @error('content')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

        <button type="submit" class="btn btn-danger  " style="width: 100%" >Edit   </button>


      </form>

 </div>






</body>
</html>