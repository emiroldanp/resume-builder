@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Education</h2>

    <form action="{{route('education.update', $education)}}" method="POST">
        @csrf
        @method('PUT')

        <input class="form-control mb-2" type="text" name="school_name" placeholder="School" value="{{$education->school_name}}">
        <input class="form-control mb-2" type="text" name="school_location" placeholder="Location" value="{{$education->school_location}}">
        <input class="form-control mb-2" type="text" name="degree" placeholder="Degree" value="{{$education->degree}}">
        <input class="form-control mb-2" type="text" name="field_of_study" placeholder="Field of study" value="{{$education->field_of_study}}">
        <input class="form-control mb-2" type="date" name="graduation_start_date" placeholder="Start date" value="{{$education->graduation_start_date}}">
        <input class="form-control mb-2" type="date" name="graduation_end_date" placeholder="End date" value="{{$education->graduation_end_date}}">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Education">
    </form>
</div>


@endsection
