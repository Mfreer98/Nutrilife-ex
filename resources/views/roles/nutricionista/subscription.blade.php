<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-lime-400 overflow-hidden shadow-xl sm:rounded-lg">
                    <section class="bg-lime-200 rounded">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            <div class="mx-auto  max-w-screen-md rounded-lg text-center mb-8 lg:mb-12">
                                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                                    Planes de nutricionista diseñados para ti</h2>
                                <p class="mb-5 font-light text-dark sm:text-xl ">En Nutrilife nos enfocamos en que
                                    crezcas como profesional y expandas tu mercado a fronteras inimaginables.</p>
                            </div>
                            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                                <!-- Pricing Card -->
                                <div
                                    class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                    <h3 class="mb-4 text-2xl font-semibold">Basico</h3>
                                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">La mejor opción
                                        para probar la aplicación y para principiantes.</p>
                                    <div class="flex justify-center items-baseline my-8">
                                        <span class="mr-2 text-5xl font-extrabold">Gratis</span>

                                    </div>
                                    <!-- List -->
                                    <ul role="list" class="mb-8 space-y-4 text-left">
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Creación de planes alimenticios.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Personalización de Zona de Trabajo.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de medidas de los pacientes.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de Citas.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Limite de pacientes: <span class="font-semibold">5
                                                    pacientes.</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Tipo de soporte: <span class="font-semibold">Básico.</span></span>
                                        </li>

                                    </ul>
                                    <a href="#"
                                        class="text-dark bg-green-300 hover:bg-green-400 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get
                                        started</a>
                                </div>
                                <!-- Pricing Card -->
                                <div
                                    class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                    <h3 class="mb-4 text-2xl font-semibold">PRO</h3>
                                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Esta opción es
                                        perfecta para nutricionistas independientes que deseen expandir su negocio y
                                        obtener ventajas.</p>
                                    <div class="flex justify-center items-baseline my-8">
                                        <span class="mr-2 text-5xl font-extrabold">$1.5</span>
                                        <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>por
                                            paciente/mes</span>
                                    </div>
                                    <!-- List -->
                                    <ul role="list" class="mb-8 space-y-4 text-left">
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Creación de planes alimenticios.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Personalización de Zona de Trabajo.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de medidas de los pacientes.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de Citas.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Limite de pacientes: <span
                                                    class="font-semibold">Ilimitado.</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Tipo de soporte: <span class="font-semibold">Premium.</span></span>
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="text-dark bg-green-300 hover:bg-green-400 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get
                                        started</a>
                                </div>
                                <!-- Pricing Card -->
                                <div
                                    class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                    <h3 class="mb-4 text-2xl font-semibold">Empresa</h3>
                                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Esta opción es
                                        ideal para equipos nutricionistas que deseen las ventajas PRO a un menor precio.
                                    </p>
                                    <div class="flex justify-center items-baseline my-8">
                                        <span class="mr-2 text-5xl font-extrabold">$1</span>
                                        <span class="text-gray-500 dark:text-gray-400">por paciente/mes</span>
                                    </div>
                                    <!-- List -->
                                    <ul role="list" class="mb-8 space-y-4 text-left">
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Creación de planes alimenticios.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Personalización de Zona de Trabajo.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de medidas de los pacientes.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Registro de Citas.</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Limite de pacientes: <span
                                                    class="font-semibold">Ilimitado.</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span>Tipo de soporte: <span class="font-semibold">Premium.</span></span>
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="text-dark bg-green-300 hover:bg-green-400 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get
                                        started</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        



    </x-app-layout>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>




<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>