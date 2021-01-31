<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Callcenter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Bienvenue sur notre Callcenter</h1>

        <p>Il est {{date('H:i:s')}}.</p>

        <footer>
            <p>&copy Copyright {{date('Y')}} &middot; <a href="#">Lou-Ann Technologies</a></p>
        </footer>
    </body>
</html>
