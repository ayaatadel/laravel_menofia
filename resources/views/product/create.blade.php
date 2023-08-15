<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="POST" >
        @csrf

        <input type="text" name="product_name" placeholder="Product name">
        <input type="text" name="product_price" placeholder="product price">
        <input type="text" name="product_availability"placeholder="product availability">
        <input type="text" name="category_id"placeholder="category id">
        <input type="text" name="admin_id"placeholder="admin id">
        <input type="submit" >

    </form>
</body>
</html>
