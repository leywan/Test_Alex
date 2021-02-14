<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style class="class"></style>

</head>
<body class="bg-gray-800 py-6 flex flex-col justify-between items-center min-h-screen">

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-gray-800">

    <a class="navbar-brand" href="{{route('home')}}">CALLCENTER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Permanences
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/permanence">Créer une permanence</a>
                    <a class="dropdown-item" href="/permlist">Liste des permanences</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vérifier les permanences</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sites
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/site">Créer un site</a>
                    <a class="dropdown-item" href="/sitelist">Liste des sites</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vérifier les sites</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Techniciens
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Créer un technicien</a>
                    <a class="dropdown-item" href="#">Liste des techniciens</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vérifier les techniciens</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resp. Permanences
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Créer un responsable</a>
                    <a class="dropdown-item" href="#">Liste des responsables</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vérifier les responsables</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Astreintes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Créer une astreinte</a>
                    <a class="dropdown-item" href="#">Liste des astreintes</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vérifier les astreintes</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        &nbsp;&nbsp;&nbsp;<span class="inline-block align-baseline text-gray-200" id="my-hour"></span>

    </div>
</nav>

    @include('flash/flash-message')

    @yield('content')


    <footer>
    <p class="text-gray-400">&copy Copyright {{date('Y')}}
        @if(! Route::is('about'))
        &middot;<a href="{{route('about')}}" class="text-gray-500 hover:text-indigo-500 underline">A Propos</a>
        @endif
    </p>
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function getTime () {
        var date = new Date();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();
        hours = ((hours < 10) ? " 0" : " ") + hours;
        minutes = ((minutes < 10) ? ":0" : ":") + minutes;
        seconds = ((seconds < 10) ? ":0" : ":") + seconds;
        var myHour = document.getElementById("my-hour");
        myHour.textContent = hours + minutes + seconds;
        setTimeout("getTime()",1000);

    }
    getTime();
</script>

<script>
    $(document).ready(function() {
        $('#permlist').DataTable();
    } );
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.semanticui.min.js"></script>

</body>
</html>
