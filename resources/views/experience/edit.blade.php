@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Experience</h2>

    <form action="{{route('experience.update', $experience)}}" method="POST">
        @csrf
        @method('PUT')

        <input class="form-control mb-2" type="text" name="job_title" placeholder="Job title" value="{{$experience->job_title}}">
        <input class="form-control mb-2" type="text" name="employer" placeholder="Employer" value="{{$experience->employer}}">
        <input class="form-control mb-2" type="text" name="city" placeholder="City" value="{{$experience->city}}">
        <input class="form-control mb-2" type="text" name="state" placeholder="State" value="{{$experience->state}}">
        <input class="form-control mb-2" type="date" name="start_date" placeholder="Start date" value="{{$experience->start_date}}">
        <input class="form-control mb-2" type="date" name="end_date" placeholder="End date" value="{{$experience->end_date}}">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Work Experience">
    </form>
</div>


@endsection
