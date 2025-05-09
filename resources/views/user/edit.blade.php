@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Address</h2>
    <form method="POST" action="#">
        @csrf
        <!-- Just a placeholder form. You can replace with your actual update logic. -->
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $address->name }}">
        </div>
        <div class="mb-3">
            <label>Street</label>
            <input type="text" name="street" class="form-control" value="{{ $address->street }}">
        </div>
        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="{{ $address->city }}">
        </div>
        <div class="mb-3">
            <label>Zip</label>
            <input type="text" name="zip" class="form-control" value="{{ $address->zip }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
