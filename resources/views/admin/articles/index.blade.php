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
                        <div class="card-footer">
                            {{ $article->type ? $article->type->name : 'No Type' }}

                        </div>
                    </div>
                    <div>
                        <a href="{{ route('admin.articles.edit', $article->id) }}"
                            class="btn btn-primary m-auto text-white">Edit this Article</a>
                    </div>
                    <div>
                        <form class=""position-absolute action="{{ route('admin.articles.destroy', $article->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-warning" onclick="return confirmDelete()">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                        <script>
                            function confirmDelete() {
                                return confirm('Are you sure you want to delete this item?');
                            }
                        </script>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
