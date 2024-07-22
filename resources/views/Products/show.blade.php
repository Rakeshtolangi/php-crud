<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--offline bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-header">{{ $product->name }}</div>
            <div class="card-body">
                <p><strong>Quantity:</strong> {{ $product->qty }}</p>
                <p><strong>Price:</strong> {{ $product->price }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>

</html>