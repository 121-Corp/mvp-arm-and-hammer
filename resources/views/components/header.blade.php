<header
    @class([
        'flex flex-col justify-start items-stretch w-full h-[100vh] relative overflow-hidden text-white',
        'xl:h-[40vw]' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false))
    ])
>
    <div class="w-full h-full absolute">
        <img
            src="{{ asset($imgPathMovil) }}"
            class="w-full h-full absolute object-center object-cover lg:hidden"
            alt=""
        >
        <img
            src="{{ asset($imgPathDesktop) }}"
            class="hidden w-full h-full absolute object-center object-cover lg:block"
            alt=""
        >
    </div>
    <div
        @class([
            'flex flex-col justify-between items-stretch gap-y-[60px] ah-container h-full pt-[8vh] pb-[10vh] relative',
            'sm:pt-[5vh] sm:pb-[5vh] sm:justify-center',
            'sm:items-center sm:text-center sm:gap-y-[30px]' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false)),
            'sm:gap-y-[40px] lg:gap-y-[55px]' => (isset($isHome) and ($isHome === 'true' or $isHome === true)),
            '2xl:px-[90px]', '3xl:px-[90px]'
        ])
    >
        <div
            @class([
                'flex flex-col justify-between items-stretch w-full h-auto gap-y-[20px] max-w-[350px] sm:max-w-[480px] lg:gap-y-[10px]',
                'lg:max-w-[66%]' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false)),
                'lg:max-w-[70%]' => (isset($isHome) and ($isHome === 'true' or $isHome === true)),
            ])
        >
            @if(isset($title) and !empty($title))
                <h1
                    @class([
                        'm-0 font-intro font-black text-[42px] tracking-[-0.01em]',
                        'leading-[1.15] text-[48px] sm:text-[68px] lg:text-[96px] lg:leading-none' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false)),
                        'leading-none text-[42px] sm:text-[62px] lg:text-[90px]' => (isset($isHome) and ($isHome === 'true' or $isHome === true)),
                    ])
                >{{ $title }}</h1>
            @endif
            @if(isset($isHome) and ($isHome === 'true' or $isHome === true) and isset($subtitle) and !empty($subtitle))
                <p class="m-0 font-semibold text-[26px] leading-none tracking-[-0.01em] sm:text-[30px] lg:text-[36px]">{{ $subtitle }}</p>
            @endif
        </div>
        <div
            @class([
                'flex flex-col justify-between items-stretch h-auto gap-y-[25px] max-w-[350px] ',
                'sm:max-w-[480px] lg:max-w-[66%]' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false)),
                'sm:max-w-[400px] lg:max-w-[40%] xl:max-w-[35%]' => (isset($isHome) and ($isHome === 'true' or $isHome === true)),
            ])
        >
            @if((!isset($isHome) or ($isHome === 'false') or ($isHome === false)) and isset($subtitle) and !empty($subtitle))
                <p class="m-0 font-semibold text-[28px] leading-[1.2] tracking-[-0.01em] sm:text-[32px] lg:text-[36px]">{{ $subtitle }}</p>
            @endif
            @if(isset($phrase) and !empty($phrase))
                <p
                    @class([
                        'm-0 font-normal tracking-[-0.01em] text-shadow-default',
                        'leading-[1.2] text-[20px] sm:text-[24px] lg:text-[28px]' => (!isset($isHome) or ($isHome === 'false') or ($isHome === false)),
                        'leading-[1.17] text-[24px] sm:text-[26px] lg:text-[28px] lg:leading-[1.2]' => (isset($isHome) and ($isHome === 'true' or $isHome === true)),
                    ])
                >{{ $phrase }}</p>
            @endif
        </div>
    </div>
</header>
