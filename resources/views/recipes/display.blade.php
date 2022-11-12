<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citas</title>
    @extends('main')
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>


    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <x-app-layout>
        <div class="flex">
            <div class="p-3 w-full flex items-center justify-center">
                <label for="input-group-search" class="sr-only ">Search</label>
                <div class="relative w-1/2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <form method="GET" action="{{route('recipes.search')}}">

                        <input type="text" id="query" name="query"
                            class="block p-2.5 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar Receta">
                        <button id="boton"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>


                <button
                    class="block text-white mx-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="authentication-modal">
                    Añadir receta
                </button>

                @if(session('message'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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


                <div class="hidden z-50 fixed top-0 left-0 w-full h-modal outline-none overflow-x-hidden overflow-y-auto"
                    id="authentication-modal" tabindex="-1" aria-hidden="true">

                    <div class="sm:h-[calc(100%-3rem)] relative bg-white w-1/2 rounded-lg shadow dark:bg-gray-700">
                        <div
                            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div
                                class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800"
                                    id="exampleModalScrollableLabel">
                                    Añadir Receta
                                </h5>
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="flex-auto overflow-y-auto relative py-6 px-6 lg:px-8">

                                <form method="POST" action="{{route('recipes.store')}}" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                                            <input type="text" id="name" name="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Food Name..." required>
                                        </div>
                                        <div>
                                            <label for="calories"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Calorias</label>
                                            <input type="number" id="calories" name="calories"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="" required>
                                        </div>
                                        <div>
                                            <label for="servings"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Porciones</label>
                                            <input type="number" id="servings" name="servings"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="" required>
                                        </div>
                                        <div>
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                for="img">Imagen</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="file_input_help" id="img" name="image" type="file">
                                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                                id="file_input_help">
                                                SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="ingredients"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Ingredientes</label>
                                        <textarea id="ingredients" name="ingredients" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <div>
                                        <label for="instructions"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Instrucciones de la Preparacion</label>
                                        <textarea id="instructions" name="instructions" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <div>
                                        <label for="notes"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Notas de la Receta</label>
                                        <textarea id="notes" name="notes" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>


                                    <div
                                        class="flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                        <button type="button"
                                            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-modal-toggle="authentication-modal">
                                            Cerrar
                                        </button>
                                        <button type="submit"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                            Guardar
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>




            </div>

        </div>

        <div id="foods" class="my-6 mx-4 grid grid-cols-4 gap-4">

            @foreach ($recipes as $recipe)
            <div
                class="food-display max-w-sm  items-center justify-center  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="  items-center justify-center">
                    <a data-modal-toggle="modal-details {{$recipe->name}}" class="flex items-center justify-center">
                        <img class="my-2 h-3/6 w-3/6 rounded-lg " src="{{ asset('img/' . $recipe->img) }}" alt="" />

                    </a>
                </div>

                <div class="p-5 flex items-center justify-center">
                    <a data-modal-toggle="modal-details {{$recipe->name}}">
                        <h5 class="food mb-2 text-2xl  tracking-tight text-gray-900 dark:text-white">
                            {{ $recipe->name }}</h5>
                    </a>

                </div>

                <div class="hidden z-50 fixed top-0 left-0 w-full h-modal outline-none overflow-x-hidden overflow-y-auto"
                    id="modal-details {{$recipe->name}}" tabindex="-1" aria-hidden="true">

                    <div class="sm:h-[calc(100%-3rem)] relative bg-white w-1/2 rounded-lg shadow dark:bg-gray-700">
                        <div
                            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div
                                class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800"
                                    id="exampleModalScrollableLabel">
                                    Detalles de la Receta
                                </h5>
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="modal-details {{$recipe->name}}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="flex-auto overflow-y-auto relative py-6 px-6 lg:px-8">


                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                                        <input type="text" id="name" aria-label="names"
                                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            value="{{$recipe->name}}" disabled readonly>
                                    </div>
                                    <div>
                                        <label for="calories"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Calorias</label>
                                        <input type="number" id="calories" name="calories"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" disabled value="{{$recipe->calories}}" required>
                                    </div>
                                    <div>
                                        <label for="servings"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Carbohidratos</label>
                                        <input type="number" id="servings" name="servings"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" disabled value="{{$recipe->servings}}" required>
                                    </div>
                                    <div>
                                        <label for="ingredients"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Ingredientes</label>
                                        <textarea disabled id="ingredients" name="ingredients" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <div>
                                        <label for="instructions"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Instrucciones</label>
                                        <textarea disabled id="instructions" name="instructions" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <div>
                                        <label for="notes"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Notas</label>
                                        <textarea disabled id="notes" name="notes" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>

                                </div>


                                <div
                                    class="flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                    <button type="button"
                                        class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                        data-modal-toggle="modal-details {{$food->name}}">
                                        Cerrar
                                    </button>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>



            </div>
            @endforeach



        </div>
        <div class=" flex items-center justify-center">
            <div class="my-5 w-1/2">
                {{ $recipes->links() }}
            </div>
        </div>




    </x-app-layout>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>