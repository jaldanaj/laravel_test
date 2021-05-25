@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">
                Edit client
            </h4>
        </div>

        <div class="card-body">
            <form action="{{ route("admin.clientes.update", [$client->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group {{ $errors->has('cod') ? 'has-error' : '' }}">
                    <label for="cod">Code*</label>
                    <input type="text" id="cod" name="cod" class="form-control" value="{{ old('cod', isset($client) ? $client->cod : '') }}" required>
                    @if($errors->has('cod'))
                        <p class="help-block">
                            {{ $errors->first('cod') }}
                        </p>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($client) ? $client->name : '') }}" required>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
                <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                    <label for="city">City*</label>
                    <select class="" name="city" id="city" class="form-control" required>
                        <option value="">Select...</option>
                        @foreach($cities as $city)
                            <option value="{{$city->name}}" @if($city->name == $client->city) selected @endif>{{$city->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
