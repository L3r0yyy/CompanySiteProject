@extends('layouts.app')
@section('title', 'services')
@section('content')
   <h1 class="text-3xl font-bold mb-6">Our Services</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-card>
            <h2 class="text-xl font-bold mb-2">Web Development</h2>
            <p>We build modern websites.</p>
        </x-card>
        <x-card>
            <h2 class="text-xl font-bold mb-2">SEO Optimization</h2>
            <p>We rank you higher.</p>
        </x-card>
    </div>
@endsection