<!-- resources/views/announcements/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Announcement</h1>

        <form action="{{ route('announcements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Announcement</button>
        </form>
    </div>
@endsection
