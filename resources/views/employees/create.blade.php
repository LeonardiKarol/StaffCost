<x-layout title="Inserisci Dipendente">
    <h1>Inserisci un nuovo Dipendente</h1>
    <form method="POST" action="{{ route('employees.store') }}">
        @csrf

        Nome:<x-input name="first_name" label="Nome" />
        cogNome:<x-input name="last_name" label="Cognome"/>
        Data di Nascita:<x-input name="birth_date" label="Data di nascita" type="date" />
        CF:<x-input name="tax_code" label="Codice fiscale"/>

        <button type="submit">Salva modifiche</button>
    </form>
</x-layout>