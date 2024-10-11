<x-layout meta-title="Blog" meta-description="Descripcion de la pagina de blog">

    <h1>Blog</h1>
    <x-slot:sidebar>
        <h1></h1>
    </x-slot:sidebar>
    <h3><a href="{{route('post.create')}}">   {{__('Create a new Posts')}}</a></h3>


    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}    </a>
                <h6><a href="{{ route('post.edit', $post->id) }}">  Edit Post</a></h6>
            </h2>
        </div>




    @endforeach

</x-layout>
