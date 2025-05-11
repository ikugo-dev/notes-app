<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1>Welcome to My Website</h1>
    @auth
    <h2>You are logged in</h2>
    <form action="/logout" method="post">
        @csrf
        <button type="submit">Log out</button>
    </form>
    <div id="post">
        <h1>Editing post</h1>
        <form action="/edit-post/{{$post->id}}" method="post">
            @csrf
            @method('put')
            <label for="title">Title:</label>
            <input name="title" type="text" value="{{$post->title}}">
            <label for="content">Content:</label>
            <textarea name="content" type="text">{{$post->content}}</textarea>
            <x-buttons.edit />
        </form>
    </div>
    @else
    <h2>You are NOT logged in</h2>
    @endauth
</body>

</html>
