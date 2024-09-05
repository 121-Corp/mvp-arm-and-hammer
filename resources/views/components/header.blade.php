<header
    @class([
        'flex flex-col justify-start items-stretch w-full h-[100vh] relative overflow-hidden text-white',
        'xl:h-[42vw]' => (!isset($headerType) or ($headerType != 'home'))
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
            'flex flex-col items-stretch  ah-container h-full pt-[8vh] pb-[10vh] relative',
            'sm:pt-[5vh] sm:pb-[5vh] sm:justify-center',
            'justify-between gap-y-[60px] pb-[10vh]' => (!isset($headerType) or (($headerType !== 'distributors') and ($headerType != 'representative'))),
            'justify-end gap-y-[20px] pb-[15vh]' => (isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representative'))),
            'sm:gap-y-[30px]' => (!isset($headerType) or ($headerType != 'home')),
            'sm:gap-y-[40px] lg:gap-y-[55px]' => (isset($headerType) and $headerType == 'home'),
            '2xl:px-[90px]', '3xl:px-[90px]'
        ])
    >
        <div
            @class([
                'flex flex-col justify-between items-stretch w-full h-auto gap-y-[20px] lg:gap-y-[10px]',
                'sm:items-center sm:text-center' => (!isset($headerType) or ($headerType != 'home')),
            ])
        >
            @if(isset($title) and !empty($title))
                <h1
                    @class([
                        'm-0 max-w-[350px] sm:max-w-[480px] font-intro font-black text-[42px] tracking-[-0.01em]',
                        'leading-none text-[42px] sm:text-[62px] lg:max-w-[70%] lg:text-[90px]' => (isset($headerType) and $headerType == 'home'),
                        'leading-none text-[44px] sm:text-[68px] lg:max-w-[100%] lg:text-[96px]' => (isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representative'))),
                        'leading-[1.15] text-[48px] sm:text-[68px] lg:max-w-[66%] lg:text-[96px] lg:leading-none' => (!isset($headerType) or ($headerType == 'default')),
                    ])
                >{{ $title }}</h1>
            @endif
            @if(isset($headerType) and $headerType == 'home' and isset($subtitle) and !empty($subtitle))
                <p
                    class="m-0 max-w-[350px] sm:max-w-[480px] font-semibold text-[26px] leading-none tracking-[-0.01em]
                           sm:text-[30px] lg:max-w-[70%] lg:text-[36px]"
                >{{ $subtitle }}</p>
            @endif
        </div>
        <div
            @class([
                'flex flex-col justify-between items-stretch h-auto',
                'gap-y-[40px] sm:gap-y-[45px] lg:gap-y-[55px]' => (isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representative'))),
                'gap-y-[25px]' => (!isset($headerType) or (($headerType !== 'distributors') and ($headerType != 'representative'))),
                'sm:items-center sm:text-center' => (!isset($headerType) or ($headerType != 'home')),
            ])
        >
            @if((!isset($headerType) or ($headerType != 'home')) and isset($subtitle) and !empty($subtitle))
                <p
                    class="m-0 max-w-[350px] font-semibold text-[28px] leading-[1.2] tracking-[-0.01em]
                            sm:max-w-[400px] sm:text-[32px] lg:max-w-[40%] lg:text-[36px] xl:max-w-[35%]"
                >{{ $subtitle }}</p>
            @endif
            @if(isset($phrase) and !empty($phrase))
                <p
                    @class([
                        'm-0 tracking-[-0.01em]',
                        'max-w-[350px] leading-[1.17] text-[24px] text-shadow sm:max-w-[400px] sm:text-[26px] lg:max-w-[40%] lg:text-[28px] lg:leading-[1.2] xl:max-w-[35%]' => (isset($headerType) and $headerType == 'home'),
                        'max-w-[325px] leading-[1.2] text-[16px] sm:max-w-[480px] sm:text-[22px] sm:text-shadow-[0_4px_24px_#000000] lg:max-w-[650px] lg:text-[28px]' => (isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representative'))),
                        'max-w-[350px] leading-[1.2] text-[20px] text-shadow sm:max-w-[480px] sm:text-shadow-unset sm:text-[24px] lg:max-w-[66%] lg:text-[28px]' => (!isset($headerType) or ($headerType == 'default')),

                    ])
                >{{ $phrase }}</p>
            @endif
            @if(isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representative')))
                <div class="w-full">
                    <form
                        @if($headerType == 'distributors')
                            name="distributor-search"
                        @endif
                        @if($headerType == 'representative')
                            name="sales-representative-search"
                        @endif
                        action="/"
                        method="post"
                    >
                        <div class="w-full m-0 max-w-[350px] relative sm:mx-auto sm:max-w-[470px]">
                            <input
                                type="search"
                                name="state"
                                @class([
                                    'w-full m-0 pt-[18px] pb-[22px] pl-[30px] pr-[75px] relative font-light text-[18px] leading-[1.67] tracking-[-0.01em]',
                                    'border border-solid border-white text-white caret-white placeholder:text-white',
                                    'shadow-[0_0_24px_0_rgba(255,255,255,0)] transition-shadow duration-500',
                                    'focus-visible:outline-0 focus-visible:shadow-[0_0_24px_0_rgba(255,255,255,0.5)]',
                                    'sm:pl-[20px] sm:pr-[65px] sm:bg-white sm:text-black sm:caret-black sm:placeholder:text-black sm:font-medium',
                                    'bg-ah-red' => ($headerType == 'distributors'),
                                    'bg-ah-blue' => ($headerType == 'representative'),
                                ])
                                placeholder="State"
                                value=""
                                role="textbox"
                                contenteditable="true"
                                aria-label="State"
                                @if($headerType == 'distributors')
                                    aria-placeholder="Enter the name of the state where you want to find a distributor"
                                @endif
                                @if($headerType == 'representative')
                                    aria-placeholder="Enter the name of the state where you want to find a sales representative"
                                @endif
                            >
                            <button
                                type="submit"
                                class="inline-flex justify-center items-center w-[24px] h-[24px] absolute top-1/2 right-[30px] translate-y-[-50%] text-white
                                       transition-transform duration-500 will-change-transform hover:scale-105 sm:text-black"
                                value=""
                                role="button"
                                @if($headerType == 'distributors')
                                    aria-label="Find Distributor"
                                @endif
                                @if($headerType == 'representative')
                                    aria-label="Find Sales Representative"
                                @endif
                                >
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 10.8873 15.2531 12.6002 14.0388 13.8591C14.0056 13.8848 13.9737 13.9129 13.9433 13.9433C13.9129 13.9737 13.8848 14.0056 13.8591 14.0388C12.6002 15.2531 10.8873 16 9 16C5.13401 16 2 12.866 2 9ZM14.6177 16.0319C13.078 17.2635 11.125 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 11.125 17.2635 13.078 16.0319 14.6177L19.7075 18.2933C20.098 18.6838 20.098 19.317 19.7075 19.7075C19.317 20.098 18.6838 20.098 18.2933 19.7075L14.6177 16.0319Z" fill="currentColor"/>
                                    </svg>
                                </button>
                        </div>
                    </form>
                    <p class="mt-[12px] mb-0 mx-0 max-w-[350px] text-[16px] leading-[1.2] tracking-common sm:mx-auto sm:max-w-[480px] lg:max-w-[700px]">or Find a
                        @if($headerType == 'distributors')
                            <a href="{{ route('representative') }}" class="ah-text-link-underline">Sales Representative</a>
                        @endif
                        @if($headerType == 'representative')
                            <a href="{{ route('distributors') }}" class="ah-text-link-underline">Distributor</a>
                        @endif
                    </p>
                 </div>
            @endif
        </div>
    </div>
</header>
