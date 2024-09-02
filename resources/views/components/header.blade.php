<style>
    #header {
        background-image: url({{ asset('images/home/header-desktop_x2.png') }});
    }

    @media only screen and (max-width: 431px) and (orientation: portrait) {
        #header {
            background-image: url({{ asset('images/home/header-movil_x2.png') }});
        }
    }
</style>
<header
    class="flex overflow-hidden items-center bg-center bg-no-repeat bg-cover bg-blend-normal text-start h-[100vh] w-full sm:absolute lg:relative" id="header">
    <div class="w-11/12 mx-auto lg:mx-[89px] h-full lg:w-8/12">
        <div class="text-left flex flex-col justify-around lg:justify-center items-start lg:items-center h-screen">
            <div class="w-full">
                <h1
                    class="text-[37px] tracking-common text-left leading-[120%] font-black text-white lg:text-[89px] lg:leading-[100%] lg:tracking-[-0.898px]">
                    @isset($title)
                        {{ $title }}
                    @endisset <br>
                </h1>
                <span
                    class="font-normal text-white text-[33px] lg:text-[35px] leading-[100%] tracking-common lg:tracking-[-0.358px] lg:font-bold pt-[11px]">
                    @isset($subtitle)
                        {!! $subtitle !!}
                    @endisset
                </span>
            </div>
            <div class="h-[100px]">
            </div>
            <div class="w-full">
                <div class="w-11/12 lg:w-5/12" id="phrase">
                    <p class="text-[20px] text-start leading-[120%] tracking-[-0.2px] text-white lg:text-3xl">
                        @isset($phrase)
                            {{ $phrase }}
                        @endisset
                    </p>
                </div>
                @isset($isHome)
                    <div class="w-[172px] h-[64px] text-center gap-[10px] py-[17px] px-[25px] bg-white mt-[20px]">
                        <a href="#" class="text-[#1E1E1E] text-[18px] font-semibold leading-[30px] text-center">
                            Learn More
                        </a>
                    </div>
                @endisset
            </div>
        </div>
    </div>
</header>
