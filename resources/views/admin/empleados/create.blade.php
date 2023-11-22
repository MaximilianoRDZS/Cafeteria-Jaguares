<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agregar Empleado</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 h-screen">
  @include('shared.layout.layout')
  <div class="p-4 w-full">
    <h1 class="font-bold text-lg my-4">EMPLEADOS</h1>
    <div class="flex w-full justify-end">
      <a href="{{route('empleados')}}">
          <button type="submit"class="inline-flex px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
              Regresar
          </button>
      </a>
    </div>
    <div class="flex flex-col">
      <form action="" class="flex flex-col">
        <!-- Campo nombre del empleado -->
        <div class="flex flex-col pt-4">
          <label for="name" class="text-lg">Nombre </label>
          <input type="text" id="name" name="name" placeholder="Ingrese el nombre " class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('name')
              border-red-500
          @enderror" 
          value="{{old('name')}}">
          
          <!--Mostrar directiva de mensaje obligatorio-->
          @error('name')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo apellido del empleado -->
        <div class="flex flex-col pt-4">
          <label for="last_name" class="text-lg">Apellido </label>
          <input type="text" id="last_name" name="last_name" placeholder="Ingrese el apellido" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('last_name')
              border-red-500
          @enderror"
          value="{{old('last_name')}}">
          
          <!--Mostrar directiva de mensaje obligatorio-->
          @error('last_name')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo email del empleado -->
        <div class="flex flex-col pt-4">
          <label for="email" class="text-lg">Email </label>
          <input type="email" id="email" name="email" placeholder="your@email.com" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('email')
              border-red-500
          @enderror"
          value="{{old('email')}}">
          
          <!--Mostrar directiva de mensaje obligatorio-->
          @error('email')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo contraseña del empleado -->
        <div class="flex flex-col pt-4">
          <label for="password" class="text-lg">Contraseña </label>
          <input type="password" id="password" name="password" placeholder="Ingrese la contraseña" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('password')
              border-red-500
          @enderror">
          
          <!--Mostrar directiva de mensaje obligatorio-->
          @error('password')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo contraseña del empleado -->
        <div class="flex flex-col pt-4">
          <label for="password_confirmation" class="text-lg">Contraseña </label>
          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ingrese nuevamente la contraseña" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('password_confirmation')
              border-red-500
          @enderror">
          
          <!--Mostrar directiva de mensaje obligatorio-->
          @error('password_confirmation')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo telefono del empleado -->
        <div class="flex flex-col pt-4">
          <label for="text" class="text-lg">Número télefonico </label>
          <input type="text" id="phone" name="phone" placeholder="Ingrese el número télefonico" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('phone')
              border-red-500
          @enderror"
          value="{{old('phone')}}">
          
          <!-- Mostrar directiva de mensaje obligatorio-->
          @error('phone')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>

        <!-- Campo fecha de contrato -->
        <div class="flex flex-col pt-4">
          <label for="joining_date" class="text-lg">Fecha de contratación </label>
          <input type="date" id="joining_date" name="joining_date" class="shadow border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight
          @error('joining_date')
              border-red-500
          @enderror"
          value="{{old('joining_date')}}">
          
          <!-- Mostrar directiva de mensaje obligatorio-->
          @error('joining_date')
              <p class="bg-red-500 text-white my-2 rouded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>


        <!-- Boton para hacer submit del formulario -->
        <div class="flex justify-center">
          <input type="submit" value="Añadir Empleado" class="inline-flex px-3 py-2 m-7 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 cursor-pointer uppercase">
        </div>

      </form>
    </div>
  </div>
</body>
</html>