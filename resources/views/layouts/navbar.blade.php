<div class="bg-gray-800">
    <div class="flex">
        <p class="text-white text-5xl p-[15px] w-[55%]">Antibioticos Farmacias La Providencia</p>
        <img class="w-80" src="{{ asset('images/FarmaciaLaProvidencia.png') }}" alt="Logo">
        <div class="w-[20%] flex justify-end">
            <a class="w-35 h-auto" href="#"><img src="{{ asset('images/carrito.png') }}" alt=""></a>
        </div>
    </div>
</div>
<div class="flex bg-blue-500">
    <nav>
        <div class="bold hidden md:flex space-x-15 ml-10">
            <x-navlink title="Inicio"/>
            <x-navlink title="Antibioticos" route="/antibioticos"/>
            <x-navlink title="Doctores" route="/doctor"/>
        </div>
    </nav>
</div>