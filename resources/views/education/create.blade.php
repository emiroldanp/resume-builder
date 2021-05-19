@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education details</h2>

    <form action="/education" method="POST">
        @csrf
        <input class="form-control mb-2" type="text" name="school_name" placeholder="School">
        <input class="form-control mb-2" type="text" name="school_location" placeholder="Location">
        <input class="form-control mb-2" type="text" name="degree" placeholder="Degree">
        <input class="form-control mb-2" type="text" name="field_of_study" placeholder="Field of study">
        <input class="form-control mb-2" type="date" name="graduation_start_date" placeholder="Start date">
        <input class="form-control mb-2" type="date" name="graduation_end_date" placeholder="End date">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Education">
    </form>
</div>


@endsection
