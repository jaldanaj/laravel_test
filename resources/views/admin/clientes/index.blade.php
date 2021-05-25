@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        Client list
                    </h4>

                    <a class="btn btn-success" href="{{ route("admin.clientes.create") }}">
                        Add Client
                    </a>
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('admin.clientes.index')}}" method="get">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <label for="city">City*</label>
                            <select class="" name="search" id="search" class="form-control" onchange='this.form.submit()'>
                                <option value="">Select...</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->name}}" {{ old('city') == $city->name ? "selected" : "" }}>{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success" type="button" name="button" onclick="this.form.submit()">Clear filter</button>
                    </form>
                    <form class="" action="{{ route('admin.clientes.index')}}" method="get">
                        {{ csrf_field()}}
                    </form>
                     <div class="table-responsive">
                        <table id="mytable" class=" table table-striped table-hover datatable datatable-Permission">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        Code
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $key => $client)
                                    <tr data-entry-id="{{ $client->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $client->cod ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->city ?? '' }}
                                        </td>
                                        <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.clientes.show', $client->id) }}">View</a>
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.clientes.edit', $client->id) }}">Edit</a>
                                        <form action="{{ route('admin.clientes.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                                {{ $clients->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
@endsection
