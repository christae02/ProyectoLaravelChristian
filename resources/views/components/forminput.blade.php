@props(['title','type'=>'text','id','value'=>''])

<label for="">{{ $title }}:</label>
<br>
<input class="bg-white border mb-5" id="{{ $id }}" type="{{ $type }}" value="{{ $value }}">
<br>