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
        <h1>Create A Post</h1>
        <div>
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div>
                    <label for="Title">Title</label>
                    <input type="text" name="title">
                </div>

                <div>
                    <label for="Content">Content</label>
                    <textarea name="content"></textarea>
                </div>

                <div>
                    <label for="Image">Image</label>
                    <input type="file" name="image">
                </div>

                <div>
                    <input type="submit" value="Create">
                </div>
            </form>
        </div>
    </center>
</body>
</html>