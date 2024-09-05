<style>
    #header {
        background-image: url({{ asset($imgPathDesktop) }});
    }

    #phrase p{
        text-shadow: 0px 4px 34px rgba(0, 0, 0, 0.25);
    }

    @media only screen and (max-width: 431px) and (orientation: portrait) {
        #header {
            background-image: url({{ asset($imgPathMovil) }});
        }
    }
</style>
<header class="h-[100vh] flex overflow-hidden items-center bg-top bg-no-repeat bg-cover bg-blend-normal text-start w-full sm:absolute lg:relative" id="header">
        <div class="h-[87vh] w-full lg:w-8/12 lg:mx-[89px] mx-[14px] text-left flex flex-col justify-between lg:justify-center my-[50px]">
            <div class="w-full lg:w-11/12">
                <h1 class="text-[41.76px] tracking-[-0.418px] text-left font-intro leading-[100%] font-black
                     text-white lg:text-[89.76px] lg:tracking-[-0.898px]">
                    @isset($title)
                        {{ $title }}
                    @endisset
                </h1>
                <br>
                <span
                    class="font-bold text-white text-[25.76px] font-kohinoor lg:text-[35px] leading-[100%] tracking-[-0.258px]
                         lg:tracking-[-0.358px]">
                    @isset($subtitle)
                        {{ $subtitle }}
                    @endisset
                </span>
            </div>
            <div class="w-full lg:w-4/12 lg:mt-[50px]" id="phrase">
                <p class="text-[24px] font-kohinoor font-medium text-start leading-[120%] tracking-[-0.24px] text-white">
                    @isset($phrase)
                        {{ $phrase }}
                    @endisset
                </p>
                @isset($isHome)
                    {{-- <div class="w-[172px] h-[64px] text-center gap-[10px] py-[17px] px-[25px] bg-white mt-[20px]">
                        <a href="#" class="text-[#1E1E1E] text-[18px] font-semibold leading-[30px] text-center">
                            Learn More
                        </a>
                    </div> --}}
                @endisset
            </div>
        </div>
</header>
