<header
    @class([
        'flex flex-col justify-start items-stretch w-full h-[100vh] relative overflow-hidden text-white',
        'xl:h-[42vw] max-h-[800px]' => (!isset($headerType) or ($headerType != 'home'))
    ])
>
    <div @class(['w-full h-full absolute'])>
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
            'flex flex-col items-stretch ah-container h-full pt-[8vh] relative',
            'sm:pt-[5%] sm:pb-[5%] sm:justify-center xl:justify-start',
            'justify-between gap-y-[60px] pb-[10vh]' => (
                !isset($headerType) or
                ( ($headerType !== 'distributors') and ($headerType != 'representatives') and ($headerType != 'contact') )
            ),
            'justify-end gap-y-[20px] pb-[15vh]' => (isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representatives'))),
            'justify-center gap-y-[20px] pb-[15vh]' => (isset($headerType) and ($headerType == 'contact')),
            'sm:gap-y-[30px] xl:pt-[10%] xl:pb-[3%]' => (!isset($headerType) or ($headerType != 'home')),
            // 'bg-white' => (!isset($headerType) or ($headerType == 'details')),
            'sm:gap-y-[40px] lg:gap-y-[55px] xl:justify-center xl:pt-[5vh] xl:pb-[5vh]' => (isset($headerType) and $headerType == 'home'),
            '2xl:px-[90px]', '3xl:px-[90px]'
        ])
    >
        <div
            @class([
                'flex flex-col justify-between items-stretch w-full h-auto gap-y-[20px] lg:gap-y-[10px]',
                'sm:items-center sm:text-center' => (!isset($headerType) or ($headerType != 'home')),
            ])
        >

            @if (isset($product) && $headerType == 'details')
                <img src="{{asset( $product['logo_image_link'] )}}" class=" lg:max-w-[560px] max-h-[180px] lg:w-full lg:h-full" alt="">
             <div class="text-ah-medium-dark-grey">
                <h3 class="text-[25.76px] lg:text-[28px] font-semibold lg:font-medium leading-[120%] tracking-[-0.16px] lg:tracking-[-0.28px]">Prepare the immune system.</h3>
                <p>
                    With CELMANAX your cows get the benefits of multiple feed additives in one consistently high-quality formula.
                </p>
             </div>
            @endif

            @if(isset($title) and !empty($title))
                <h1
                    @class([
                        'm-0 font-intro font-black text-[42px] tracking-[-0.01em]',
                        'leading-none text-[42px] sm:text-[62px] lg:max-w-[70%] lg:text-[90px]' => (isset($headerType) and $headerType == 'home'),
                        'max-w-[350px] leading-none text-[44px] sm:max-w-[480px] sm:text-[68px] lg:max-w-[100%] lg:text-[96px]' => (
                            isset($headerType) and
                            ( ($headerType == 'distributors') or ($headerType == 'representatives') )
                        ),
                        'max-w-[250px] leading-none text-[44px] sm:max-w-[400px] sm:text-[68px] lg:max-w-[100%] lg:text-[96px]' => (
                            isset($headerType) and ($headerType == 'contact')
                        ),
                        'max-w-[350px] leading-[1.15] text-[48px] sm:max-w-[480px] sm:text-[68px] lg:max-w-[100%] lg:text-[96px] lg:leading-none' => (
                            !isset($headerType) or ($headerType == 'default')
                        ),
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
                'gap-y-[40px] sm:gap-y-[45px] lg:gap-y-[55px]' => (
                    isset($headerType) and
                    ( ($headerType == 'distributors') or ($headerType == 'representatives') )
                ),
                'gap-y-[25px]' => (!isset($headerType) or (($headerType !== 'distributors') and ($headerType != 'representatives'))),
                'sm:items-center sm:text-center' => (!isset($headerType) or ($headerType != 'home')),
            ])
        >
            @if((!isset($headerType) or ($headerType != 'home')) and isset($subtitle) and !empty($subtitle))
                <p
                    class="m-0 max-w-[350px] font-semibold text-[28px] leading-[1.2] tracking-[-0.01em]
                            sm:max-w-[400px] sm:text-[32px] lg:max-w-[65%] lg:text-[36px]"
                >{{ $subtitle }}</p>
            @endif
            @if(isset($phrase) and !empty($phrase))
                <p
                    @class([
                        'm-0 tracking-[-0.01em]',
                        'max-w-[350px] leading-[1.17] text-[24px] text-shadow sm:max-w-[400px] sm:text-[26px] lg:max-w-[40%] lg:text-[28px] lg:leading-[1.2] xl:max-w-[35%]' => (
                            isset($headerType) and $headerType == 'home'
                        ),
                        'max-w-[325px] leading-[1.2] text-[16px] sm:max-w-[480px] sm:text-[22px] sm:text-shadow-[0_4px_24px_#000000] lg:max-w-[650px] lg:text-[28px]' => (
                            isset($headerType) and
                            ( ($headerType == 'distributors') or ($headerType == 'representatives') )
                        ),
                        'max-w-[280px] leading-[1.2] text-[16px] sm:max-w-[400px] sm:text-[22px] lg:max-w-[500px] lg:text-[28px] xl:max-w-[800px]' => (
                            isset($headerType) and ($headerType == 'contact')
                        ),
                        'max-w-[350px] leading-[1.2] text-[20px] text-shadow sm:max-w-[480px] sm:text-shadow-unset sm:text-[24px] lg:max-w-[65%] lg:text-[28px]' => (
                            !isset($headerType) or ($headerType == 'default')
                        ),

                    ])
                >{{ $phrase }}</p>
            @endif
            @if(isset($headerType) and (($headerType == 'distributors') or ($headerType == 'representatives')))
                <div class="w-full">
                    <form
                        @if($headerType == 'distributors')
                            name="distributor-search"
                            action="{{ route('distributors') }}"
                        @endif
                        @if($headerType == 'representatives')
                            name="sales-representative-search"
                            action="{{ route('representatives') }}"
                        @endif
                        method="post"
                    >
                        @csrf
                        <div class="w-full m-0 max-w-[350px] relative sm:mx-auto sm:max-w-[470px]">
                            <input style="color:black;"
                                type="search"
                                name="state"
                                @class([
                                    'w-full m-0 pt-[18px] pb-[22px] pl-[30px] pr-[75px] relative font-light text-[18px] leading-[1.67] tracking-[-0.01em]',
                                    'border border-solid border-white text-white caret-white placeholder:text-white',
                                    'shadow-[0_0_24px_0_rgba(255,255,255,0)] transition-shadow duration-500',
                                    'focus-visible:outline-0 focus-visible:shadow-[0_0_24px_0_rgba(255,255,255,0.5)]',
                                    'pl-[20px] sm:pr-[65px] bg-white text-black caret-black placeholder:text-black font-medium',
                                    'bg-ah-red' => ($headerType == 'distributors'),
                                    'bg-ah-blue' => ($headerType == 'representatives'),
                                ])
                                placeholder="State"
                                value="{{ old('state', '') }}"
                                role="textbox"
                                contenteditable="true"
                                aria-label="State"
                                @if($headerType == 'distributors')
                                    aria-placeholder="Enter the name of the state where you want to find a distributor"
                                @endif
                                @if($headerType == 'representatives')
                                    aria-placeholder="Enter the name of the state where you want to find a sales representative"
                                @endif
                            >
                            <button
                                type="submit"
                                class="inline-flex justify-center items-center w-[24px] h-[24px] absolute top-1/2 right-[30px] translate-y-[-50%] text-white
                                       transition-transform duration-500 will-change-transform hover:scale-105 text-black"
                                value=""
                                role="button"
                                @if($headerType == 'distributors')
                                    aria-label="Find Distributor"
                                @endif
                                @if($headerType == 'representatives')
                                    aria-label="Find Sales Representative"
                                @endif
                                >
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 10.8873 15.2531 12.6002 14.0388 13.8591C14.0056 13.8848 13.9737 13.9129 13.9433 13.9433C13.9129 13.9737 13.8848 14.0056 13.8591 14.0388C12.6002 15.2531 10.8873 16 9 16C5.13401 16 2 12.866 2 9ZM14.6177 16.0319C13.078 17.2635 11.125 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 11.125 17.2635 13.078 16.0319 14.6177L19.7075 18.2933C20.098 18.6838 20.098 19.317 19.7075 19.7075C19.317 20.098 18.6838 20.098 18.2933 19.7075L14.6177 16.0319Z" fill="black"/>
                                    </svg>
                                </button>
                        </div>
                    </form>
                    <p class="mt-[12px] mb-0 mx-0 max-w-[350px] text-[16px] leading-[1.2] tracking-common sm:mx-auto sm:max-w-[480px] lg:max-w-[700px]">or Find a
                        @if($headerType == 'distributors')
                            <a href="{{ route('representatives') }}" class="ah-text-link-underline">Sales Representative</a>
                        @endif
                        @if($headerType == 'representatives')
                            <a href="{{ route('distributors') }}" class="ah-text-link-underline">Distributor</a>
                        @endif
                    </p>
                 </div>
            @endif
        </div>
        @if($headerType == 'details')
        <a href="#advantage" class="flex w-full h-[62px] lg:hidden items-center justify-center text-center bg-white absolute bottom-0 left-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="18" viewBox="0 0 32 18" fill="none">
                <path d="M1 1L16 17L31 1" stroke="black"/>
            </svg>
        </a>
        @endif
    </div>
</header>
