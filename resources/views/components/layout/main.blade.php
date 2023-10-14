<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-structure.head />
    <body class="bg-dark text-light">
        <header>
            <x-structure.header />
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>
            <x-structure.footer />
        </footer>
    </body>
</html>