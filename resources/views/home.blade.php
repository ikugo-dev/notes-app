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
    <div id="create-posts">
        <form action="/create-post" method="post">
            @csrf
            <label for="title">Title:</label>
            <input name="title" type="text" placeholder="title">
            <label for="content">Content:</label>
            <textarea name="content" type="text" placeholder="content"></textarea>
            <x-buttons.add />
        </form>
    </div>
    <h1>Your posts</h1>
    <div id="posts">
        @foreach($posts as $post)
        <div class="post">
            <h3>{{$post->user->name}}: {{$post['title']}}</h3>
            <span>{{$post['content']}}</span>
            <div class="float-right flex">
                <form action="/edit-post/{{$post->id}}" method="get">
                    @csrf
                    <x-buttons.edit />
                </form>
                <form action="/delete-post/{{$post->id}}" method="post">
                    @csrf
                    @method('delete')
                    <x-buttons.delete />
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <h2>Register</h2>
    <form action="/register" method="post">
        @csrf
        <label for="name">Username:</label>
        <input name="name" type="text" placeholder="name">
        <label for="email">Email:</label>
        <input name="email" type="text" placeholder="email">
        <label for="password">Password:</label>
        <input name="password" type="password" placeholder="password">
        <button type="submit">Submit</button>
    </form>

    <h2>Log In</h2>
    <form action="/login" method="post">
        @csrf
        <label for="loginname">Username:</label>
        <input name="loginname" type="text" placeholder="name">
        <label for="loginpassword">Password:</label>
        <input name="loginpassword" type="password" placeholder="password">
        <button type="submit">Log in</button>
    </form>
    @endauth
</body>

</html>
