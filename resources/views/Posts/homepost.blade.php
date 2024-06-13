<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

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
        <h1>These are the Posts</h1>
        <a href="{{route('post.create')}}">Create a Post</a>
        <table border="1px">
            <div>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>CONTENT</th>
                    <th>IMAGE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </div>
            <div>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td><img width="100px" src="pictures/{{$post->image}}"></td>
                    <td><a href="{{url('edit_post/{id}', $post->id)}}">Edit</a></td>
                    <td><a href="{{route('post.delete', $post->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </div>
        </table>
    </center>
</body>
</html>