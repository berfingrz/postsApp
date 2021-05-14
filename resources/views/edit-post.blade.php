<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Post</h1>
    @if (Session::has('post_updated'))
        {{ Session::get('post_updated') }}
    @endif
    <form method="POST" action="{{ route('post.updatePost') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">

        <label for="title">Post Name:</label>
        <input type="text" name="title" value="{{ $post->name }}">
        <br>

        <label for="post">Post Description:</label>
        <textarea name="post" rows="3">{{ $post->post }}</textarea>

        <input type="submit" value="Update">
    </form>
</body>
</html>