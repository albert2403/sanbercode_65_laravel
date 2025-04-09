@extends('layouts.master')

@section('title', 'Home')
@php $title = 'Dashboard'; @endphp

@section('content')
    <h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
    <p class="fs-1 fw-light">Terima kasih telah bergabung di SanberBook. Social media kita bersama!</p>
@endsection
