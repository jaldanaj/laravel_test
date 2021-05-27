@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">
                Create city
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ route("admin.cities.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('cod') ? 'has-error' : '' }}">
                    <label for="cod">Code*</label>
                    <input type="text" id="cod" name="cod" class="form-control" value="{{ old('cod', isset($city) ? $city->cod : '') }}" required>
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
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($city) ? $city->name : '') }}" required>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
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
