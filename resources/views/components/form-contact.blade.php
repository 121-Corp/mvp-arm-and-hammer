<div class="flex flex-col lg:flex-row bg-green-100 lg:max-h-[700px]">
    <div
        class="py-[70px] pl-[20px] pr-[20px] lg:pl-[160px] lg:pr-[82px] lg:py-[157px] items-center; gap-[10px] self-stretch bg-ah-red lg:w-1/2">
        <h2 class="text-white text-[48px] font-intro font-black leading-[25px]">
            Get in touch <br class="hidden lg:block">
            <span class="text-[18px]">(Only USA)</span>
        </h2>
        <div class="mt-[25px]">
            <form action="" class="space-y-14">
                <div class="">
                    <label for="distributor"
                        class="text-white flex items-center justify-start text-center text-[24px] font-medium leading-[41.2px]">
                        <div class="w-[20px] h-[20px] bg-ah-light-blue flex-shrink-0 mr-[16px]"></div>
                        Distributor
                    </label>
                    <div class="flex items-center relative">
                        <input type="text" placeholder="State"
                            class="h-[72px] rounded mt-[15px] bg-ah-red border placeholder:text-[18px] placeholder-white border-ah-lighter-grey text-white text-[18px]rounded-lg block w-full p-2.5"
                            id="distributor" />
                        <button type="button" class="cursor-pointer">
                            <img src="{{ asset('images/general/Search.svg') }}"
                                class="w-[24px] h-auto absolute right-[25px] top-10 " alt="Search">
                        </button>
                    </div>
                </div>
                <div class="">
                    <label for="salesRepresentative"
                        class="text-white flex items-center justify-start text-center text-[24px] font-medium leading-[41.2px]">
                        <div class="w-[20px] h-[20px] bg-ah-darkest-grey flex-shrink-0 mr-[16px] rounded-full"></div>
                        Sales Representative
                    </label>
                    <div class="flex items-center relative">
                        <input type="text" placeholder="State"
                            class="h-[72px] rounded mt-[15px] bg-ah-red border placeholder:text-[18px] placeholder-white border-ah-lighter-grey text-white text-[18px]rounded-lg block w-full p-2.5"
                            id="salesRepresentative" />
                        <button type="button" class="cursor-pointer">
                            <img src="{{ asset('images/general/Search.svg') }}"
                                class="w-[24px] h-auto absolute right-[25px] top-10" alt="Search">
                        </button>
                    </div>
                </div>
            </form>
            <div class="mt-[55px] text-white text-[24px] leading-[41.2px] lg:hidden">
                <p class="font-medium">Food Production Products</p>
                <p class="font-normal">Call <span class="underline">515-334-8035</span></p>
            </div>
        </div>
    </div>
    <div class="lg:w-1/2">
        <img src="{{ asset('images/Mobile/Home/Get_in_touch_2x.png') }}"
            class="max-h-[548px] h-auto w-full block lg:hidden" alt="">
        <img src="{{ asset('images/Desk/Home/Get_in_Touch_2x.png') }}" class="h-full w-full lg:block hidden"
            alt="">
    </div>
</div>
