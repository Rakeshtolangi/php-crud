<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- offline bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Product</title>
</head>

<body>

    <!-- Nav bar section -->
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
                        <a class="nav-link" href="/product/create">Create Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product/edit">Edit Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">View Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Delete Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Create the Product</h1>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" placeholder="name" class="form-control" id="floatingName">
                        <label for="floatingName">Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="qty" placeholder="qty" class="form-control" id="floatingQty">
                        <label for="floatingQty">Quantity</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" name="price" placeholder="price" class="form-control"
                            id="floatingPrice">
                        <label for="floatingPrice">Price</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="description" placeholder="Description" class="form-control"
                            id="floatingDescription">
                        <label for="floatingDescription">Description</label>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Save a New Product" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- offline bootstrap link -->
<script type="text/javascritp" src="file:///C:/Users/Captain/Desktop/cc/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
<!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>