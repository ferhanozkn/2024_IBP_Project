<!-- resources/views/announcements/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Announcement</h1>

        <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $announcement->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control" required>{{ $announcement->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Announcement</button>
        </form>
    </div>
@endsection
