<div class="bg-gray-800">
    <div class="flex">
        <p class="text-white text-5xl p-[15px] w-[55%]">Antibioticos Farmacias La Providencia </p>
        <img class="w-80" src="{{ asset('images/FarmaciaLaProvidencia.png') }}" alt="Logo">
        <div class="w-[20%] flex justify-end">
            <a class="w-25 h-auto" href="{{ route('carrito.index') }}"><img src="{{ asset('images/carrito.png') }}" alt=""></a>
            <p class="flex items-center mt-2 p-[2%] bg-white text-lg font-bold rounded-4xl h-[30%]">{{ $countCarrito }}</p>
        </div>
    </div>
</div>
<div class="flex bg-blue-500">
    <nav>
        <div class="bold hidden md:flex space-x-15 ml-10">
            <x-navlink title="Inicio"/>
            <x-navlink title="Antibioticos" route="{{ route('antibioticos.index') }}"/>
            <x-navlink title="Doctores" route="{{ route('doctor.index') }}"/>
            <x-navlink title="Catalogo" route="{{ route('catalogo.index') }}"/>
        </div>
    </nav>
</div>