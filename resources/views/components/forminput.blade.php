@props(['title'=>'','type'=>'text','id','value'=>'','width'=>'60','mb'=>'5','mt'=>'5'])

<div class="mt-{{ $mt }}">
    <label class="text-lg" for="{{ $id }}">{{ $title }}:</label>
    <br>
    <input class="bg-white border mb-{{ $mb }} w-{{ $width }}" name="{{ $id }}" type="{{ $type }}" id="{{ $id }}" value="{{ $value }}">
    <br>
</div>