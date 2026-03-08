@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h2 class="mb-1">Create New Event</h2>
    <p class="text-muted mb-4">Fill out the details below to publish a new community event</p>

    <div class="card shadow-sm p-4" style="max-width:650px">

        <h5 class="mb-1">Event Details</h5>
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
                <label class="form-label">Event Title *</label>
                <input type="text" name="title" class="form-control" placeholder="e.g. Summer Community Festival">
            </div>

            <div class="row mb-3">

                <div class="col">
                    <label class="form-label">Event Date *</label>
                    <input type="date" name="date" class="form-control">
                </div>

                <div class="col">
                    <label class="form-label">Time *</label>
                    <input type="time" name="time" class="form-control">
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Venue *</label>
                <input type="text" name="venue" class="form-control" placeholder="e.g. Riverside Park, Main Pavilion">
            </div>

            <div class="mb-3">
                <label class="form-label">Description *</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Describe the event, what to expect, and any special instructions..."></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">Banner Image</label>
                <input type="file" name="banner_image" class="form-control">
                <small class="text-muted">PNG, JPG or WebP up to 5MB</small>
            </div>

            <button class="btn btn-success">
                Publish Event
            </button>

        </form>

    </div>

</div>

@endsection