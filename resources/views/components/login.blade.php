<h2>Log In</h2>
<x-card {{ $attributes->merge([
    'action' => '/login',
])}}>
    @csrf
    <label for="loginname">Username:</label>
    <input name="loginname" type="text" placeholder="name">
    <label for="loginpassword">Password:</label>
    <input name="loginpassword" type="password" placeholder="password">
    <button type="submit">Log in</button>
</x-card>
