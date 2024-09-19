@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') ?? 'Home' }}</title>
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :$headerType />

    {{-- SEGMENT SECTION --}}
    <div class="flex flex-col lg:flex-row w-full text-white lg:max-h-[700px] lg:h-[700px]">
        <div class="h-[432px] lg:h-full bg-ah-blue py-[70px] px-[19px] lg:px-0 lg:py-[100px] lg:pl-[167px] lg:pr-[95px] lg:w-1/2">
            <h2 class="text-[48px] font-intro font-black leading-[100%] lg:text-[56px] lg:leading-[68px] uppercase">Segment
            </h2>

            <div class="mt-[16px] flex flex-col justify-end text-start items-start h-[90%] font-kohinoor max-w-[476px] w-full">
                <p class="font-bold text-[16px] leading-[150%] lg:text-[18px] lg:leading-[150%]">
                Herd health and productivity starts here.
                </p>
                <br>
                <p class="font-normal text-[16px] leading-[150%] lg:text-[18px]">
                Set your herd apart with Arm & Hammer Animal Nutrition’s comprehensive nutrition and gut health portfolio.
                </p>
            </div>
        </div>
        <div class="lg:h-full lg:w-1/2 relative">
            <div class="w-[20px] bg-ah-red absolute h-full"></div>
            <div class="text-left max-h-[700px] hover-shine">
                <figure>
                <div class="mt-[31px] lg:mt-[95px]">
                    <div class= "mx-[44px] flex justify-between items-center lg:mx-[67px]">
                    <a href="{{route('products')}}"> <span class="text-[24px] text-ah-medium-dark-grey font-intro font-black leading-[146.54%] lg:text-[56px] lg:leading-[41.2px] uppercase">Dairy</span></a>
                        <a href="{{route('products')}}">
                            <span class="lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="24" viewBox="0 0 37 24"
                                    fill="none">
                                    <path d="M7 12L32 12" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M25 5L32 12L25 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="98" height="42" viewBox="0 0 98 42"
                                    fill="none">
                                    <path d="M8.44824 21L89.5517 21" stroke="#58585A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M77.7241 9.04166L89.5517 21L77.7241 32.9583" stroke="#58585A" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="lg:mt-[41px] ml-5 hover-shine">
                        <a href="{{route('products')}}">
                            <img src="{{ asset('images/Mobile/Home/Dairy_2x.png') }}"
                                class="lg:hidden g:hidden w-max-[323px] w-full max-h-[255px] h-auto" alt="">
                            <img src="{{ asset('images/Desk/Home/Diary_2x.png') }}"
                                class="hidden lg:block max-h-[522px] w-auto h-auto object-center object-cover" alt="">
                        </a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    {{-- END SEGMENT SECTION --}}
    {{-- ABOUT  SECTION--}}
    <div class="flex flex-col lg:flex-row-reverse w-full text-ah-medium-dark-grey bg-ah-lightest-grey lg:max-h-[700px] lg:h-[700px]">
        <div class="lg:w-1/2">
            <h2 class="text-[48px] font-intro font-black leading-[100%] uppercase px-[20px] lg:px-[82px] mt-[30px] lg:mt-[91.5px]">About us</h2>
            <div class="mt-[30px] lg:mt-[110px] px-[20px] lg:pl-[82px]
                    lg:pr-[160px] text-[16px] lg:text-[18px] leading-[150%] font-kohinoor pb-[40px]">
                <p>
                At Arm & Hammer, we know producers need products that work as hard as you do. It’s why we use cutting-edge research and innovation to deliver efficiency- and profitability-enhancing nutrition solutions.
                </p>
                <br>
                <p>
                We harness the power of science to drive positive change in global animal production, for greater sustainability across the world – and on your farm. Local results for global impact.
                </p>

            </div>
        </div>
        <div class="text-left lg:w-1/2">
            <img src="{{ asset('images/Mobile/Home/About_us_2x.png') }}" class="lg:hidden max-h-[305px] w-full" alt="">
            <img src="{{ asset('images/Desk/Home/About_us_3x.png') }}" class="hidden lg:block w-full max-h-[700px] h-auto object-center object-cover" alt="">
        </div>
    </div>
    {{-- END ABOUT SECTION --}}

    <x-form-contact></x-form-contact>
@endsection
