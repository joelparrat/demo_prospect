@extends('prospect.templateProspect')
@section('title')
    Demo Prospects
@endsection
@section('content')
    <div class="container">
        <div class="row card text-white bg-dark mx-auto detailProspect">
            <h1 class="card-header">Details of prospect</h1>
            <div class="card-body">
                <table class="table">
	<thead>
    	<tr>
        	<th scope="col">Id</th>
          <td>{{ $prospect->id }}</td>
      </tr>
      <tr>
          <th scope="col">First Name</th>
          <td>{{ $prospect->firstname }}</td>
      </tr>
      <tr>
          <th scope="col">Last Name</th>
          <td>{{ $prospect->lastname }}</td>
      </tr>
      
      <tr>
          <th scope="col">Birthday</th>
          <td>{{ $prospect->birthday }}</td>
      </tr>

      <tr>
          <th scope="col">Job</th>
          <td>{{ $prospect->job }}</td>
      </tr>

      <tr>
          <th scope="col">Company</th>
          <td>{{ $prospect->company }}</td>
      </tr>

      <tr>
          <th scope="col">Addresse</th>
          <td>{{ $prospect->add_number }}
            {{ $prospect->add_street }},
            {{ $prospect->add_zipcode }}
            {{ $prospect->add_city }},
            {{ $prospect->add_country }}
          </td>
      </tr>

      <tr>
          <th scope="col">Phone</th>
          <td>{{ $prospect->telephone }}</td>
      </tr>

      <tr>
          <th scope="col">E-mail</th>
          <td>{{ $prospect->email }}</td>
      </tr>

	</thead>
  <tbody>
  

  </tbody>
</table>
<form action="{{ url('prospects', ['id' => $prospect->id]) }}" method="post">
    <a class="btn btn-primary" href="{{ route('home') }}" role="button">Return</a>
    <a class="btn btn-primary" href="{{ url('prospect/'.$prospect->id.'/edit') }}" role="button">Update</a>
    <input class="btn btn-primary" type="submit" value="Supprimer" />
   
    {{ method_field('delete') }}
    {{ csrf_field() }}
</form>
                </div>
            </div>
        </div>
    @endsection