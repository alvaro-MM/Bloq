<x-layout meta-title="Blog" metadescription="Descripcion de la pagina de blog">
    <h1>Blog</h1>
<x-slot:sidebar>
    <h1></h1>
</x-slot:sidebar>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach

</x-layout>
