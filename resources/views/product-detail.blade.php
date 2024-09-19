@extends('layouts.app')
@section('title')
    <title>
        {{ config('app.name') ?? 'A&H' }}</title>
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :$headerType :$product />

    <div class="bg-white flex flex-col lg:flex-row text-ah-medium-dark-grey" id="advantage">
        <div class="lg:w-1/2 py-[70px] px-[20px] lg:py-[63px] lg:pl-[163px] lg:pr-[97px]">
            <h2 class="text-[43px] lg:text-[46px] font-black leading-[120%] mb-[50px] uppercase">The
                {{ $product['name'] }}<br> advantage:</h2>
            {!! $product['below_fold'] !!}
        </div>

        <hr class="bg-ah-medium-dark-grey lg:h-auto lg:w-[1px] lg:border-0">

        <div class="lg:w-1/2 py-[70px] px-[20px] lg:pl-[80px] lg:pr-[195px] text-ah-medium-dark-grey">
            <h2 class="text-[46px] font-black leading-[120%] uppercase">Tools & <br /> Resources</h2>
            <p class="mt-[20px] lg:mt-[50px] text-[16px] leading-[150%] mb-[50px]">
                As part of our ongoing commitment to the productivity of your animals, be sure to take advantage of these
                tools and resources.
            </p>

            <span class="text-[18px] font-semibold leading-[150%] mr-[100px]">
                @if ($product['name'] === 'CERTILLUS')
                    Sell Sheets
                    <br> <br>
                @endif
            </span>
            <div class="space-y-10">
                @foreach ($product['files'] as $file)
                    <a href="{{ asset($file['link']) }}" download="{{ $file['name'] }}"
                        class="flex justify-start h-[70px] px-5 items-center text-ah-medium-dark-grey border-l-[7px] border-l-ah-red align-middle cursor-pointer">
                        <img src="{{ asset('images/general/Sell-Sheet.svg') }}" class="w-[32px] h-[32px]" alt="">
                        <span class="text-[18px] font-semibold leading-[150%] ml-2">
                            @if ($product['name'] === 'CERTILLUS')
                                {{ $file['name'] }}
                            @else
                                Sell Sheet
                            @endif
                        </span>
                        <img src="{{ asset('images/general/arrow-right.svg') }}" class="ml-auto">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <x-form-contact />
@endsection
