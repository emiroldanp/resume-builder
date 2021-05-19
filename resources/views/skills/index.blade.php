@extends('layouts.app')

@section('content')

<h2>Skills Summary</h2>

@foreach ($skills as $e)
   <div class="card">
       <div class="card-body">
           <h4 class="card-title">
               {{ $e->name }}
               ( {{ $e->rating }} )
            </h4>
            <a class="btn btn-sm btn-primary" href="{{ route('skill.edit', $e) }}" role="button">Edit</a>

                <form action="{{ route('skill.destroy', $e) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
       </div>
   </div>
@endforeach

<a href="{{ route('skill.create') }}" role="button">+ Add another Skill</a>

<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href="{{ route('skill.create') }}" role="button">Back</a>
    </div>
    <div class="col text-left">
        <a name="" id="" class="btn btn-lg btn-success float-right" href="{{route('resume.download')}}" role="button">Download</a>
    </div>
</div>


@endsection
