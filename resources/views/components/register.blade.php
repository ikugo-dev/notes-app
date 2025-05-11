<h2>Register</h2>
<x-card {{ $attributes->merge([
    'action' => '/register',
])}}>
    @csrf
    <label for="name">Username:</label>
    <input name="name" type="text" placeholder="name">
    <label for="email">Email:</label>
    <input name="email" type="text" placeholder="email">
    <label for="password">Password:</label>
    <input name="password" type="password" placeholder="password">
    <button type="submit">Submit</button>
</x-card>
