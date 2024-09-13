<div class="flex flex-col lg:flex-row lg:max-h-[700px]">
    <div
        class="py-[70px] pl-[20px] pr-[20px] lg:pl-[160px] lg:pr-[82px] lg:py-[157px] items-center; gap-[10px] self-stretch bg-ah-red lg:w-1/2">
        <h2 class="text-white text-[48px] font-intro font-black leading-[25px]">
            Get in touch <br>
            <span class="text-[18px]">(Only USA)</span>
        </h2>
        <div class="mt-[25px]">
            <form class="space-y-14"  method="post" action="" id="frmGetInTouch">
                @csrf
                <div class="">
                    <label for="distributor"
                        class="text-white flex items-center justify-start text-center text-[24px] font-medium leading-[41.2px]">
                        <div class="w-[20px] h-[20px] bg-ah-light-blue flex-shrink-0 mr-[16px]"></div>
                        Distributor
                    </label>
                    <div class="flex items-center relative">
                        <input type="textbox" placeholder="State"
                            class="h-[72px] rounded mt-[15px] bg-ah-red border placeholder:text-[18px] placeholder-white border-ah-lighter-grey text-white text-[18px]rounded-lg block w-full p-2.5"
                           id="distributor"/>
                        <button type="button" class="cursor-pointer text-white" id="btnDistributor">
                            <img src="{{ asset('images/general/Search.svg') }}"
                                class="w-[24px] h-auto absolute right-[25px] top-10 text-white" alt="Search">
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
                            id="salesRepresentative"/>
                        <button type="button" class="cursor-pointer" id="btnSalesRepresentative">
                            <img src="{{ asset('images/general/Search.svg') }}"
                                class="w-[24px] h-auto absolute right-[25px] top-10" alt="Search">
                        </button>
                    </div>
                </div>
                <input type="hidden" name="state" id="state" value="">
            </form>
        </div>
    </div>
    <div class="lg:w-1/2">
        <img src="{{ asset('images/Mobile/Home/Get_in_touch_2x.png') }}"
            class="max-h-[548px] h-auto w-full block lg:hidden" alt="">
        <img src="{{ asset('images/Desk/Home/Get_in_Touch_2x.png') }}" class="h-full w-full lg:block hidden object-center object-cover"
            alt="">
    </div>
</div>

<script>
    const btnRepresentative = document.getElementById("btnSalesRepresentative");
    const btnDistributor = document.getElementById("btnDistributor");

    const sendData =(action,state)=>{
        const form = document.getElementById("frmGetInTouch");
        document.getElementById("state").value = state;
        form.action = action
        form.submit();
    };

    btnRepresentative.addEventListener('click',function(){
       let state= document.getElementById("salesRepresentative").value;
        sendData("{{route('representatives')}}",state);
    });
    btnDistributor.addEventListener('click',function(){
        let state= document.getElementById("distributor").value;
        sendData( "{{route('distributors')}}",state);
    });
</script>
