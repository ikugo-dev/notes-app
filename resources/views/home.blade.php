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
    <div id="posts" style="border: 8px solid black; margin: 2em;">
        <form action="/create-post" method="post">
            @csrf
            <label for="title">Title:</label>
            <input name="title" type="text" placeholder="title">
            <label for="content">Content:</label>
            <textarea name="content" type="text" placeholder="content"></textarea>
            <button type="submit" style="font-size: 2em; font-weight: bold;">Post</button>
        </form>
    </div>
    <h1>Your posts</h1>
    <div id="posts" style="border: 8px solid black; margin: 2em;">
        @foreach($posts as $post)
        <div style="background-color: lightgreen; margin: 1em; padding: 1em;">
            <h3>{{$post->user->name}}: {{$post['title']}}</h3>
            <span>{{$post['content']}}</span>
            <div style="display: grid; grid-template-columns: 1fr 1fr; width: 20%;">
                <form action="/edit-post/{{$post->id}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <form action="/delete-post/{{$post->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <h2>Register</h2>
    <form action="/register" method="post"
        style="display: grid; grid-template-columns: 1fr 1fr; width: 40%;">
        @csrf
        <label for="name">Username:</label>
        <input name="name" type="text" placeholder="name">
        <label for="email">Email:</label>
        <input name="email" type="text" placeholder="email">
        <label for="password">Password:</label>
        <input name="password" type="password" placeholder="password">
        <button type="submit" style="font-size: 2em; font-weight: bold;">Submit</button>
    </form>

    <h2>Log In</h2>
    <form action="/login" method="post"
        style="display: grid; grid-template-columns: 1fr 1fr; width: 40%;">
        @csrf
        <label for="loginname">Username:</label>
        <input name="loginname" type="text" placeholder="name">
        <label for="loginpassword">Password:</label>
        <input name="loginpassword" type="password" placeholder="password">
        <button type="submit" style="font-size: 2em; font-weight: bold;">Log in</button>
    </form>
    @endauth
</body>

</html>
