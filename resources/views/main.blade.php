@extends('layouts.app')

@section('content')
<div class="container">

</div>

<div class="container px-4 px-lg-5 h-100 align-items-center">
    <div class="row gx-4 gx-lg-5 h-100  justify-content-center text-center">
        <div class="col-lg-8 align-self-end">
            <h1 class="text-white font-weight-bold">
                <h2>Welcome to CV Builder</h2>
                Free Resume Creator for your LinkedIn profile.
            </h1>
        </div>
        <div class="col-lg-8 align-self-center">
            <p class="text-white-75 mb-5 mt-3">
                <a name="" id="" class="btn btn-primary btn-lg" href="{{ route('user-detail.create') }}" role="button">Build Now</a>
            </p>
        </div>
    </div>
</div>

@endsection
