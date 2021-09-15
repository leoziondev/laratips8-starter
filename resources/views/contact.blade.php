@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')


    <div class="w-full lg:w-2/3 mx-2 lg:mx-auto bg-white p-8 shadow-sm rounded">
        <h1 class="text-gray-700 text-4xl font-bold mb-8">Contact Us</h1>

        @if(session('alertMessage'))
            <div class="bg-purple-200 text-purple-700 font-semibold py-4 px-8 rounded mt-8">
                {{session('alertMessage')}}
            </div>
        @endif

        <form action="{{ route('contact-us.store') }}" method="post" class="mx-2" autocomplete="off">
            @csrf

            <div class="grid grid-cols-12 gap-4">
                <x-ui.input label="First name" name="first_name" class="col-span-6"/>
                <x-ui.input label="Last name" name="last_name" class="col-span-6"/>
                <x-ui.input label="Address 1" name="address[0]" class="col-span-6"/>
                <x-ui.input label="Address 2" name="address[1]" class="col-span-6"/>
            </div>

            <div class="flex justify-end">
                <button class="bg-purple-700 text-white text-sm font-semibold rounded mt-8 py-2 px-8" type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
