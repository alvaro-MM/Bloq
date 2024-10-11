<x-layout meta-title="$post->title" meta-description="$post->body">
    <h1> Edit Post </h1>
    <a href="{{ route('post.index') }}">{{__('Back')}}</a>

    <form method="POST" action="{{ route('post.update') }}">
        @csrf
        <label>
            {{__('Title')}} <br />
            <input type="text" name="title" value={{old('title'), $post->title}}>
            @error('title')
            <br/>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            {{__('Body')}} <br />
            <textarea name="body" >{{old('body'), $post->title}}</textarea>
            @error('body')
            <br/>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{__('Send')}}</button>
        <br />
    </form>
</x-layout>
