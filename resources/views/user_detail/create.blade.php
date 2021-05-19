@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Tell us something about you</h2>

    <form action="/user-detail" method="POST">
        @csrf

        <input class="form-control mb-2" type="text" name="fullname" placeholder="fullname">
        <input class="form-control mb-2" type="email" name="email" placeholder="email">
        <input class="form-control mb-2" type="tel" name="phone" placeholder="phone">
        <input class="form-control mb-2" type="text" name="address" placeholder="address">
        <textarea class="form-control mb-2" name="summary" id="" cols="60" rows="6" placeholder="Career Objective"></textarea>
        <br>
        <input class="btn btn-success float-right" type="submit" value="Submit">
    </form>
</div>


@endsection
