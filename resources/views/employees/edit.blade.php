<x-layout title="Modifica dipendente">
    <a href="{{ route('employees.show', $employee) }}">Annulla</a>

    <form method="POST" action="{{ route('employees.update', $employee) }}">
        @csrf
        @method('PUT')

        Nome:<x-input name="first_name" label="Nome" :value="$employee->first_name" />
        Cognome:<x-input name="last_name" label="Cognome" :value="$employee->last_name" />
        Data di Nascita:<x-input name="birth_date" label="Data di nascita" type="date" :value="$employee->birth_date" />
        CF:<x-input name="tax_code" label="Codice fiscale" :value="$employee->tax_code" />

        <button type="submit">Salva modifiche</button>
    </form>
</x-layout>