<x-layout>
    <h1>Este es el post número {{ $post->id }}</h1>
    <h1>{{$post->title}}</h1>
    <h1>{{$post->body}}</h1>
    <a href="{{ route('post.index', $post->id) }}">Volver</a>

</x-layout>
