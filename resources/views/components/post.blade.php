<div class="post">
    <h2><b>{{$post->user->name}}:</b> {{$post['title']}}</h2>
    <br>
    <span class="whitespace-pre-line">{{$post['content']}}</span>
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
