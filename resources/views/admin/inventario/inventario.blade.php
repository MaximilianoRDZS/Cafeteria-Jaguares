<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inventario</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
  <!-- Head -->
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
          <a href="" class="self-center">Dashboard</a>
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
    <div class="container w-full">
    <div class="flex flex-col">
      <div class="overflow-x-auto">
          <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden shadow">
                <h1 class="font-bold">Inventario</h1>
                  <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                      <thead class="bg-gray-100 dark:bg-gray-700">
                          <tr>
                              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  Nombre
                              </th>
                              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  Nombre de compañia
                              </th>
                              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  Número teléfonico
                              </th>
                              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  Acciones
                              </th>
                          </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                          <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                              <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                  <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                      <div class="text-base font-semibold text-gray-900 dark:text-white"></div>
                                      <div class="text-sm font-normal text-gray-500 dark:text-gray-400"></div>
                                  </div>
                              </td>
                              <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                  
                              </td>
                              <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                  
                              </td>
                              <td class="p-4 space-x-2 whitespace-nowrap flex items-center">
                                  <form action="" method="GET">
                                      @csrf
                                      <button type="submit"class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800">
                                          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                          Editar
                                      </button>                                 
                                  </form>
                                  <form action="" method="POST" class="form-eliminar">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit"
                                          class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800">
                                          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                          Eliminar
                                      </button>                                 
                                  </form>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</body>
</html>