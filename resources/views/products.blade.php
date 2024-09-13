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
    <div class="flex flex-wrap justify-center lg:max-w-[1200px] lg:w-10/12 mx-auto bg-white">
        @foreach ($products as $product )
        <a href="{{ route('product-detail', [$product['name']]) }}" class="lg:max-w-[225px] lg:w-full lg:h-[225px] flex items-center justify-center cursor-pointer">
            {{-- <div class="lg:max-w-[225px] lg:w-full lg:h-[225px] flex items-center justify-center cursor-pointer"> --}}
                <img src="{{asset($product["logo_image_link"])}}" alt="">
            {{-- </div> --}}
        </a>
        @endforeach
    </div>
</div>
<x-form-contact></x-form-contact>
@endsection

