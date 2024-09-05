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
        <div
            class="h-[432px] lg:h-auto bg-[#004697] py-[70px] px-[19px] lg:px-0 lg:py-[100px] lg:pl-[167px] lg:pr-[95px] lg:w-1/2">
            <h2 class="text-[48px] font-intro font-black leading-[100%] lg:text-[56px] lg:leading-[68px] uppercase">Segment
            </h2>

            <div class="mt-[16px] flex flex-col justify-end text-start items-end h-[90%] font-kohinoor">
                <p class="font-bold text-[16px] leading-[150%] lg:text-[18px] lg:leading-[150%]">
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

        <div class="h-full lg:w-1/2">
            <div class="flex flex-row text-left h-full">
                <div class="w-[20px] h-auto bg-[#D31145]"></div>
                <div class="mt-[31px] lg:mt-[95px]">
                    <div class= "mx-[22px] flex justify-between items-center lg:mx-[67px]">
                        <span
                            class="text-[24px] text-ah-medium-dark-grey font-intro font-black leading-[146.54%] lg:text-[56px] lg:leading-[41.2px] uppercase">Dairy</span>
                        <a href="">
                            <span class="lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="24" viewBox="0 0 37 24"
                                    fill="none">
                                    <path d="M7 12L32 12" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M25 5L32 12L25 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class=" hidden lg:block">
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
                    <div class="lg:mt-[41px]">
                        <img src="{{ asset('images/Mobile/Home/Dairy_2x.png') }}"
                            class="lg:hidden g:hidden w-max-[323px] w-full max-h-[255px] h-auto" alt="">
                        <img src="{{ asset('images/Desk/Home/Diary_2x.png') }}"
                            class="hidden lg:block max-w-[642px] w-full h-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END SEGMENT SECTION --}}
    {{-- ABOUT  SECTION--}}
    <div class="flex flex-col lg:flex-row-reverse w-full text-ah-medium-dark-grey bg-ah-lightest-grey">
        <div class="lg:w-1/2">
            <h2 class="text-[48px] font-intro font-black leading-[100%] uppercase px-[20px] lg:px-[82px] mt-[30px] lg:mt-[91.5px]">About us</h2>
            <div
                class="flex flex-col justify-end text-start items-end mt-[30px] lg:mt-[110px] px-[20px] lg:pl-[82px] lg:pr-[160px] font-kohinoor text-[16px] leading-[150%] pb-[40px]">
                <p>
                    At Arm & Hammer™, we are dedicated to advancing animal nutrition through cutting-edge research and innovation.
                </p>
                <br class="lg:hidden">
                <p>
                    Our mission is to harness the power of science to develop solutions that enhance animal health, nutrition, and productivity.
                </p>
                <br>
                <p>
                    With a deep commitment to sustainability and global impact, we integrate proven technologies to address agricultural challenges and drive positive change in animal production worldwide.
                </p>
                <br class="lg:hidden">
                <p>
                    As your trusted partner, we are dedicated to providing continuous solutions to increase the efficiency and profitability of your business.
                </p>
            </div>
        </div>
        <div class="text-left lg:w-1/2">
            <img src="{{ asset('images/Mobile/Home/About_us_2x.png') }}" class="lg:hidden max-h-[305px] h-auto w-full" alt="">
            <img src="{{ asset('images/Desk/Home/About_us_2x.png') }}" class="hidden lg:block w-full max-h-[700px] h-auto" alt="">
        </div>
    </div>
    {{-- END ABOUT SECTION --}}

    <x-form-contact></x-form-contact>
@endsection
