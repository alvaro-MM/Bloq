<x-layout>

</x-layout>
<h1>Este es el post número {{ $post->id }}</h1>
<a href="{{ route('post.index', $post->id) }}">Ver Post</a>
