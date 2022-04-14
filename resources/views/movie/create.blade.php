@extends('layouts.app')
@section('content')
    <div class="card">
        @if ($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="card-body">
            <form action="{{ route('movie.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Movie Name</label>
                    <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name"
                        aria-describedby="movie_name" placeholder="Movie Name">
                    <small id="movie_name" class="form-text text-muted">Enter Movie Name</small>
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" min="0" max="10" value="{{ old('name') }}" class="form-control" name="rating"
                        id="rating" aria-describedby="movie_rating" placeholder="Rating">
                    <small id="movie_rating" class="form-text text-muted">0 to 10 only</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
