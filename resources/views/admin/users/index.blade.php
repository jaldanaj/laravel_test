@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        Users list
                    </h4>

                    <a class="btn btn-success" href="{{ route("admin.users.create") }}">
                        Add User
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
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr data-entry-id="{{ $user->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $user->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->email ?? '' }}
                                        </td>
                                        <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">View</a>
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
                                {{ $users->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
