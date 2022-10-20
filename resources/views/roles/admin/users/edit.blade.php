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
<div class="p-4  w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="{{route('roles.admin.users.update', $user)}}" method="POST">
    @method('PUT')
    @csrf
        <h5 class=" text-center text-xl font-medium text-gray-900 dark:text-white">Edit User</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-gray-400 dark:text-white" value="{{$user->email}}" placeholder="name@company.com" required="">
            @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> El correo no es valido</p>
                @enderror
        </div>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white" value="{{$user->name}}" placeholder="John Doe" required="">
            @error('name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> La contrase;a tiene que ser mayor a 8 caracteres</p>
                @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-green-300">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-600 dark:border-green-500 dark:placeholder-green-400 dark:text-white" value="{{$user->password}}"required="">
            @error('password')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> La contrase;a tiene que ser mayor a 8 caracteres</p>
                @enderror
        </div>

        

        <div>
            <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
                @if($user->role_id == 1)
                    <select name="role_id" id="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        <option value="1" selected>Administrador</option>
                        <option value="2">Paciente</option>
                        <option value="3">Nutricionista</option>
                        
                    </select>
                @elseif ($user->role_id == 2)
                <select name="role_id" id="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        <option value="1" >Administrador</option>
                        <option value="2"selected>Paciente</option>
                        <option value="3">Nutricionista</option>
                        
                    </select>
                @else
                <select name="role_id" id="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        <option value="1" >Administrador</option>
                        <option value="2">Paciente</option>
                        <option value="3" selected>Nutricionista</option>
                        
                    </select>
                @endif
        </div>
        <div class = "flex col-2">
            <button type="submit" class=" mx-5  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
            <a href="{{route('roles.admin.users.index')}}" class=" mx-4 text-white bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:bg-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-gray-300 dark:hover:bg-gray-200 dark:focus:bg-gray-300">
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
