@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5"> Add New article</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




        </div>
        <div class="row">

            <form action="{{ route('admin.articles.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Insert Title" name= "title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        placeholder="Insert Descriptoin" name= "description" value="{{ old('description') }}">
                </div>
                <div class="mb-3">
                    <label for="conclusion" class="form-label">Conslusion</label>
                    <input type="text" class="form-control @error('conclusion') is-invalid @enderror" id="conclusion"
                        placeholder="Insert Conslution" name= "conclusion" value="{{ old('conclusion') }}">
                </div>
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary w-25 mt-3 mb-5 text-white">Go Back</a>
        </div>
    </div>
@endsection
