@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($types as $type)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $type->name }}</div>
                        <div class="card-body">
                            {{ $type->detail }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
