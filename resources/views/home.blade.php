{{-- @component('components.layout') --}}
<x-layouts.app title="Home" meta-description="My personal meta description">
    {{-- <x-slot name="title">
        Home
    </x-slot> --}}

    <div class="flex flex-col items-center justify-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
        @auth()
        <div
            class="text-center text-slate-200 max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
            <p>Name: {{Auth::user()->name}}</p>
            <p>Email: {{Auth::user()->email}}</p>
        </div>
        @endauth
    </div>

</x-layouts.app>
{{-- @endcomponent --}}

{{-- --------------------------------------------------- --}}

{{-- @extends('layouts.app')

@section('title', 'About')
@section('meta_description', 'My personal meta description')
@section('content')
<h1>About</h1>
@endsection --}}