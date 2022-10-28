@extends('adminlte::page')

<!-- Fonts -->


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

@section('title', 'Users')

@section('content_header')
<h1>Comidas</h1>
@stop

@section('content')
@if(session('message'))
<div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
    role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Tarea Realizada con exito!</span> {{session('message')}}
    </div>
</div>
@endif
<div class="py-4 px-4">
    <a href="{{ route('food.create') }}">
        <button type="button"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            <i class="fas fa-fw fa-plus"></i>
            Añadir Comida
        </button></a>

</div>
<div class="w-full bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="py-3 px-6">
                        Nombre
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Calorias
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Proteina
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Carbohidratos
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Grasa
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($foods as $food)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$food->name}}
                    </th>

                    <td class="py-4 px-6">
                        {{$food->calories}}cal
                    </td>
                    <td class="py-4 px-6">
                        {{$food->protein}}g
                    </td>
                    <td class="py-4 px-6">
                        {{$food->carbs}}g
                    </td>
                    <td class="py-4 px-6">
                        {{$food->fat}}g
                    </td>
                    <td class="flex  py-3 px-6 space-x-4">
                        <a href="{{route('food.edit',$food)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                        <form action="{{route('food.destroy',$food)}}" method="POST">

                            @method('delete')
                            @csrf
                            <input type="submit" value="Eliminar"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop