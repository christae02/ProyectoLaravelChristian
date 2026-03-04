@props(['title'=>'','type'=>'text','id','value'=>'','width'=>'60','mb'=>'5','mt'=>'5','text'=>'lg','color'=>'black'])

<div class="mt-{{ $mt }}">
    <label class="text-{{ $text }} text-{{ $color }}" for="{{ $id }}">{{ $title }}:</label>
    <br>
    <input class="bg-white border mb-{{ $mb }} w-{{ $width }}" name="{{ $id }}" type="{{ $type }}" id="{{ $id }}" value="{{ $value }}">
    <br>
</div>