@extends('prospect.templateProspect')
@section('title')
    Demo Prospects
@endsection
@section('content')
    <div class="container">
        <div class="row card text-white bg-dark mx-auto listProspect">
            <h1 class="card-header">Details of prospect</h1>
            <div class="card-body">
                <table class="table">
	<thead>
    	<tr>
        	<th scope="col">Id</th>
          <th scope="row">{{ $prospect->id }}</th>
      </tr>
      <tr>
          <th scope="col">First Name</th>
          <td>{{ $prospect->firstname }}</td>
      <tr>
          <th scope="col">Last Name</th>
          <td>{{ $prospect->lastname }}</td>
      </tr>
    

	</thead>
  <tbody>
  
    <tr>
      <th scope="row">{{ $prospect->id }}</th>
      <td>{{ $prospect->firstname }}</td>
    </tr>
  
  </tbody>
</table>
<form action="{{ url('prospects', ['id' => $prospect->id]) }}" method="post">
     <a class="btn btn-primary" href="{{ route('home') }}" role="button">Return</a>
<a class="btn btn-primary" href="{{ url('prospects/'.$prospect->id.'/edit') }}" role="button">Update</a>
    <input class="btn btn-primary" type="submit" value="Supprimer" />
   
    {{ method_field('delete') }}
    {{ csrf_field() }}
</form>
                </div>
            </div>
        </div>
    @endsection