<footer
    id="mainFooter"
    class="w-full h-auto py-[80px] bg-ah-blue text-white lg:pt-[90px] lg:pb-[125px]"
>
    <div class="ah-container mb-[55px] lg:flex lg:justify-start lg:items-start lg:content-start lg:mb-0">
        <div class="mb-[55px] lg:flex-[0_1_50%] lg:mb-0 lg:pr-[20px] xl:pr-[35px] 2xl:pr-[55px] 3xl:pr-[84px]">
            <div class="lg:mb-[30px]">
                <a
                    href="{{ route('home') }}"
                    class="inline-flex flex-nowrap justify-start items-center content-center gap-[5px]
                           no-underline scale-100 transition-transform duration-500 will-change-transform hover:scale-105"
                >
                    <div class="flex-initial max-w-[133px] md:max-w-[144px]">
                        <img
                            src="{{asset('images/general/Logo.svg')}}"
                            class="w-full h-auto"
                            width="133"
                            height="144"
                            alt=""
                        />
                    </div>
                    <div
                        class="flex-auto max-w-[235px] font-intro font-black text-[28px] leading-[1.21] tracking-[-0.01em] uppercase
                               md:max-w-[325px] md:text-[38px]"
                    >Arm & Hammer Animal Nutrition</div>
                </a>
            </div>
            <ul class="hidden m-0 list-none font-light text-[12px] leading-none lg:block">
                <li class="mb-[20px]">
                    <a
                        href="https://churchdwight.com/"
                        class="ah-text-link"
                        target="_blank"
                    >Arm & Hammer Animal Nutrition ©2024 Church & Dwight Co., Inc</a>
                </li>
                <li class="mb-[20px]">
                    <button
                        class="ah-text-link optanon-toggle-display"
                    >Cookie Management</button>
                </li>
                <li>
                    <a
                        href="https://churchdwight.com/privacy-policy.aspx"
                        class="ah-text-link"
                        target="_blank"
                    >Privacy Policy</a>
                </li>
            </ul>
        </div>
        <div class="flex flex-nowrap justify-start items-stretch gap-x-[15px] lg:flex-[0_1_50%] lg:pl-[20px] xl:pl-[35px] 2xl:pl-[55px] 3xl:pl-[84px]">
            <div class="flex-[0_1_50%]">
                <h4 class="mb-[20px] font-semibold text-[12px] leading-[1.42] tracking-[0.08em] uppercase underline decoration-1 underline-offset-1">Sitemap</h4>
                <ul class="m-0 list-none font-semibold text-[12px] leading-[1.42] tracking-[0.08em] uppercase">
                    <li class="mb-[20px]">
                        <a
                            href="{{ route('home') }}"
                            class="ah-text-link"
                        >Home</a>
                    </li>
                    <li class="mb-[20px]">
                        <a
                            href="{{ route('products') }}"
                            class="ah-text-link"
                        >Dairy Products</a>
                    </li>
                    <li class="mb-[20px]">
                        <a
                            href="{{ route('distributors') }}"
                            class="ah-text-link"
                        >Distributors</a>
                    </li>
                    <li>
                        <a
                            href="{{ route('representatives') }}"
                            class="ah-text-link"
                        >Sales Representatives</a>
                    </li>
                </ul>
            </div>
            <div class="flex-[0_1_50%]">
                <h4 class="mb-[55px] font-semibold text-[12px] leading-[1.42] tracking-[0.08em] uppercase underline decoration-1 underline-offset-1">Social Media</h4>
                <ul class="flex flex-wrap justify-start content-center items-center gap-[20px] m-0 list-none leading-none">
                    <li>
                        <a
                            href="https://www.youtube.com/c/armandhammeranimalandfoodproduction"
                            class="inline-flex justify-center content-center items-center min-w-[36px]
                                transition-opacity duration-300 ease-in-out hover:opacity-65"
                            target="_blank"
                        ><img
                            src="{{asset('images/general/Youtube.svg')}}"
                            width="24"
                            height="18"
                            alt="YouTube"
                        /></a>
                    </li>
                    <li>
                        <a
                            href="https://www.facebook.com/ArmAndHammerAnimalAndFoodProduction/"
                            class="inline-flex justify-center content-center items-center min-w-[36px]
                                transition-opacity duration-300 ease-in-out hover:opacity-65"
                            target="_blank"
                        ><img
                            src="{{asset('images/general/Facebook.svg')}}"
                            width="15"
                            height="24"
                            alt="Facebook"
                        /></a>
                    </li>
                    <li>
                        <a
                            href="https://www.linkedin.com/company/armandhammeranimalandfoodproduction/"
                            class="inline-flex justify-center content-center items-center min-w-[36px]
                                transition-opacity duration-300 ease-in-out hover:opacity-65"
                            target="_blank"
                        ><img
                            src="{{asset('images/general/Linkedin.svg')}}"
                            width="24"
                            height="24"
                            alt="LinkedIn"
                        /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ah-container lg:hidden">
        <ul class="max-w-[180px] m-0 list-none font-light text-[12px] leading-none md:max-w-full">
            <li class="mb-[20px]">
                <a
                    href="https://churchdwight.com/"
                    class="ah-text-link"
                    target="_blank"
                >Arm & Hammer Animal Nutrition ©2024 Church & Dwight Co., Inc</a>
            </li>
            <li class="mb-[20px]">
                <button
                    class="ah-text-link optanon-toggle-display"
                >Cookie Management</button>
            </li>
            <li>
                <a
                    href="https://churchdwight.com/privacy-policy.aspx"
                    class="ah-text-link"
                    target="_blank"
                >Privacy Policy</a>
            </li>
        </ul>
    </div>
</footer>
