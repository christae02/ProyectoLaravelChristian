@props(['bg','title','color'=>'white','href','hover'=>'','size'=>'base','p'=>'3'])

<a class="{{ $bg }} rounded-4xl text-{{ $color }} text-{{ $size }} font-bold p-{{ $p }}" href="{{ $href }}">{{ $title }}</a>   