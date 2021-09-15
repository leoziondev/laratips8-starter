@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="mb-8">
        <x-alert type="error" message="Minha mensagem de sucesso 02!" />
    </div>
    <h1 class="text-gray-700 text-4xl font-bold">Home</h1>

    <x-card.card class="w-96 mt-8">
        <h2 class="text-xl font-semibold text-gray-700">Helllo Card Component</h2>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, ea et excepturi laboriosam provident qui!</p>
    </x-card.card>
@endsection
