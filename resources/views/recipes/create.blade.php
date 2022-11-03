@extends('adminlte::page')

<!-- Fonts -->


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center">Añadir usuario</h1>
@stop

@section('content')
<div class="py-4 rounded-xl px-4 bg-gradient-to-r from-teal-100 via-teal-200 to-teal-300">
    <form method="POST" action="{{route('food.store')}}" enctype="multipart/form-data">
        @method('POST')
        @csrf

        <div class="relative z-0 mb-6 w-full group">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="img">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" type="file" name="image" id="img">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG or JPG.</p>

        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="name" id="name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none focus:ring-0 focus:border-lime-600 peer"
                placeholder=" " required="">
            <label for="name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>

        </div>


        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="calories" id="calories"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="calories"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Calories</label>

        </div>

        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="protein" id="protein"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="protein"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Protein</label>

        </div>

        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="fat" id="fat"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="fat"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fat</label>

        </div>

        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="carbs" id="carbs"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="carbs"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Carbs</label>

        </div>

        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="sugar" id="sugar"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="carbs"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sugar</label>

        </div>

        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="sodium" id="sodium"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required="">
            <label for="sodium"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sodium</label>

        </div>




        <button type="submit"
            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear</button>
    </form>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

@stop

@section('js')
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
@stop