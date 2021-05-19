@extends('layouts.app')

@section('content')

<h2>Work Summary</h2>

@foreach ($experiences as $e)
   <div class="card">
       <div class="card-body">
            <h4 class="card-title">
                {{$e->job_title}} ({{$e->start_date}} to {{$e->end_date}})
            </h4>
            <ul>
                <li>{{$e->employer}}</li>
                <li>{{$e->city}}</li>
                <li>{{$e->state}}</li>
            </ul>
            <a class="btn btn-sm btn-primary" href="{{ route('experience.edit', $e) }}" role="button">Edit</a>

                <form action="{{ route('experience.destroy', $e) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
       </div>
   </div>
@endforeach

<a href="{{ route('experience.create') }}" role="button">+ Add another Work</a>

<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href="{{ route('experience.create') }}" role="button">Back</a>
    </div>
    <div class="col text-left">
        <a class="btn btn-primary mt-3 float-right" href="{{ route('skill.index') }}" role="button">Skills Section</a>
    </div>
</div>


@endsection
