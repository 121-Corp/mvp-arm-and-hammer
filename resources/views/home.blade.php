@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') ?? 'Home' }}</title>
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <x-header :$title :$subtitle :$phrase :isHome="true"></x-header>

    <div class="flex flex-col lg:flex-row w-full text-white">
        <div class="h-[432px] lg:h-auto bg-[#004697] py-[70px] px-[19px] lg:px-0 lg:py-[100] lg:pl-[167px] lg:pr-[81px] lg:w-1/2 ">
            <h2 class="text-[48px] font-black leading-[100%] uppercase">Segment</h2>
            <div class="mt-[16px] flex flex-col justify-end text-start items-end h-[90%]">
                <p class="font-bold">
                    All of our dairy products are focused on meeting the needs of livestock to improve overall health and
                    productivity.
                 </p>
                 <br>
                 <p class="font-normal">
                    Learn how each of our offerings use science-driven formulations address common agricultural challenges for
                    dairy cattle.
                </p>
            </div>
        </div>

        <div class="h-full">
            <div class="flex flex-row text-left h-[90%]">
                <div class="w-[20px] h-auto bg-[#D31145]"></div>
                <div class="mt-[31px] mx-[22px]">
                    <div class="flex justify-between items-center">
                        <span class="text-[24px] text-[#1E1E1E] font-black leading-[146.54%] uppercase">Dairy</span>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="24" viewBox="0 0 37 24" fill="none">
                                <path d="M7 12L32 12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25 5L32 12L25 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </a>
                    </div>
                    <img src="{{asset('images/home/segments_x2.png')}}" class="lg:hidden" alt="">
                    <img src="{{asset('images/home/segments_desktop_x1.png')}}" class="hidden lg:block" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
