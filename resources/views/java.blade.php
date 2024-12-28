@extends('layouts.schulung')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    @foreach ($data as $info)
        <p>{!! $info->content !!}</p>
    @endforeach

@endsection
