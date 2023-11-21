<div class="bg-white flex p-1 shadow-sm h-[10%] justify-between px-2">
  <div class="w-auto">
    <img src="{{asset('img/Jaguares.png')}}" class="h-full" alt="image">
  </div>
  <div class="flex flex-col justify-center">
    <form action="/logout" method="POST">
      @csrf
      <a href="#" onclick="this.closest('form').submit()" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar Sesión
      </a>
    </form>
  </div>
</div>