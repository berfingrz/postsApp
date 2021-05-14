<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add New Posts</h1>
    @if (Session::has('post_created'))
        {{ Session::get('post_created') }}
    @endif
    <form method="POST" action="{{ route('post.addSubmit') }}">
        @csrf
        <label for="title">Post Name:</label>
        <input type="text" name="title" placeholder="Enter post title...">
        <br>

        <label for="post">Post Description:</label>
        <textarea name="post" rows="3"></textarea>

        <input type="submit" value="submit">
    </form>
</body>
</html>