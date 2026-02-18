@props(['bg','title','color'=>'white','href','hover'=>'','size'=>'base'])

<a class="{{ $bg }} rounded-4xl text-{{ $color }} text-{{ $size }} font-bold p-3 hover:{{ $hover }}" href="{{ $href }}">{{ $title }}</a>   