<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>products</title>
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

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>products</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N </th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $key=> $product)
                        <tr>
                            <td>{{$key + 1 }}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div>
        <a href="http://127.0.0.1:8000/product/create" class="btn btn-primary stretched-link">Add new product</a>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>