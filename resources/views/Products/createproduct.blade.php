<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <center>
        <h1>Create A Product</h1>
        <div>
            <form action="{{route('home.store')}}" method="post">
                @csrf
                @method('post')
                <div>
                    <label for="Name">Name</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="Description">Description</label>
                    <textarea name="description"></textarea>
                </div>

                <div>
                    <label for="Price">Price</label>
                    <input type="text" name="price">
                </div>

                <div>
                    <input type="submit" value="Create">
                </div>
            </form>
        </div>
    </center>
</body>
</html>