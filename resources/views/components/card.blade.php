<form {{ $attributes->merge([
    'method' => 'post',
    'class' => 'grid p-6 m-4 bg-slate-100 w-120 h-full border-black border-2 rounded-md hover:shadow-[8px_8px_0px_rgba(0,0,0,1)]'
])}}>
    {{ $slot }}
</form>
