<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-title-card />
    @auth
    <div class="float-left">
        <x-logout />
        <x-create-post />
    </div>
    <div class="float-left">
        <x-posts :posts="$posts" />
    </div>
    @else
    <x-login />
    <x-register />
    @endauth
</body>

</html>
