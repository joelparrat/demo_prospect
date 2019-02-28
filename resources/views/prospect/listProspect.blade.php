@extends('prospect.templateProspect')

@section('title')
    Demo Prospects
@endsection

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row card text-white listProspect">
            <h1 class="card-header rounded-top" style="background-color: #4e413b;">Liste de vos prospects</h1>
            <div class="card-body" style="background-color: #857671;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prospects as $prospect)
                        <tr>
                        	<td>{{ $prospect->id }}</td>
                            <td>{{ $prospect->firstname }}</td>
                            <td>{{ $prospect->lastname }}</td>
                            <td>{{ $prospect->telephone }}</td>
                            <td>{{ $prospect->email }}</td>
                            <td><a class="btn btn-dark" href="{{ route('home') }}" role="button">Details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-dark" href="{{ route('home') }}" role="button">Return</a>
                <a class="btn btn-dark" href="{{ route('home') }}" role="button">New prospect</a>
            </div>
        </div>
    </div>
@endsection
