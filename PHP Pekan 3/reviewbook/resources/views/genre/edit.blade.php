@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Edit Genre</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Genre</label>
            <input type="text" name="name" value="{{ old('name', $genre->name) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" name="description" value="{{ old('description', $genre->description) }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
