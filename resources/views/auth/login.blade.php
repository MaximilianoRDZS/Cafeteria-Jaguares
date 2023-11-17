<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex justify-center items-center min-h-screen bg-gradient-to-l from-gray-200 via-gray-100 to-yellow-100">
    <div class="w-1/2 flex rounded-3xl p-3 bg-zinc-100 shadow-xl shadow-gray-400">
      <div class="w-1/2 m-1 bg-zinc-200 flex flex-col rounded-3xl content-center items-center flex-column relative">
        <div class="mb-3 w-100 ">
          <img src="{{asset('img/Jaguares.png')}}" class="w-64" alt="image">
        </div>
        <p class="text-black text-lg font-semibold mb-2" style="font-family: 'Roboto', 'Mono'; font-weight: 600;">Aqui puedes encontrar lo mejor</p>
      </div>
      
      <div class="w-1/2">
        <div class="flex w-100 p-4 flex-col justify-center h-full">
          <div class="mb-4 mt-2">
            <h2 class="font-bold text-3xl">Bienvenido</h2>
          </div>

          <form action="{{route('login')}}" method="POST" novalidate>
            @csrf
            <div class=" mb-3">
              <input id="email" name="email" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Usuario">
            </div>
            <div class=" mb-1">
              <input id="password" name="password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Contraseña">
            </div>
            @if(session('mensaje'))
              <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                {{session('mensaje')}}
              </p>
            @endif
            <div class="w-100 mb-3 py-4">
              <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Aceptar</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</body>
</html>