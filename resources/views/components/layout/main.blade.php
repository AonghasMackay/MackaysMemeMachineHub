<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-structure.head />
    <body>
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