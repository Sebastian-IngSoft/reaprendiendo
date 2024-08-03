@extends('layouts.app')
@section('title','laravel 11')

@push('css') {{--se puede invocar varias veces y suma el contenido no cmbia--}}
    <style>
        body{
            background-color: black
        }
    </style>
@endpush


@section('content')
    <div class="max-w-4xl mx-auto px-4">

        welcome to the home with blade

        <x-alert2 type="info" class="mb-4" class2="mx-1">{{-- tiene que haber la carpeta componentes para que sea usado --}}
            <x-slot name="title">
                titulo con variable
            </x-slot>

            Contenido con layouts
        </x-alert2>
@endsection
