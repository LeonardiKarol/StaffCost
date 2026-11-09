<x-layout title='Login' >
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email" value="{{old('email')}}" id="">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="password" name="password" id="">
        <button type="submit">Invia</button>
        
    </form>
</x-layout>