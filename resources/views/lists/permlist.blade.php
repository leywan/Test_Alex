@extends('base')

@section('content')

    <div class="container">

    <table id="permlist" class="ui celled table" style="width: 100%">
        <thead>
        <tr>
            <td>Id</td>
            <td>Status</td>
            <td>Raison</td>
            <td>SIRET</td>
            <td>APE</td>
            <td>Adresse</td>
            <td>Adresse Complémentaire</td>
            <td>CP</td>
            <td>Ville</td>
            <td>Téléphone</td>
            <td>Email</td>
        </tr>
        </thead>
        @foreach($permanences as $permanence)
        <tr>
            <td>{{$permanence['id']}}</td>
            <td>{{$permanence['status']}}</td>
            <td>{{$permanence['raison']}}</td>
            <td>{{$permanence['siret']}}</td>
            <td>{{$permanence['ape']}}</td>
            <td>{{$permanence['adresse']}}</td>
            <td>{{$permanence['adresse2']}}</td>
            <td>{{$permanence['cp']}}</td>
            <td>{{$permanence['ville']}}</td>
            <td>{{$permanence['tel']}}</td>
            <td>{{$permanence['email']}}</td>
        </tr>
        @endforeach
    </table>

    </div>

@endsection
