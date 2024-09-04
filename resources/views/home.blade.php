@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') ?? 'Home' }}</title>
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :isHome="true" />

    <div class="flex flex-col lg:flex-row w-full text-white">
        <div
            class="h-[432px] lg:h-auto bg-[#004697] py-[70px] px-[19px] lg:px-0 lg:py-[100] lg:pl-[167px] lg:pr-[81px] lg:w-1/2 ">
            <h2 class="text-[48px] font-intro font-black leading-[100%] uppercase">Segment</h2>
            <div class="mt-[16px] flex flex-col justify-end text-start items-end h-[90%] font-kohinoor">
                <p class="font-bold text-[16px] leading-[150%]">
                    All of our dairy products are focused on meeting the needs of livestock to improve overall health and
                    productivity.
                </p>
                <br>
                <p class="font-normal text-[16px] leading-[150%]">
                    Learn how each of our offerings use science-driven formulations address common agricultural challenges
                    for
                    dairy cattle.
                </p>
            </div>
        </div>

        <div class="h-full">
            <div class="flex flex-row text-left h-[90%]">
                <div class="w-[20px] h-auto bg-[#D31145]"></div>
                <div class="mt-[31px] mx-[22px]">
                    <div class="flex justify-between items-center">
                        <span
                            class="text-[24px] text-[#1E1E1E] font-intro font-black leading-[146.54%] uppercase">Dairy</span>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="24" viewBox="0 0 37 24"
                                fill="none">
                                <path d="M7 12L32 12" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M25 5L32 12L25 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <img src="{{ asset('images/home/segments_x2.png') }}" class="lg:hidden" alt="">
                    <img src="{{ asset('images/home/segments_desktop_x1.png') }}" class="hidden lg:block" alt="">
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="flex flex-col lg:flex-row w-full text-ah-medium-dark-grey bg-ah-lightest-grey"> --}}
    <div
        class="flex flex-col lg:flex-row w-full text-ah-medium-dark-grey bg-ah-lightest-grey
                    lg:px-0 lg:py-[100] lg:pl-[167px] lg:pr-[81px] lg:w-1/2 pt-[50px]">
        <h2 class="text-[48px] font-intro font-black leading-[100%] uppercase px-[20px]">About us</h2>
        <div
            class="flex flex-col justify-end text-start items-end mt-[30px] px-[20px] font-kohinoor text-[16px] leading-[150%]">
            <p>
                At Arm & Hammer™, we are dedicated to advancing animal nutrition through cutting-edge research and
                innovation
            </p>
            <br>
            <p>
                Our mission is to harness the power of science to develop solutions that enhance animal health, nutrition,
                and productivity.
            </p>
            <br>
            <p>
                With a deep commitment to sustainability and global impact, we integrate proven technologies to address
                agricultural challenges and drive positive change in animal production worldwide.
            </p>
            <br>
            <p>
                As your trusted partner, we are dedicated to providing continuous solutions to increase the efficiency and
                profitability of your business.
            </p>
        </div>
        <div class="flex flex-row text-left mt-[40px]">
            <img src="{{ asset('images/home/segments_x2.png') }}" class="lg:hidden" alt="">
            <img src="{{ asset('images/home/segments_desktop_x1.png') }}" class="hidden lg:block" alt="">
        </div>
    </div>
    {{-- </div> --}}
@endsection
