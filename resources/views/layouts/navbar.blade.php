<div class="bg-black">
    <div class="flex">
        <p class="text-white text-5xl p-[15px]">Antibioticos Farmacias La Providencia</p>
        <img class="w-80" src="{{ asset('images/FarmaciaLaProvidencia.png') }}" alt="Logo">
        <button class="w-20" ><a href="inicio"><img src="{{ asset('images/casita blanca.png') }}" alt=""></a></button>
    </div>
</div>
<div class="flex bg-green-500">
    <nav>
    <div class="hidden md:flex space-x-15 ml-10">
        <x-navlink title="Inicio"/>
        <x-navlink title="Movimientos" route="movimientos"/>
        <x-navlink title="Ventas" route="ventas"/>
        <x-navlink title="Catalogo" route="catalogo"/>
        <x-navlink title="Agregar Antibioticos" route="antibioticos"/>
        <x-navlink title="Agregar Doctor" route="doctor"/>
    </div>
    </nav>
</div>