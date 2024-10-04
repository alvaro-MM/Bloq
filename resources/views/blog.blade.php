<x-layout meta-title="Blog" metadescription="Descripcion de la pagina de blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{$post['title']}}</h2>
    @endforeach

</x-layout>
