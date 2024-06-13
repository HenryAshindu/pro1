<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <center>
        <h1>Create A Product</h1>
        <div>
            <form action="{{route('home.update',['product'=>$product])}}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="Name">Name</label>
                    <input type="text" name="name" value="{{$product->name}}">
                </div>

                <div>
                    <label for="Description">Description</label>
                    <textarea name="description">{{$product->description}}</textarea>
                </div>

                <div>
                    <label for="Price">Price</label>
                    <input type="text" name="price" value="{{$product->price}}">
                </div>

                <div>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </center>
</body>
</html>