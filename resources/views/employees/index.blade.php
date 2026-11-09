    <x-layout title="Dipendenti">
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
                    <td>
                        <form method="POST" action="{{ route('employees.delete', $employee) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Eliminare questo utente?')">Elimina</button>
                        </form>
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nessun dipendente presente</td>
                </tr>
            @endforelse
                
        </table>
</x-layout>