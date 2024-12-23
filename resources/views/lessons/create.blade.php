@extends('lessons.layout')

@section('content')
    <h1>{{ isset($lesson) ? 'Edit Lesson' : 'Create Lesson' }}</h1>
    <form action="{{ isset($lesson) ? route('lessons.update', $lesson) : route('lessons.store') }}" method="POST">
        @csrf
        @if(isset($lesson)) @method('PUT') @endif

        <label>Number</label>
        <input type="text" name="number" value="{{ $lesson->number ?? '' }}" required>

        <label>Title</label>
        <input type="text" name="title" value="{{ $lesson->title ?? '' }}" required>

        <label>Description</label>
        <input name="description">{{ $lesson->description ?? '' }}</input>

        <label>Content</label>
        <textarea id="content" name="content" style="display: none;">{{ $lesson->content ?? '' }}</textarea>
        <div id="mk-editor-container"></div>

        <button type="submit">{{ isset($lesson) ? 'Update' : 'Create' }}</button>
    </form>
@endsection

