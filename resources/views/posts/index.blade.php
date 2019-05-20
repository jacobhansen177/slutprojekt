<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/">Home</a>
    <h1>Posts:</h1>
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->description }}</p>
    @endforeach
</body>
</html>