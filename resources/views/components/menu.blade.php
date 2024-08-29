<style>
    #mainMenu {
               box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
           }
</style>
<div class="hidden bg-[#0000004a] h-screen w-full fixed z-[1] top-0 left-0" id="backgraound">
</div>
<div class="flex w-11/12 lg:w-full fixed right-0 top-0 left-0 bottom-0 mx-auto items-center xl:px-16 h-[74px] lg:h-[80px] z-[10] rounded-[37px] lg:rounded-[0px]" id="mainMenu">
   <nav class="navbar flex absolute justify-between items-center w-full top-0 right-0 rounded-[37px] lg:rounded-[0px] lg:mt-0 lg:h-full text-[#1E1E1E]">
       <div class="m-2 md:m-8 lg:p-0 w-2/12 flex justify-end h-full relative">
           <img class="ml-5 h-auto cursor-pointer lg:w-[124px] lg:absolute lg:top-5 lg:right-0" src="{{ asset('images/general/logo_x2.png') }}"
               onclick="goHome();"  alt="logo"/>
       </div>
       <div class="mr-[20px] lg:mr-[165px] lg:w-10/12 h-full">
           {{-- <div class="flex justify-between lg:items-center"> --}}
               {{-- <div class="hidden lg:flex text-[#1E1E1E] lg:items-center font-semibold w-full"> --}}
                   <div class="hidden h-full text-[#1E1E1E] sm:-my-px sm:ml-6 sm:flex items-center sm:space-x-8 w-full justify-between">
                        <div class="w-3/12 text-center">
                            <a class="p-0 no-underline text-base lg:text-[14px] items-center leading-[1px] font-semibold uppercase" href="{{route('home')}}">Home</a>
                        </div>
                        <div class="w-3/12 text-center">
                            <a class="p-0 no-underline text-base lg:text-[14px] items-center leading-[1px] font-semibold uppercase" href="" target="_blank">Dairy</a>
                        </div>
                        <div class="w-3/12 text-center">
                            <a class="p-0 no-underline text-base lg:text-[14px] items-center leading-[1px] font-semibold uppercase" href="" target="_blank">Contact</a>
                        </div>
                        <div class="w-3/12 text-center">
                            <a href=""
                                class="h-[50px] inline-flex justify-center font-sans
                                            no-underline items-center m-0 py-[10px] px-[37px] text-[16px] leading-[30px] font-semibold text-center
                                            text-white bg-[#004C8D] border hover:bg-white hover:border-[#006E8F] hover:text-[#006E8F]">
                                            Find a Distributor
                            </a>
                        </div>
                   </div>
               {{-- </div> --}}
               <div class="-mr-2 flex items-center lg:hidden">
                   <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2">
                       <img src="{{ asset('images/general/menu_x2.png') }}" class="h-auto w-[30px]" alt="menu">
                   </button>
               </div>
           {{-- </div> --}}
       </div>
       <!-- Mobile Menu -->
       <div id="mobileMenu"
           class="hidden md:hidden flex-col flex-nowrap justify-start items-center absolute top-0 h-screen left-0 w-full bg-white rounded-[30px] z-[-1]">
           <div class="space-y-[90px] pt-[80px] flex flex-col items-center justify-center text-[#1E1E1E] text-center">
               <a class="text-xl font-semibold p-0 lg:p-4" href="{{route('home')}}">Home</a>
               <a class="text-xl font-semibold p-0 lg:p-4" href="">Dairy</a>
               <a class="text-xl font-semibold p-0 lg:p-4" href="">Contact</a>
               <div class="lg:m-4">
                   <a href=""
                       class="h-[50px] inline-flex justify-center font-sans
                                          no-underline items-center m-0 py-[10px] px-[37px] text-[16px] leading-[30px] font-semibold text-center
                                          text-white bg-[#004C8D] border hover:bg-white hover:border-[#006E8F] hover:text-[#006E8F]">
                               Find a Distributor
                   </a>
               </div>
           </div>
       </div>
   </nav>
</div>
<script>
   const goHome = function() {
       window.location.href = "{{ route('home') }}";
   }

//    const menu = document.getElementById('ourMenu');
   const menuMoobile = document.getElementById('mobileMenu');
   const background = document.getElementById('backgraound');

   backgraound.addEventListener('touchstart', (e) => {
       closeMenu();
   });

   document.body.addEventListener('click', function(event) {
       closeMenu();
   });

   function closeMenu() {
       if(!menuMoobile.classList.contains('hidden') || !menu.classList.contains('hidden') ){
        //    menu.classList.add('hidden');
           menuMoobile.classList.add('hidden');
           background.classList.add('hidden');
        //    menu.classList.toggle('flex');
        //    menu.classList.toggle('flex-col');
        //    menu.classList.toggle('justify-end');

       }
   }

   // Toggle the mobile menu
   document.getElementById('mobileMenuButton').addEventListener('click', function(event) {
       background.classList.toggle('hidden');
       menuMoobile.classList.toggle('hidden');
       menuMoobile.classList.add('flex');
       event.stopPropagation();
   });
</script>
