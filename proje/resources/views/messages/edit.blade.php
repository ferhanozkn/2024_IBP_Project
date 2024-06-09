@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mesaj Güncelle</h1>

        <form action="{{ route('messages.update', $Message->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $Message->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control" required>{{ $Message->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Message</button>
        </form>
    </div>
@endsection
