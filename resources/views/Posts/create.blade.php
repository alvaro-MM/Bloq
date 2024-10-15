<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1> {{__('Create a new Posts')}} </h1>

    <form method="POST" action="{{ route('post.store') }}">
        @csrf
    @include('Posts.formfields')
        <br />
        <button type="submit">{{__('Send')}}</button>
        <br />
    </form>
    <a href="{{ route('post.index') }}">{{__('Back')}}</a>
</x-layout>
