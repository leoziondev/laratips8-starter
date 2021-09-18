@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')


    <div class="w-full lg:w-2/3 mx-2 lg:mx-auto bg-white p-8 shadow-sm rounded">
        <h1 class="text-gray-700 text-4xl font-bold mb-8">SignUp</h1>

        @if(session('alertMessage'))
            <div class="bg-purple-200 text-purple-700 font-semibold py-4 px-8 rounded mt-8">
                {{session('alertMessage')}}
            </div>
        @endif

        <form action="{{ route('signup') }}" method="post" class="mx-2" autocomplete="off">
            @csrf

            <div class="grid grid-cols-12 gap-4">
                <x-ui.input label="Name" name="name" class="col-span-12"/>
                <x-ui.input type="email" label="Email" name="email" class="col-span-12"/>
                <x-ui.input type="password" label="Password" name="password" class="col-span-12"/>
                <input type="hidden" name="is_admin" value="0"/>
            </div>

            <div class="flex justify-end">
                <button class="bg-purple-700 text-white text-sm font-semibold rounded mt-8 py-2 px-8" type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
