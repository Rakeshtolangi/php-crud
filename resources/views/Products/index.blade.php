<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
</head>

<body>
    <h1>products</h1>
    <p>lists of product</p>
    <table>
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
</body>

</html>