@props(['name', 'label', 'type' => 'text', 'value' => ''])

<div>
    <label>
        <input type="{{$type}}" name='{{$name}}' value='{{old($name,$value)}}'>
    </label>

    @error($name)
        <p>{{ $message }}</p>
    @enderror
</div>