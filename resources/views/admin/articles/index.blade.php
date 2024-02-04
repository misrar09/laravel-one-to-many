@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $article->title }}</div>
                        <div class="card-body">
                            {{ $article->description }}
                            {{ $article->conclusion }}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
