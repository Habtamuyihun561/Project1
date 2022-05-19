@extends('layouts.header')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1><a href="{{ route('index') }}" style="font-size: 10rem">Todos</a></h1>
            </div>
        </div>
@endsection
