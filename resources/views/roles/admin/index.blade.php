@extends('adminlte::page')

<!-- Fonts -->


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

@stop

@section('js')
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
@stop