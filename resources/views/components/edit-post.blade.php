<h1>Editing post</h1>
<x-card :action="url('/edit-post/' . $post->id)">
    @csrf
    @method('put')
    <label for="title">Title:</label>
    <input name="title" type="text" value="{{$post->title}}">
    <label for="content">Content:</label>
    <textarea name="content" type="text">{{$post->content}}</textarea>
    <x-buttons.edit />
</x-card>
