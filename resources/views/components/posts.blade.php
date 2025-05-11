<h1>Your posts</h1>
<div {{ $attributes->merge([
    'id' => 'posts',
])}}>
    @foreach($posts as $post)
    <x-post :post="$post" />
    @endforeach
</div>
