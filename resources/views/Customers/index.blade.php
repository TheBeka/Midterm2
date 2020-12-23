@extends('layouts.app')
@section('content')
<h1>Customers</h1>
<div>
    <a class="btn btn-info mb-2" href="/customers/create">add</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Balance</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $c)
            <tr>
                <th>{{ $c->id }}</th>
                <th>{{ $c->first_name }}</th>
                <td>{{ $c->last_name }}</td>
                <td>{{ $c->balance }}</td>
                <td>
                    <a class="btn btn-info" href="/customers/{{ $c->id }}/edit"> Edit </a>
                    <a class="btn btn-danger" href="/customers/{{ $c->id }}/destroy"> Delete </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection