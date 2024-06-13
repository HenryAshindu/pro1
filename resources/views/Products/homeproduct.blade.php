<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <style>
        th
        {
            background-color: cadetblue;
            padding: 10px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <center>
        <h1>These are the Products</h1>
        <a href="{{route('home.create')}}">Create a Product</a>
        <table border="1px">
            <div>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </div>
            <div>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="{{route('home.edit', ['product'=>$product])}}">Edit</a></td>
                    <td>
                        <form action="{{route('home.delete', ['product'=>$product])}}" method="post">
                            @csrf
                            @method('delete')
                          <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </div>
        </table>
    </center>
</body>
</html>