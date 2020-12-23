@extends('layouts.app')
@section('content')
    <form action="/customers/store" method="POST">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <div class="form-group">
            <input class="form-control" name="first_name" type="text" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="last_name" type="text" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="balance" type="number" placeholder="balance" required>
        </div>

        <button class="btn btn-info" type="submit">add</button>
    </form>
@endsection
