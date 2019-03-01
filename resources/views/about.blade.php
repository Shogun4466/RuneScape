@extends('layouts.layout')

@section('title')
    | {{ $pageTitle }}
@endsection

@section('content')
    <div class="page">
        <span class="left"><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> {{ $pageTitle }}</span>

        <h1>{{ $pageTitle }}</h1>
    </div>
@endsection