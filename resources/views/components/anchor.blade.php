@props(['bg','title','color'=>'white','href','hover'=>'','size'=>'base','p'=>'3','width' => ''])

<a class="{{ $bg }} rounded-4xl w-{{ $width }} text-{{ $color }} text-{{ $size }} font-bold p-{{ $p }}" href="{{ $href }}">{{ $title }}</a>   