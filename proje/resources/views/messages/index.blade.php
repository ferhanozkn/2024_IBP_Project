<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Messages</h1>
        <a href="{{ route('messages.create') }}" class="btn btn-primary">Mesaj Gönder</a>

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
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->content }}</td>
                        <td>
                            <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
