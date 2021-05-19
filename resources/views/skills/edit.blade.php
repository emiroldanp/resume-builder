@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Skills details</h2>

    <form action="{{route('skill.update', $skill)}}" method="POST">
        @csrf
        @method('PUT')
        <input class="form-control mb-2" type="text" name="name" placeholder="Name" value="{{$skill->name}}">
        <input class="form-control mb-2" type="text" name="rating" placeholder="Rating (1-10)" value="{{$skill->rating}}">
        <br>
        <input class="btn btn-success float-right" type="submit" value="Save Education">
    </form>
</div>


@endsection
