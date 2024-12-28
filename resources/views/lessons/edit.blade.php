@extends('lessons.layout')

@section('content')
    <a href="{{ route('lessons.index') }}" class=" rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back to Lessons</a>

    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <form action="{{ isset($lesson) ? route('lessons.update', $lesson) : route('lessons.store') }}" method="POST">
        @csrf
        @if(isset($lesson)) @method('PUT') @endif
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="number" class="block text-sm/6 font-semibold text-gray-900">Number</label>
                <div class="mt-2.5">
                    <input type="text" name="number" id="first-number" autocomplete="number" value="{{ $lesson->number ?? '' }}" required
                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div>
                <label for="title" class="block text-sm/6 font-semibold text-gray-900">Title</label>
                <div class="mt-2.5">
                    <input type="text" name="title" id="title" autocomplete="title" value="{{ $lesson->title ?? '' }}" required
                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="description" class="block text-sm/6 font-semibold text-gray-900">Url Tag</label>
                <div class="mt-2.5">
                    <input type="text" name="description" id="description" autocomplete="description" value="{{ $lesson->description ?? '' }}" required
                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="message" class="block text-sm/6 font-semibold text-gray-900">Content</label>
                <div class="mt-2.5">
                    <textarea name="content" id="content" rows="4"
                              class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                        {{ $lesson->content ?? '' }}
                    </textarea>

                </div>
            </div>
            </div>

{{--        <button type="submit">{{ isset($lesson) ? 'Update' : 'Create' }}</button>--}}
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ isset($lesson) ? 'Update' : 'Create' }}</button>
            </div>
    </form>
@endsection

