<div class="flex flex-col lg:flex-row lg:max-h-[700px]">
    <div
        class="py-[70px] pl-[20px] pr-[20px] lg:pl-[160px] lg:pr-[82px] lg:py-[157px] items-center; gap-[10px] self-stretch bg-ah-red lg:w-1/2">
        <h2 class="text-white text-[48px] font-intro font-black leading-[25px]">
            Get in touch <br>
            <!--span class="text-[18px]">(Only USA)</span-->
        </h2>
        <div class="mt-[25px]">
            <form class="space-y-14"  method="post" action="" id="frmGetInTouch">
                @csrf
                <datalist id="options"></datalist>
                <div class="">
                    <label for="distributor"
                        class="text-white flex items-center justify-start text-center text-[24px] font-medium leading-[41.2px]">
                        <div class="w-[20px] h-[20px] bg-ah-light-blue flex-shrink-0 mr-[16px]"></div>
                        Distributor
                    </label>
                    <div class="flex items-center relative mt-[15px]">
                        <input type="text" list="options" placeholder="State"
                            class="h-[72px] rounded bg-ah-red border placeholder:text-[18px] placeholder-white border-ah-lighter-grey text-white text-[18px]rounded-lg block w-full p-2.5 focus:bg-white focus:text-ah-darkest-grey focus:border-ah-darkest-grey focus:placeholder-ah-darkest-grey"
                           id="distributor"/>
                        <button type="button" class="cursor-pointer text-white w-[24px] h-auto absolute right-[25px]" id="btnDistributor">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 10.8873 15.2531 12.6002 14.0388 13.8591C14.0056 13.8848 13.9737 13.9129 13.9433 13.9433C13.9129 13.9737 13.8848 14.0056 13.8591 14.0388C12.6002 15.2531 10.8873 16 9 16C5.13401 16 2 12.866 2 9ZM14.6177 16.0319C13.078 17.2635 11.125 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 11.125 17.2635 13.078 16.0319 14.6177L19.7075 18.2933C20.098 18.6838 20.098 19.317 19.7075 19.7075C19.317 20.098 18.6838 20.098 18.2933 19.7075L14.6177 16.0319Z" fill="currentColor"/>
                                </svg>
                        </button>
                    </div>
                </div>

                {{-- start salesRepresentative --}}
                <div class="">
                    <label for="salesRepresentative"
                    class="text-white flex items-center justify-start text-center text-[24px] font-medium leading-[41.2px]">
                    <div class="w-[20px] h-[20px] bg-ah-darkest-grey flex-shrink-0 mr-[16px] rounded-full mt-[9px]"></div>
                        Sales Representative
                    </label>
                    <div class="flex items-center relative mt-[15px]">
                        <input list="options" type="text" placeholder="State"
                            class="h-[72px] rounded bg-ah-red border placeholder:text-[18px] placeholder-white border-ah-lighter-grey text-white text-[18px]rounded-lg block w-full p-2.5 focus:bg-white focus:text-ah-darkest-grey focus:border-ah-darkest-grey focus:placeholder-ah-darkest-grey"
                            id="salesRepresentative"/>
                            <button type="button" class="cursor-pointer text-white w-[24px] h-auto absolute right-[25px]" id="btnSalesRepresentative">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 10.8873 15.2531 12.6002 14.0388 13.8591C14.0056 13.8848 13.9737 13.9129 13.9433 13.9433C13.9129 13.9737 13.8848 14.0056 13.8591 14.0388C12.6002 15.2531 10.8873 16 9 16C5.13401 16 2 12.866 2 9ZM14.6177 16.0319C13.078 17.2635 11.125 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 11.125 17.2635 13.078 16.0319 14.6177L19.7075 18.2933C20.098 18.6838 20.098 19.317 19.7075 19.7075C19.317 20.098 18.6838 20.098 18.2933 19.7075L14.6177 16.0319Z" fill="currentColor"/>
                                </svg>
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
    const distributorInput = document.getElementById("distributor");
    const salesRepresentativeInput = document.getElementById("salesRepresentative");

    const sendData =(action,state)=>{
        const form = document.getElementById("frmGetInTouch");
        document.getElementById("state").value = state;
        form.action = action
        form.submit();
    };

    btnRepresentative.addEventListener('click',function(){
       let state= salesRepresentativeInput.value;
        sendData("{{route('representatives')}}",state);
    });


    btnDistributor.addEventListener('click',function(){
        let state= distributorInput.value;
        sendData( "{{route('distributors')}}",state);
    });



    salesRepresentativeInput.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' && salesRepresentativeInput.value != "") {
        let state= salesRepresentativeInput.value;
        sendData( "{{route('representatives')}}",state);
      }
    });

    distributorInput.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' && distributorInput.value != "") {
        let state= distributorInput.value;
        sendData( "{{route('distributors')}}",state);
      }
    });

</script>
@if (isset($states))
 <script>
    const data = JSON.parse({!! json_encode($states) !!})

    // Seleccionamos el datalist y el input
    const datalist = document.getElementById('options');
    const distributor = document.getElementById("distributor");
    const representative = document.getElementById("salesRepresentative");

    function loadOptions(value) {
        // Limpiar las opciones actuales
        datalist.innerHTML = '';

        // Filtrar las opciones en base al valor ingresado
        const filteredData = data.filter(item => item.name.toLowerCase().includes(value.toLowerCase()));

        // Crear y añadir las opciones filtradas
        filteredData.forEach(item => {
            const option = document.createElement('option');
            option.value = item.name;
            datalist.appendChild(option);
        });
    }

    // Evento que escucha cuando el usuario escribe en el input
    distributor.addEventListener('input', (e) => {
        const searchWord = e.target.value;
        if (searchWord && searchWord.length >=2) {
            loadOptions(searchWord);
        } else {
            datalist.innerHTML = '';
        }
    });

    representative.addEventListener('input', (e) => {
        const searchWord = e.target.value;
        if (searchWord && searchWord.length >=2) {
            loadOptions(searchWord);
        } else {
            datalist.innerHTML = '';
        }
    });
</script>

@endif
