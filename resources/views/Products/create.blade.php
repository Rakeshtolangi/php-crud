<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
</head>

<body>
    <h1> create the product</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name" />
        </div>

        <div>
            <label for="">Quatity</label>
            <input type="qty" name="qty" placeholder="qty" />
        </div>

        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price" />
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>

        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>

</body>

</html>