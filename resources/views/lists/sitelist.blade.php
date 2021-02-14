@extends('base')

@section('content')

    <div class="container">

    <table id="sitelist" class="ui celled table" style="width: 100%">
        <thead>
        <tr>
            <td>Id</td>
            <td>Enseigne</td>
            <td>Adresse</td>
            <td>Adresse Complémentaire</td>
            <td>CP</td>
            <td>Ville</td>
            <td>Téléphone</td>
            <td>Etat</td>
        </tr>
        </thead>
        @foreach($sites as $site)
        <tr>
            <td>{{$site['id']}}</td>
            <td>{{$site['enseigne']}}</td>
            <td>{{$site['adresse']}}</td>
            <td>{{$site['adresse2']}}</td>
            <td>{{$site['cp']}}</td>
            <td>{{$site['ville']}}</td>
            <td>{{$site['tel']}}</td>
            <td>{{$site['etat']}}</td>
        </tr>
        @endforeach
    </table>

    </div>

@endsection
