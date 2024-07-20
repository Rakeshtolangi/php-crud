<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>edit product</title>
</head>

<body>

    <!--Nav bar section  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">S.Bazzar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product/create">create Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product/edit">edit Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">view Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Delete Product</a>
                    </li>
            </div>
        </div>
    </nav>



    <h1> edit product</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="/product/{{$product->$id}}" method="post">
        @csrf
        method('PUT')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}" />
        </div>

        <div>
            <label for="">Quatity</label>
            <input type=" qty" name="qty" placeholder="qty" value="{{$product->name}}" />
        </div>

        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->name}}" />
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->name}}" />
        </div>

        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>