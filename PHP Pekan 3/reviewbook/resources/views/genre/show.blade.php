@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Detail Genre</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $genre->name }}</h5>
        </div>
    </div>
    <a href="{{ route('genre.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
</div>
@endsection
