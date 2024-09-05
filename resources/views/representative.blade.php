@extends('layouts.app')
@section('title')
<title>{{ config('app.name') ?? "A&H" }}</title>
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
<x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :$headerType />

<section aria-atomic="true">
    <div class="bg-ah-lightest-grey">
        <div
            class="ah-container flex flex-wrap justify-center items-center content-center pt-[32px] pb-[38px]
                   lg:justify-between xl:pt-[35px] xl:pb-[45px]"
        >
            <div class="flex-auto basis-full lg:flex-initial">
                <h2
                    id="sales-representative-found-state"
                    class="m-0 font-bold text-[36px] leading-[1.2] text-center text-ah-medium-dark-grey xl:text-[46px]"
                >United States</h2>
            </div>
            <div class="flex-auto basis-full lg:flex-initial">
                <p
                    class="m-0 text-[16px] leading-[1.5] text-center text-ah-medium-dark-grey xl:text-[18px] mt-[0.25em]"
                >Sales Representative near <span id="sales-representative-requested-state" class="uppercase">"United States"</span></p>
            </div>
        </div>
    </div>
    <div>
        <div id="sales-representatives-list" class="flex flex-wrap justify-center content-stretch items-stretch">
            <style>
                @media (min-width: 640px) {
                    #sales-representatives-list > div:nth-of-type(2n-1):last-child:before {
                        content: "";
                        display: block;
                        width: 1px;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        right: 0;
                        background-color: #efefef;
                    }
                }

                @media (min-width: 768px) {
                    #sales-representatives-list > div:nth-of-type(3n-1):last-child:before,
                    #sales-representatives-list > div:nth-of-type(3n-2):last-child:before {
                        content: "";
                        display: block;
                        width: 1px;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        right: 0;
                        background-color: #efefef;
                    }
                }

                @media (min-width: 1920px) {
                    #sales-representatives-list > div:nth-of-type(4n):before {
                        content: "";
                        display: block;
                        width: 1px;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        right: 0;
                        background-color: #efefef;
                    }

                    #sales-representatives-list > div:nth-of-type(4n-1):last-child:before,
                    #sales-representatives-list > div:nth-of-type(4n-2):last-child:before,
                    #sales-representatives-list > div:nth-of-type(4n-3):last-child:before {
                        content: "";
                        display: block;
                        width: 1px;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        right: 0;
                        background-color: #efefef;
                    }
                }
            </style>
            <div
                class="flex-auto flex flex-col justify-center items-start w-auto h-auto py-[55px] px-[30px] relative
                           sm:items-center sm:grow-0 sm:basis-1/2 lg:basis-1/3 xl:py-[70px] xl:px-[50px]
                           2xl:py-[90px] 2xl:px-[75px] 3xl:py-[8%] 3xl:px-[5%] 6xl:basis-1/4"
            >
                <x-contact-card
                    company="Mark Herrman"
                    name="Eastern Region Manager"
                    phone="(608) 212-6553"
                    phone-link="+16082126553"
                    email="mark.Herrman@churchdwight.com"
                />
                <div class="block w-full h-px absolute bottom-0 left-0 bg-ah-lighter-grey-2"></div>
                <div class="hidden w-px h-full absolute top-0 left-0 bg-ah-lighter-grey-2 sm:block"></div>
            </div>
            <div
                class="flex-auto flex flex-col justify-center items-start w-auto h-auto py-[55px] px-[30px] relative
                           sm:items-center sm:grow-0 sm:basis-1/2 lg:basis-1/3 xl:py-[70px] xl:px-[50px]
                           2xl:py-[90px] 2xl:px-[75px] 3xl:py-[8%] 3xl:px-[5%] 6xl:basis-1/4"
            >
                <x-contact-card
                    company="Shawna Martinho"
                    name="Western Region Manager"
                    phone="(559) 960-0654"
                    phone-link="+15599600654"
                    email="shawna.Martinho@churchdwight.com"
                />
                <div class="block w-full h-px absolute bottom-0 left-0 bg-ah-lighter-grey-2"></div>
                <div class="hidden w-px h-full absolute top-0 left-0 bg-ah-lighter-grey-2 sm:block"></div>
            </div>
        </div>
    </div>
</section>
@endsection
