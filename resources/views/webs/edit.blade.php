@extends('webs.layout')

@section('content')
    <a href="{{ route('webs.index') }}" class=" rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back to Webpages</a>

    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <form action="{{ isset($web) ? route('webs.update', $web) : route('webs.store') }}" method="POST">
        @csrf
        @if(isset($web)) @method('PUT') @endif
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="page" class="block text-sm/6 font-semibold text-gray-900">Page</label>
                <div class="mt-2.5">
                    <input type="text" name="page" id="page" autocomplete="page" value="{{ $web->page ?? '' }}" required
                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div>
                <label for="title" class="block text-sm/6 font-semibold text-gray-900">Title</label>
                <div class="mt-2.5">
                    <input type="text" name="title" id="title" autocomplete="title" value="{{ $web->title ?? '' }}" required
                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>
{{--            <div class="sm:col-span-2">--}}
{{--                <label for="company" class="block text-sm/6 font-semibold text-gray-900">Description</label>--}}
{{--                <div class="mt-2.5">--}}
{{--                    <input type="text" name="description" id="description" autocomplete="description" value="{{ $lesson->description ?? '' }}" required--}}
{{--                           class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="sm:col-span-2">
                <label for="content" class="block text-sm/6 font-semibold text-gray-900">Content</label>
                <div class="mt-2.5">
                    <textarea name="content" id="content" rows="4"
                              class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                        {{ $web->content}}
                    </textarea>

                </div>
            </div>

            </div>


            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ isset($web) ? 'Update' : 'Create' }}</button>
            </div>
    </form>
@endsection

