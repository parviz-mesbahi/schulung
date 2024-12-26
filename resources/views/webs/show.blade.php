@extends('webs..layout')

@section('content')
    <h1>{{ $lesson->title }}</h1>
    <p>{!! $lesson->description !!}</p>
    <div>{!!   $lesson->content !!}</div>
    <a href="{{ route('webs..index') }}">Back to Lessons</a>
@endsection