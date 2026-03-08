@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-start mb-4">
    <div>
        <h1 class="fw-bold mb-1">Dashboard</h1>
        <p class="text-muted mb-0">Browse and manage community events</p>
    </div>

    <a href="{{ url('/community-events/add') }}" class="btn btn-teal">
        + New Event
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success card-soft">
        {{ session('success') }}
    </div>
@endif

@if($events->count())
    <div class="row g-4">
        @foreach($events as $event)
            <div class="col-md-6 col-lg-4">
                <div class="card card-soft h-100 overflow-hidden bg-white">
                    <img src="{{ asset('storage/' . $event->banner_image) }}"
                         class="card-img-top"
                         alt="{{ $event->title }}"
                         style="height: 210px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">{{ $event->title }}</h5>

                        <p class="small text-muted mb-2">
                            📅 {{ \Carbon\Carbon::parse($event->starts_at)->format('l, F j, Y') }}
                        </p>

                        <p class="small text-muted mb-2">
                            🕒 {{ \Carbon\Carbon::parse($event->starts_at)->format('g:i A') }}
                        </p>

                        <p class="small text-muted mb-3">
                            📍 {{ $event->venue }}
                        </p>

                        <p class="card-text text-secondary">
                            {{ \Illuminate\Support\Str::limit($event->description, 120) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="card card-soft bg-white p-4">
        <h5 class="mb-2">No events yet</h5>
        <p class="text-muted mb-3">Create your first community event to get started.</p>
        <a href="{{ url('/community-events/add') }}" class="btn btn-teal">Create New Event</a>
    </div>
@endif

@endsection