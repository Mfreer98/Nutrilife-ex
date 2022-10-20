<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
        @extends('main')
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

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
        
        
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Hola, {{ __(Auth::user()->name) }}!, que deseas hacer?
                </h2>
            </x-slot>

            <div class = "mx-6 mt-6 columns-2">
                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-30 rounded-t-lg md: md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Asignar una dieta</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Asigna una dieta para tus clientes registrados.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Ver Subscripcion</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Mira tu estado de subscripcion.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Ver pacientes</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Mira y edita a tus pacientes registrados.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Chat</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Chatea con tus pacientes asi como la gente de soporte tecnico.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Recetas</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Mira, añade o elimina recetas que le asignes a pacientes.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-l hover:bg-lime-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/Nutrilife.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-white">Agenda</h5>
                        <p class="mb-3 font-normal text-gray-700 hover:text-white">Agenda, edita o borra citas con pacientes.</p>
                    </div>
                </a>
 
 
            </div>
        </x-app-layout>


        
        

        
            
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    </body>
    
</html>