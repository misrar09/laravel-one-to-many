@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ $article->title }}</div>
                    <div class="card-body">
                        {{ $article->description }}
                        {{ $article->conclusion }}
                    </div>
                    <div class="card-footer">
                        {{ $article->type ? $article->type->name : 'No Type' }}

                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
