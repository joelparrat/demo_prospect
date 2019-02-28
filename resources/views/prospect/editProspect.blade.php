@extends('prospect.templateProspect')

@section('title')
    Demo Prospects
@endsection

@section('content')
    <div class="container">
        <div class="row card text-white bg-dark mx-auto my-auto">
            <h1 class="card-header">Update prospect</h1>
            <div class="card-body">
                <form action="{{ url('prospect/'.$prospect->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" name="firstname" id="firstname" placeholder="First Name" value="{{ $prospect->firstname }}" required>
                        @if ($errors->has('firstname'))
                            <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                        @endif
                    </div>
                   
                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" name="lastname" id="lastname" placeholder="Last Name" value="{{ $prospect->lastname }}" required>
                        @if ($errors->has('lastname'))
                            <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('birthday') ? 'is-invalid' : '' }}" name="birthday" id="birthday" placeholder="Birthday" value="{{ $prospect->birthday }}" required>
                        @if ($errors->has('birthday'))
                            <div class="invalid-feedback">{{ $errors->first('birthday') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" name="job" id="JOB" placeholder="Job" value="{{ $prospect->job }}" required>
                        @if ($errors->has('job'))
                            <div class="invalid-feedback">{{ $errors->first('job') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company" id="company" placeholder="Company" value="{{ $prospect->company }}" required>
                        @if ($errors->has('company'))
                            <div class="invalid-feedback">{{ $errors->first('company') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('add_number') ? 'is-invalid' : '' }}" name="add_number" id="add_number" placeholder="Number" value="{{ $prospect->add_number }}" required>
                        @if ($errors->has('add_number'))
                            <div class="invalid-feedback">{{ $errors->first('add_number') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('add_street') ? 'is-invalid' : '' }}" name="add_street" id="add_street" placeholder="Street" value="{{ $prospect->add_street }}" required>
                        @if ($errors->has('add_street'))
                            <div class="invalid-feedback">{{ $errors->first('add_street') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('add_zipcode') ? 'is-invalid' : '' }}" name="add_zipcode" id="add_zipcode" placeholder="Zip Code" value="{{ $prospect->add_zipcode }}" required>
                        @if ($errors->has('add_zipcode'))
                            <div class="invalid-feedback">{{ $errors->first('add_zipcode') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('add_city') ? 'is-invalid' : '' }}" name="add_city" id="add_city" placeholder="City" value="{{ $prospect->add_city }}" required>
                        @if ($errors->has('add_city'))
                            <div class="invalid-feedback">{{ $errors->first('add_city') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('add_country') ? 'is-invalid' : '' }}" name="add_country" id="add_country" placeholder="Country" value="{{ $prospect->add_country }}" required>
                        @if ($errors->has('add_country'))
                            <div class="invalid-feedback">{{ $errors->first('add_country') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" name="telephone" id="telephone" placeholder="Phone" value="{{ $prospect->telephone }}" required>
                        @if ($errors->has('telephone'))
                            <div class="invalid-feedback">{{ $errors->first('telephone') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="E-mail" value="{{ $prospect->email }}" required>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>                    
                    
                    <a class="btn btn-primary" href="{{ route('home') }}" role="button">Annuler</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                {{ method_field('put') }}
                </form>
            </div>
        </div>
    </div>
@endsection