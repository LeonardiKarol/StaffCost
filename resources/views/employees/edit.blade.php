<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipendente</title>
</head>
<body>
    <a href="{{route('employees.index')}}">torna alla lista</a>

    <form method="POST" action="{{route('employees.update', $employee)}}">
        @csrf @method('PUT')
        Nome: <input type="text" name="first_name" value="{{old('first_name', $employee->first_name)}}" id=""> 
        @error('first_name')
            {{ $message }}
        @enderror
        <br>
        Cognome: <input type="text" name="last_name" value="{{old('last_name', $employee->last_name)}}" id=""> 
        @error('last_name')
            {{ $message }}
        @enderror
        <br>
        Data di nascita: <input type="date" name="birth_date" value="{{old('birth_date', $employee->birth_date)}}" id="">
         @error('birth_date')
            {{ $message }}
        @enderror
         <br>
        CF: <input type="text" name="tax_code" value="{{old('tax_code', $employee->tax_code)}}" id="">
         @error('tax_code')
            {{ $message }}
        @enderror<br>

        
        <button type="submit">modifica</button>
    </form>

</body>
</html>