<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>
<body>

   <table>
    <a href="{{route('product.create')}}">Create Product</a>
    <thead>
        <tr>
            <th>Product name</th>
            <th>Product price</th>
            <th>Product availability</th>
            <th>Category Name</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_availability}}</td>
            <td>{{$product->category->name}}</td>

            <td>
                {{-- <a href="{{route('product.show',$product->product_id)}}">show</a> --}}

           <form action="{{route('product.show',$product->id)}}">
            <button type='submit'>show</button>
           </form>
           <form action="{{route('product.delete',$product->id)}}" method="POST">
            @method('DELETE')
            @csrf
               <button type="submit">Delete</button>
           </form>
            <form action="{{route('product.update',$product->id)}}">

                <button>Update</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>

</body>
</html>
