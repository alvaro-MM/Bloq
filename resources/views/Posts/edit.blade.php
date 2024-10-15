<x-layout meta-title="$post->title" meta-description="$post->body">
    <h1> Edit Post </h1>
    <a href="{{ route('post.index') }}">{{__('Back')}}</a>

    <form method="POST" action="{{ route('post.update', $post) }}">
        @csrf
        @method('PATCH')
@include('Posts.formfields')
        <br />
        <button type="submit">{{__('Send')}}</button>
        <br />
    </form>
</x-layout>
