@props(['presentacion','mg','fecha','lote','existencia','imagen','id'])

<div class="rounded-2xl shadow-md hover:shadow-2xl transition w-[20%] p-4 bg-gray-200 ml-[2.5%] mr-[2.5%] mt-[2%] mb-[2%]">

    <div class="m-5 text-center justify-items-center">
        <img class="w-full h-40 object-cover rounded-lg" src="{{ asset('images/'.$imagen) }}" alt="Medicamento sin imagen">
        <h3 class="text-lg font-bold">{{ $presentacion }} {{ $mg }}mg</h3>
        <p class="text-lg font-semibold">Lote: {{ $lote }}</p>
        <br>
        <p class="text-md">Fecha Caducidad: {{ $fecha }}</p>
        <p class="text-md">Existencia: {{ $existencia }}</p>
        <div class="mt-10">
            <form
                action="{{ route('carrito.store') }}"
                method="POST"
                class="flex flex-col"
            >
                @csrf
                @method('POST')
                <div class="flex justify-center items-center">
                    <p>Cantidad</p>
                    <input class="bg-white w-[60%] h-8 ml-1" id="cantidad" name="cantidad" type="text">
                    <input type="hidden" id="existencia_id" name="existencia_id" value="{{ $id }}">
                    <button type="submit" class="ml-2 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Agregar</button>
                </div>
                <div>
                    <x-errormessage attribute="cantidad"/>
                </div>
            </form>
        </div>
    </div>
</div>