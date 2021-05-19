@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>

    <form action="/experience" method="POST">
        @csrf
        <input class="form-control mb-2" type="text" name="job_title" placeholder="Job title">
        <input class="form-control mb-2" type="text" name="employer" placeholder="Employer">
        <input class="form-control mb-2" type="text" name="city" placeholder="City">
        <input class="form-control mb-2" type="text" name="state" placeholder="State">
        <input class="form-control mb-2" type="date" name="start_date" placeholder="Start date">
        <input class="form-control mb-2" type="date" name="end_date" placeholder="End date">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Work">
    </form>
</div>


@endsection
