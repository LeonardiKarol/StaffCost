<!DOCTYPE html>
<html lang="it ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Dipendente</title>
</head>
<body>
    <h1>Inserisci un nuovo Dipendente</h1>
    <form method="POST" action="{{route('employees.store')}}">
        @csrf
        <label>Nome:<input type="text" name="first_name" value="{{ old('first_name') }}"></label>
        @error('first_name')
            {{ $message }}
        @enderror
        <br>
        <label>Cognome:<input type="text" name="last_name" value="{{ old('last_name') }}"></label>
        @error('last_name')
            {{ $message }}
        @enderror
        <br>
        <label>Data di nascita: <input type="date" name="birth_date" value="{{ old('birth_date') }}"></label>
        @error('birth_date')
            {{ $message }}
        @enderror
        <br>
        <label>CF: <input type="text" name="tax_code" maxlength="16" value="{{ old('tax_code') }}"></label>
        @error('tax_code')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">salva</button> <a href="{{route('employees.index')}}">annulla</a>
    </form>
</body>
</html>