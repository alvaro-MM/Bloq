<x-layout meta-title="Blog" meta-description="Descripcion de la pagina de blog">

    <h1>Blog</h1>

    <x-slot:sidebar>
        <h1></h1>
    </x-slot:sidebar>
    <h3><a href="{{route('post.create')}}">Crear un nuevo post</a></h3>

    @foreach($posts as $post)
        <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
    @endforeach

</x-layout>
