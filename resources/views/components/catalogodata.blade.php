@props(['presentacion','mg','fecha','lote','existencia','imagen','id'])

<div class="rounded-2xl shadow-md hover:shadow-2xl transition w-[20%] p-4 bg-gray-200 ml-[2.5%] mr-[2.5%] mt-[2%] mb-[2%]">

    <div class="m-5 text-center justify-items-center">
        <img class="w-full h-40 object-cover rounded-lg" src="{{ asset($imagen) }}" alt="Clamoxin">
        <h3 class="text-lg font-bold">{{ $presentacion }} {{ $mg }}mg</h3>
        <p class="text-lg font-semibold">Lote: {{ $lote }}</p>
        <br>
        <p class="text-md">Fecha Caducidad: {{ $fecha }}</p>
        <p class="text-md">Existencia: {{ $existencia }}</p>
        <div class="flex justify-center mt-10 items-center">
            <form
                action="#"
                method="POST"
                class="flex"
            >
                @csrf
                @method('POST')
                <p>Cantidad</p>
                <input class="bg-white w-[60%] h-8 ml-1" id="cantidad" name="cantidad" type="text">
            </form>
            <x-anchor bg="bg-green-500 ml-2 mr-2" title="Agregar" href="#" hover="bg-green-300"/>
        </div>
    </div>
</div>