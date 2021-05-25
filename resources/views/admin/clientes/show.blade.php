@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">
                Client information
        </div>
        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $client->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Code
                            </th>
                            <td>
                                {{ $client->cod }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                {{ $client->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                City
                            </th>
                            <td>
                                {{ $client->city }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                    Back to list
                </a>
            </div>

            <nav class="mb-3">
                <div class="nav nav-tabs">

                </div>
            </nav>
            <div class="tab-content">

            </div>
        </div>
    </div>
</div>

@endsection
