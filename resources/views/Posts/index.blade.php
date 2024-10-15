<x-layout meta-title="Blog" meta-description="Descripcion de la pagina de blog">

    <h1>Blog</h1>
    <x-slot:sidebar>
        <h1></h1>
    </x-slot:sidebar>
    <h3><a href="{{route('post.create')}}">   {{__('Create a new Posts')}}</a></h3>


    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h1><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h1>

            <h2>
                <br/><br/>
                <a href="{{ route('post.edit', $post->id) }}"> Edit Post</a>
                <form action="{{route('post.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </h2>

        </div>

    @endforeach

</x-layout>
