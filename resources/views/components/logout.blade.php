<h2>You are logged in</h2>
<x-card {{ $attributes->merge([
    'action' => '/logout',
])}}>
    @csrf
    <button type="submit">Log out</button>
</x-card>
