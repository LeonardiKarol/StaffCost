<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipendente</title>
</head>
<body>
    <a href="{{route('employees.index')}}">torna alla lista</a>
    <a href="{{route('employees.edit', $employee)}}">modifica</a>
        <p>
        Nome: {{$employee->first_name}} <br>
        Cognome: {{$employee->last_name}} <br>
        Data di nascita: {{$employee->birth_date}} <br>
        Settore: 
        @if($employee->sector?->name)
            <td> {{$employee->sector->name}} </td>
        @else
            <td>Da collocare</td>   
        @endif<br>
    </p>


</body>
</html>