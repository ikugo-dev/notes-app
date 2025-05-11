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
