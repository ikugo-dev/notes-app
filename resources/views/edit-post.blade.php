<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    @auth
    <x-title-card />
    <x-edit-post :post="$post" />
    @else
    <h2>You are NOT logged in</h2>
    <x-login />
    @endauth
</body>

</html>
