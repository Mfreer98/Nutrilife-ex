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

<div class="px-4 py-4">
    <div
        class="p-4  w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{route('recipes.update', $food)}}" method="POST">
            @method('PUT')
            @csrf
            <h5 class=" text-center text-xl font-medium text-gray-900 dark:text-white">Edit Receta</h5>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="img">Upload
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" type="file" name="img" id="img" value="{{$recipe->img}}">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG or JPG.</p>
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white"
                    value="{{$recipe->name}}" placeholder="John Doe" required="">

            </div>

            <div>
                <input type="number" name="calories" id="calories"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="" value="{{$recipe->calories}}">
                <label for="calories"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Calories</label>

            </div>

            <div>
                <label for="instructions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Instrucciones</label>
                <textarea type="text" name="instructions" id="instructions"
                    class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white"
                    value="{{$recipe->instructions}}" rows="4" required=""></textarea>

            </div>

            <div>
            <label for="ingredients" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingredientes</label>
                <textarea type="text" name="ingredients" id="ingredients"
                    class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white"
                    value="{{$recipe->ingredients}}" rows="4" required=""></textarea>

            </div>

            <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Notas</label>
                <textarea type="text" name="notes" id="notes"
                    class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white"
                    value="{{$recipe->notes}}" rows="4" required=""></textarea>

            </div>


            <div>
                <input type="number" name="servings" id="servings"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="" value="{{$recipe->servings}}">
                <label for="servings"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-lime-600 peer-focus:dark:text-lime-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Porciones</label>

            </div>


            <div class="flex col-2">
                <button type="submit"
                    class=" mx-5  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                <a href="{{route('recipes.index')}}"
                    class=" mx-4 text-white bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:bg-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-gray-300 dark:hover:bg-gray-200 dark:focus:bg-gray-300">
                    Cancel
                </a>
            </div>



        </form>
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