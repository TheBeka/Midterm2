@extends('layouts.app')
@section('content')
    <form action="/customers/{{ $customer->id }}/update" method="POST">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="form-group">
            <input class="form-control" value="{{ $customer->first_name }}" name="first_name" type="text" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $customer->last_name }}" name="last_name" type="text" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input  class="form-control"value="{{ $customer->balance }}" name="balance" type="number" placeholder="balance" required>
        </div>
        <button class="btn btn-info" type="submit">edit</button>
    </form>
@endsection
