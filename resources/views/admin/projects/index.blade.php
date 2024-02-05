@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($project as $projects)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $projects->title }}</div>

                        <div class="card-body">{{ $projects->description }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
