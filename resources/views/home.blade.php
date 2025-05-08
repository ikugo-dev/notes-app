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
