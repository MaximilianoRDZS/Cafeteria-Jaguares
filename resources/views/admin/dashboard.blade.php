<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
  <div class="bg-white flex p-6 shadow-sm">
    <div class="mb-3 w-100 ">
      <img src="{{asset('img/Jaguares.png')}}" class="w-20" alt="image">
    </div>
  </div>
  <div class="flex h-screen">
    <div class="p-6 border-r w-64 border-gray-200">
      <h6 class="font-bold mb-4">Menu</h6>
      <ul>
        <li class="flex mb-8">
          <div class="bg-white shadow-sm p-2 mr-3 rounded-lg">
            <i class="fa-solid fa-house fa-lg"></i>
          </div>
          <a href="{{route('dashboard')}}" class="self-center">Dashboard</a>
        </li>
        <li class="flex mb-8">
          <div class="bg-white shadow-sm p-2 mr-3 rounded-lg">
            <i class="fa-solid fa-boxes-stacked fa-lg"></i>          
          </div>
          <a href="" class="self-center">Inventario</a>
        </li>
        <li class="flex mb-8">
          <div class="bg-white shadow-sm p-2 mr-3 rounded-lg">
            <i class="fa-solid fa-circle-dollar-to-slot fa-lg"></i>
          </div>
          <a href="" class="self-center">Ventas</a>
        </li>
        <li class="flex mb-8">
          <div class="bg-white shadow-sm p-2 mr-3 rounded-lg">
            <i class="fa-solid fa-dolly"></i>
          </div>
          <a href="" class="self-center">Proveedores</a>
        </li>
        <li class="flex mb-8">
          <div class="bg-white shadow-sm p-2 mr-3 rounded-lg">
            <i class="fa-solid fa-user fa-lg"></i>
          </div>
          <a href="" class="self-center">Empleados</a>
        </li>
      </ul>
    </div>
    <!-- Contenido -->
    <div>
      
    </div>
  </div>
</body>
</html>