<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
    <x-header />

    <div class="appLayout">
        <div class="sidebar">
            <nav>
                <a href="/">Home</a>
                <a href="#">Alle teams</a>
                <a href="#">Komende wedstrijden</a>
                <a href="#">Leaderbord</a>
                <a href="#">Maak wedstrijd</a>
            </nav>
        </div>
        <div class="content">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

</body>
</html>
