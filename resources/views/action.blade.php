@extends('layouts.main')
@section('title')
Become A Teacher
@endsection
@section('content')
<!-- Page Header End -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Become A Teacher</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Become A Teacher</li>
            </ol>
        </nav>
    </div>
</div>


<!-- Page Header End -->
@include('includes.action')
@endsection