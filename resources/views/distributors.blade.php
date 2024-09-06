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
                    id="distributor-found-state"
                    class="m-0 font-bold text-[36px] leading-[1.2] text-center text-ah-medium-dark-grey xl:text-[46px]"
                >United States</h2>
            </div>
            <div class="flex-auto basis-full lg:flex-initial">
                <p
                    class="m-0 text-[16px] leading-[1.5] text-center text-ah-medium-dark-grey xl:text-[18px] mt-[0.25em]"
                >Distributors near <span id="distributor-requested-state" class="uppercase">"United States"</span></p>
            </div>
        </div>
    </div>
    <div>
        <div
            id="distributors-list"
            class="contact-cards-list flex flex-wrap justify-center content-stretch items-stretch"
        >
            @for ($i = 0; $i < 6; $i++)
                <div
                    class="flex-auto flex flex-col justify-center items-start w-auto h-auto py-[55px] px-[30px] relative
                           sm:items-center sm:grow-0 sm:basis-1/2 lg:basis-1/3 xl:py-[70px] xl:px-[50px]
                           2xl:py-[90px] 2xl:px-[75px] 3xl:py-[8%] 3xl:px-[5%] 6xl:basis-1/4"
                >
                    <x-contact-card
                        company="Consumer Supply Distributing"
                        name="Customer Service"
                        phone="800-383-6927"
                        phone-link="+18003836927"
                        email="dan.patee@Consumer-Supply.com"
                        url="www.webpage.com"
                    />
                    <div class="block w-full h-px absolute bottom-0 left-0 bg-ah-lighter-grey-2"></div>
                    <div class="hidden w-px h-full absolute top-0 left-0 bg-ah-lighter-grey-2 sm:block"></div>
                </div>
            @endfor
        </div>
    </div>
</section>
@endsection
