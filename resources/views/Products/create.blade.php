<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create product</title>
</head>

<body>

    <!--Nav bar section  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">sasto bazzar </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="product/create">Add new product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product/">View products</a>
                </li>

            </ul>
        </div>
    </nav>


    <h1> create the product</h1>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="">Name</label>
            <input type=" text" name="name" placeholder="name" />
        </div>

        <div class="mb-3">
            <label for="">Quatity</label>
            <input type="qty" name="qty" placeholder="qty" />
        </div>

        <div class="mb-3">
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price" />
        </div>

        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>

        <div class="mb-3">
            <input type="submit" value="Save a New Product" class="btn btn-primary" />
        </div>
    </form>
    <!-- view product button -->
    <div>
        <a href="/product" class="btn btn-primary stretched-link"> View all products</a>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>