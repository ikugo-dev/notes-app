<h2>Create a post</h2>
<x-card {{ $attributes->merge([
    'action' => '/create-post',
])}}>
    @csrf
    <label for="title">Title:</label>
    <input name="title" type="text" placeholder="title">
    <label for="content">Content:</label>
    <textarea name="content" type="text" placeholder="content"></textarea>
    <x-buttons.add />
</x-card>
