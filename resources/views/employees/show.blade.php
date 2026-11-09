<x-layout :title="$employee->first_name . ' '. $employee->last_name">
<body>

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
</x-layout>