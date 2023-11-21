<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Proveedores</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 h-screen">
  @include('shared.layout.layout')
  <div class="p-4">
    <div class="flex flex-col">
      <div class="overflow-x-auto">
          <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden shadow">
                <h1 class="font-bold text-lg my-4">PROVEEDORES</h1>
                    <table class="w-full divide-y divide-gray-200 table-fixed ">
                        <thead class="bg-white">
                            <tr>
                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                    Nombre
                                </th>
                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                    Nombre de compañia
                                </th>
                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                    Número teléfonico
                                </th>
                                <th scope="col" class="p-4 text-xs font-medium text-center text-gray-500 uppercase">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-200">
                                <td class="p-4 text-base text-gray-900 whitespace-nowrap">
                                    DEMO DEMO1
                                </td>
                                <td class="p-4 text-base text-gray-900 whitespace-nowrap">
                                    DEMO1
                                </td>
                                <td class="p-4 text-base text-gray-900 whitespace-nowrap">
                                    DEMO1
                                </td>
                                <td class="p-4 space-x-2 whitespace-nowrap flex justify-center items-center">
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
</body>
</html>