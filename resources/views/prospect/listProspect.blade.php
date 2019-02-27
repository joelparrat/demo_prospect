@extends('prospect.templateProspect')

@section('title')
    Demo Prospects
@endsection

@section('content')
    <div class="container">
        <div class="row card text-white bg-dark mx-auto listeAddresse">
            <h1 class="card-header">Liste de vos prospects</h1>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Prenom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Naissance</th>
                            <th scope="col">Travail</th>
                            <th scope="col">Entreprise</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Rue</th>
                            <th scope="col">Code postale</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prospects as $prospect)
                        <tr>
                            <td>{{ $prospect->firstname }}</td>
                            <td>{{ $prospect->lastname }}</td>
                            <td>{{ $prospect->birthday }}</td>
                            <td>{{ $prospect->job }}</td>
                            <td>{{ $prospect->company }}</td>
                            <td>{{ $prospect->number }}</td>
                            <td>{{ $prospect->street }}</td>
                            <td>{{ $prospect->zipcode }}</td>
                            <td>{{ $prospect->city }}</td>
                            <td>{{ $prospect->country }}</td>
                            <td>{{ $prospect->telephone }}</td>
                            <td>{{ $prospect->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('home') }}" role="button">Retour</a>
            </div>
        </div>
    </div>
@endsection
