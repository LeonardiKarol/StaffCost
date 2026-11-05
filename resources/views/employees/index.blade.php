    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dipendenti</title>
    </head>
    <body>
        <header>
            <h1>Lista dei dipendenti</h1>
            <a href="{{route('employees.create')}}"><h4>Inserisci dipendente</h4></a>
        </header>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Settore</th>
                <th>Data di nascista</th>
                <th></th>
            </tr>   
            @forelse($employees as $employee)
                <tr>
                    <td> {{$employee->first_name}} </td>
                    <td> {{$employee->last_name}} </td>
                    @if($employee->sector?->name)
                        <td> {{$employee->sector->name}} </td>
                    @else
                        <td>Da collocare</td>   
                    @endif
                    <td>{{$employee->birth_date}}</td>
                    <td><a href="{{route('employees.show', $employee->id)}}">dettaglio</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nessun dipendente presente</td>
                </tr>
            @endforelse
                
        </table>
    </body>
    </html>