@extends('layouts.app')
@section('content')
    <form action="/cars/store" method="POST">
        <input class="form-control" type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="form-group">
            <input class="form-control" name="car_name" type="text" placeholder="Car Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="car_price" type="number" placeholder="Price" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="car_owner_id" type="number" placeholder="Owner Id" required>
        </div>
        <button class="btn btn-info" type="submit">add</button>
    </form>
@endsection
