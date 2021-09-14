@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
    <h1 class="text-gray-700 text-4xl font-bold">Contact Us</h1>

    @if(session('alertMessage'))
        <div class="bg-purple-200 text-purple-700 font-semibold py-4 px-8 rounded mt-8">
            {{session('alertMessage')}}
        </div>
    @endif

    <form action="{{ route('contact-submit') }}">
        <button class="bg-purple-700 text-white text-sm font-semibold rounded mt-8 py-2 px-4" type="submit">Send</button>
    </form>
@endsection
