@extends('layouts.app')
@section('title')
<title>{{ config('app.name') ?? "A&H" }}</title>
@endsection

@section('sidebar')
    @parent
@endsection
@section('content')

<x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :$headerType />

<div class="bg-white">
    <div class="flex flex-wrap justify-center lg:max-w-[1200px] py-[40px] lg:w-10/12 lg:py-[66px] mx-auto bg-white sibling-fade">
        @foreach ($products as $product )
        <a href="{{ route('product-detail', [$product['name']]) }}" class="max-w-[225px] w-[175px] max-h-[255px] h-[175px] lg:w-full lg:h-[225px] flex items-center justify-center cursor-pointer image-container">
            {{-- <div class="lg:max-w-[225px] lg:w-full lg:h-[225px] flex items-center justify-center cursor-pointer"> --}}
                <img src="{{asset($product["logo_image_link"])}}" alt="">
            {{-- </div> --}}
        </a>
        @endforeach
    </div>
</div>
<x-form-contact></x-form-contact>
@endsection


<style>
    /* SIBLING FADE: fade out siblings around a hovered item */

.sibling-fade { visibility: hidden; }
/* Prevents :hover from triggering in the gaps between items */

.sibling-fade > * { visibility: visible; }
/* Brings the child items back in, even though the parent is `hidden` */

.sibling-fade > * { transition: opacity 150ms linear 100ms, transform 150ms ease-in-out 100ms; }
/* Makes the fades smooth with a slight delay to prevent jumps as the mouse moves between items */

.sibling-fade:hover > * { opacity: 0.4; transform: scale(0.9); }
/* Fade out all items when the parent is hovered */

.sibling-fade > *:hover { opacity: 1; transform: scale(1); transition-delay: 0ms, 0ms; }
/* Fade in the currently hovered item */








.sibling-fade {
  display: flex;
  flex-wrap: wrap;
}

.sibling-fade > * {
  background: white;
  padding: 1em;
  flex: auto;
  margin: 0.3em;
  text-align: center;
  color: #f05555;
  font-size: 1.5em;
  text-decoration: none;
}

/**/


</style>