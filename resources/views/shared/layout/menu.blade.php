<div class="flex h-[90%]">
  <div class="p-6 border-r w-64 border-gray-200">
    <h6 class="font-bold mb-4">Menu</h6>
    <ul>
      <li class="flex mb-8">
        <div class="bg-white shadow-sm p-2 mr-1 rounded-lg">
          <i class="fa-solid fa-house fa-lg"></i>
        </div>
        <a class="hover:bg-zinc-300 hover:rounded-lg px-4 py-2 self-center" href="{{route('dashboard')}}">Dashboard</a>
      </li>
      <li class="flex mb-8">
        <div class="bg-white shadow-sm p-2 mr-1 rounded-lg">
          <i class="fa-solid fa-boxes-stacked fa-lg"></i>          
        </div>
        <a href="{{route('inventario')}}" class="hover:bg-zinc-300 hover:rounded-lg px-4 py-2 self-center">Inventario</a>
      </li>
      <li class="flex mb-8">
        <div class="bg-white shadow-sm p-2 mr-1 rounded-lg">
          <i class="fa-solid fa-circle-dollar-to-slot fa-lg"></i>
        </div>
        <a href="{{route('ventas')}}" class="hover:bg-zinc-300 hover:rounded-lg px-4 py-2 self-center">Ventas</a>
      </li>
      <li class="flex mb-8">
        <div class="bg-white shadow-sm p-2 mr-1 rounded-lg">
          <i class="fa-solid fa-dolly"></i>
        </div>
        <a href="{{route('proveedores')}}" class="hover:bg-zinc-300 hover:rounded-lg px-4 py-2 self-center">Proveedores</a>
      </li>
      <li class="flex mb-8">
        <div class="bg-white shadow-sm p-2 mr-1 rounded-lg">
          <i class="fa-solid fa-user fa-lg"></i>
        </div>
        <a href="{{route('empleados')}}" class="hover:bg-zinc-300 hover:rounded-lg px-4 py-2 self-center">Empleados</a>
      </li>
    </ul>
  </div>