
<label>
{{__('Title')}} <br />
<input type="text" name="title" value="{{old('title', $post->title)}}" class="text-black">
@error('title')
<br/>
<small style="color: red">{{ $message }}</small>
@enderror
</label>
<br/>
<label>
    {{__('Body')}} <br />
    <textarea name="body" class="text-black">{{old('body', $post->body)}}</textarea>
    @error('body')
    <br/>
    <small style="color: red">{{ $message }}</small>
    @enderror
</label>
