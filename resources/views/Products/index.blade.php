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

    <style>
    body {
        padding: 15px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }


    th,
    td {
        padding: 5px;
    }

    tr:hover {
        background-color: #D6EEEE;
    }

    tr {
        border-bottom: 1px solid #ddd;
    }
    </style>

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

    <h1>products</h1>

    <p>lists of product</p>

    <table boarder="1">
        <thead>
            <th>
                <tr>S.N</tr>
                <tr>Name</tr>
                <tr>Qty</tr>
                <tr>Price</tr>
                <tr>Description</tr>
            </th>
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

    <div>
        <a href="http://127.0.0.1:8000/product/create" class="btn btn-primary stretched-link">Add new product</a>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>