@props(['title' => 'StaffCost'])

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - StaffCost</title>
</head>
<body>
    <nav>
        @auth
            <a href="{{ route('employees.index') }}">Dipendenti</a>

            <span>Ciao, {{ auth()->user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Esci</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}">Accedi</a>
        @endguest
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>