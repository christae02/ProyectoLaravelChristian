@props(['img','desc','lote','fecha','Cantidad','id'])

<div class="flex justify-between items-center bg-gray-300 border shadow-lg rounded-2xl hover:bg-gray-200 hover:shadow-2xl mb-10">
    <div class="flex h-full w-[70%]">
        <div class="h-full pt-15 pl-5 pr-5">
            <p class="text-5xl font-bold"> {{ $cantidad }} </p>
        </div>
        <div class="p-4">
            <img class="rounded-2xl border h-[150px]" src="{{ asset('images/'.$img) }}" alt="Medicamento sin imagen">
        </div>
        <div class="flex flex-col p-10 h-full text-2xl font-bold">
            <p> {{ $desc }} </p>
            <p> Lote: {{ $lote }} </p>
            <p> Fecha de Caducidad: {{ $fecha }} </p>
        </div> 
    </div>
    <div class="flex flex-row-reverse items-center w-[30%] p-5">
        <form
            action="{{ route('carrito.destroy',$id) }}"
            method="POST"
        >
            @csrf
            @method('POST')
            <button type="submit" class="ml-2 bg-red-500 rounded-4xl font-bold text-2xl text-white p-3 hover:bg-red-300">Quitar</button>
        </form>
        <x-anchor bg="bg-blue-500" size="2xl" title="Editar cantidad" href="{{ route('carrito.edit',$id) }}" hover="bg-blue-300"/>
    </div>
</div>