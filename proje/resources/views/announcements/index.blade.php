<!-- resources/views/announcements/index.blade.php -->

@extends('layouts.app')

@section('content')
    @if(auth()->user()->role=='Admin')
    <div class="container">
        <h1>Announcements</h1>
        <a href="{{ route('announcements.create') }}" class="btn btn-primary">Add Announcement</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->content }}</td>
                        <td>
                            <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        @if(auth()->user()->role=='Customer')
        <div class="container">
        <h1>Announcements</h1>
        <a href="{{ route('messages.index') }}" class="btn btn-primary">Mesaj Listesi</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection