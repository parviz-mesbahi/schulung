@extends('lessons.layout')

@section('content')
    <h1>Lessons</h1>
    <a href="{{ route('lessons.create') }}">Create Lesson</a>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Number</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($lessons as $lesson)
            <tr>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->number }}</td>
                <td>{{ $lesson->title }}</td>
                <td>
                    <a href="{{ route('lessons.show', $lesson) }}">View</a>
                    <a href="{{ route('lessons.edit', $lesson) }}">Edit</a>
                    <form action="{{ route('lessons.destroy', $lesson) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
