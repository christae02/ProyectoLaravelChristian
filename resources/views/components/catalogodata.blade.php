@props(['presentacion','fecha','lote','existencia','imagen'])

<div class="w-[40%] p-10 bg-gray-300 border ml-[5%] mr-[5%] mt-[2%] mb-[2%]">
    <div class="flex justify-end">
        <button class="p-1 bg-blue-500 text-white mr-2">Modificar</button>
        <button class="p-1 bg-yellow-500 text-black mr-2">Editar</button>
        <button class="p-1 bg-red-500 text-white mr-2">Borrar</button>
    </div>

    <div class="m-5 text-center justify-items-center">
        <img class="w-[70%] rounded-4xl border"src="{{ asset($imagen) }}" alt="Clamoxin">
        <p class="text-2xl">{{ $presentacion }}</p>
        <p class="text-md">Fecha Caducidad: {{ $fecha }}</p>
        <p class="text-md">Lote: {{ $lote }}</p>
        <p class="text-md">Existencia: {{ $existencia }}</p>
        <div class="flex justify-center mt-10">
            <p class="text-md mr-2">Cantidad</p>
            <select class="bg-white mr-8">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
            <button class="p-1 bg-green-500 text-white mr-2">Vender</button>
        </div>
    </div>
</div>