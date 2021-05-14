<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>All Posts</h1>
    @if (Session::has('post_deleted'))
    {{Session::get('post_deleted')}}
    @endif
    @foreach($posts as $p)
        <h3>{{$p->name}}</h3>
        <a href="/post/{{ $p->id}}">View</a> 
        <a href="/editPost/{{ $p->id}}">Edit</a>
        <a href="/deletePost/{{ $p->id}}">Delete</a>
       
    @endforeach
</body>
</html>