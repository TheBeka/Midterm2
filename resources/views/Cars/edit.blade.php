@extends('layouts.app')
@section('content')
    <form action="/cars/{{ $car->id }}/update" method="POST">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="form-group">
            <input class="form-control" value="{{ $car->car_name }}" name="car_name" type="text" placeholder="Car Name" required>
        </div>

        <div class="form-group">
            <input class="form-control" value="{{ $car->car_price }}" name="car_price" type="number" placeholder="Price" required>
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $car->car_owner_id }}" name="car_owner_id" type="number" placeholder="Owner Id" required>
        </div>
        <button class="btn btn-info" type="submit">edit</button>
    </form>
@endsection
