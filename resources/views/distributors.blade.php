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
            <div class="flex-auto basis-full px-[15px] sm:px-0 sm:text-center lg:flex-initial">
                <h2
                    id="distributor-found-state"
                    class="m-0 font-bold text-[36px] leading-[1.2] text-ah-medium-dark-grey xl:text-[46px]"
                >{{ $stateTitle }}</h2>
            </div>
            <div class="flex-auto basis-full px-[15px] sm:px-0 sm:text-center lg:flex-initial">
                <p
                    class="m-0 text-[16px] leading-[1.5] text-ah-medium-dark-grey xl:text-[18px] mt-[0.25em]"
                >Distributors near <span id="distributor-requested-state" class="uppercase">"{{ $searchWord }}"</span></p>
            </div>
        </div>
    </div>
    <div>
        <div
            id="distributors-list"
            class="contact-cards-list flex flex-wrap justify-start content-stretch items-stretch"
        >
            @if (!empty($distributors))
                @foreach($distributors as $contact)
                    <div
                        class="flex-auto flex flex-col justify-start items-start h-auto py-[55px] px-[30px] relative
                               sm:items-start sm:grow-0 sm:basis-1/2 sm:max-w-[50%] lg:basis-1/3 lg:max-w-[33.3333%]
                               xl:py-[70px] xl:px-[50px] 2xl:py-[90px] 2xl:px-[75px] 3xl:py-[8%] 3xl:px-[5%] 6xl:basis-1/4 6xl:max-w-[25%]"
                    >
                        <x-contact-card
                            :company="$contact->company"
                            :name="$contact->name"
                            :phone="$contact->phone"
                            :email="$contact->email"
                            :url="$contact->url"
                            type="distributor"
                        />
                        <div class="block w-full h-px absolute bottom-0 left-0 bg-ah-lighter-grey-2"></div>
                        <div class="hidden w-px h-full absolute top-0 left-0 bg-ah-lighter-grey-2 sm:block"></div>
                    </div>
                @endforeach

            @else
            <div class="w-full text-center py-10">
                <h2 class="m-0 font-bold text-[36px] leading-[1.2] text-ah-medium-dark-grey xl:text-[46px]">
                    Not finding a distributor in your area.
                </h2>
                <br>
                <a href="{{route('contact')}}" class="m-0 font-bold text-[30px] leading-[1.2] text-ah-medium-dark-grey xl:text-[40px] underline">Contact Us</a>
            </div>
            @endif
        </div>
    </div>
</section>

<script>
    const searchContact = document.getElementById("searchContact");
    searchContact.value = "{{$searchWord}}";
</script>
@endsection
