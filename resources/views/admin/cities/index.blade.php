@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">
                City list
            </h4>
            <a class="btn btn-success" href="{{ route("admin.cities.create") }}">
                Add city
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-striped table-hover datatable datatable-Permission">
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
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $key => $city)
                            <tr data-entry-id="{{ $city->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $city->cod ?? '' }}
                                </td>
                                <td>
                                    {{ $city->name ?? '' }}
                                </td>
                                <td class="text-right">
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.cities.show', $city->id) }}">View</a>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.cities.edit', $city->id) }}">Edit</a>
                                <form action="{{ route('admin.cities.destroy', $city->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
                        {{ $cities->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
