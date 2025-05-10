<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Welcome to My Website</h1>
    @auth
    <h2>You are logged in</h2>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" style="font-size: 2em; font-weight: bold;">Log out</button>
    </form>
    <div id="post" style="border: 8px solid black; margin: 2em;">
        <div style="background-color: lightgreen; margin: 1em; padding: 1em;">
            <h1>Editing post</h1>
            <form action="/edit-post/{{$post->id}}" method="post">
                @csrf
                @method('put')
                <label for="title">Title:</label>
                <input name="title" type="text" value="{{$post->title}}">
                <label for="content">Content:</label>
                <textarea name="content" type="text">{{$post->content}}</textarea>
                <button type="submit" style="font-size: 2em; font-weight: bold;">Edit</button>
            </form>
        </div>
    </div>
    @else
    <h2>You are NOT logged in</h2>
    @endauth
</body>

</html>
