@extends('layouts.app')

@section('content')

<div class="mb-4">
    <h1 class="fw-bold mb-1">Create New Event</h1>
    <p class="text-muted mb-0">Fill out the details below to publish a new community event</p>
</div>

<div class="card card-soft bg-white p-4" style="max-width: 680px;">
    <h5 class="fw-bold mb-1">Event Details</h5>
    <p class="text-muted small mb-4">Basic information about the event</p>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/community-events') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Event Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" placeholder="e.g. Summer Community Festival" value="{{ old('title') }}">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Event Date <span class="text-danger">*</span></label>
                <input type="date" name="date" class="form-control" value="{{ old('date') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Time <span class="text-danger">*</span></label>
                <input type="time" name="time" class="form-control" value="{{ old('time') }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Venue <span class="text-danger">*</span></label>
            <input type="text" name="venue" class="form-control" placeholder="e.g. Riverside Park, Main Pavilion" value="{{ old('venue') }}">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Description <span class="text-danger">*</span></label>
            <textarea name="description" class="form-control" rows="5" placeholder="Describe the event, what to expect, and any special instructions...">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Banner Image</label>
            <input type="file" name="banner_image" class="form-control">
            <small class="text-muted">PNG, JPG or WebP up to 5MB</small>
        </div>

        <button class="btn btn-teal">Publish Event</button>
    </form>
</div>

@endsection