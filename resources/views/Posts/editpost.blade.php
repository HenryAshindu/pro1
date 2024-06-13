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
        <h1>Edit A Post</h1>
        <div>
            <form action="{{route('post.update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div>
                    <label for="Title">Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div>
                    <label for="Content">Content</label>
                    <textarea name="content">"{{$data->title}}"</textarea>
                </div>

                <div>
                    <label for="Old Image">Old Image</label>
                    <img width="100px" src="/pictures/{{$data->image}}">
                </div>

                <div>
                    <label for="Image">Image</label>
                    <input type="file" name="image">
                </div>

                <div>
                    <input type="submit" value="Edit">
                </div>
            </form>
        </div>
    </center>
</body>
</html>