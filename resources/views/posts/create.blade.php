<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create a post!</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Title">
        </div>

        <div>
            <textarea name="description" placeholder="Description here!"></textarea>
        </div>

        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>
</body>
</html>