<html>
<title>Upload an image</title>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</header>

<body>
    <div class="mt-5">
        <h2 class="my-3">Upload an image</h2>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
        <form action="{{Route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" placeholder="Image name" class="form-control"><br>
            <input type="text" name="details" placeholder="Description" class="form-control"><br>
            <input type="file" name="image" class="form-control"><br>

            <div class="d-grid gap-1">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>


@extends('layouts.app')