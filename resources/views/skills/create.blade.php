@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Skills details</h2>

    <form action="/skill" method="POST">
        @csrf
        <input class="form-control mb-2" type="text" name="name" placeholder="Name">
        <input class="form-control mb-2" type="text" name="rating" placeholder="Rating (1-10)">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Skills">
    </form>
</div>


@endsection
