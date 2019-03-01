@extends('layout')

@section('title')
    | Update Log
@endsection

@section('content')
    <div class="page">
        <span class="left"><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> Update Log</span>
        <span class="right">Next update:  </span>

        <h1>Update Log</h1>

        @foreach ($updateLogs as $log)
            <p>{{ $log->username }} <i class="fas fa-long-arrow-alt-right"></i> {{ \Carbon\Carbon::parse($log->updated_at)->format('d. M Y H:i') }}</p>
        @endforeach
    </div>
@endsection