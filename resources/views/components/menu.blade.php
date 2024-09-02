<style>
    #mainMenu {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
    }
</style>
<div class="hidden bg-[#0000004a] h-screen w-full fixed z-[97] top-0 left-0" id="backgraound">
</div>
<div class="flex w-full right-0 top-0 left-0 bottom-0 mx-auto items-center xl:px-16 h-[100px] lg:h-[80px] z-[98] bg-[#F5F5F5] lg:bg-white" id="mainMenu">
    <nav
        class="navbar flex relative justify-between items-center w-11/12 lg:w-full top-0 right-0 rounded-[37px] md:rounded-[0px] md:mt-0 h-auto sm:h-full text-[#1E1E1E] bg-white m-auto z-[99]">
        <div class="m-2 sm:m-8 md:p-0 w-2/12 flex justify-end h-full relative">
            <img class="ml-5 h-auto cursor-pointer md:w-[124px] md:absolute md:top-5 md:right-0"
                src="{{ asset('images/general/logo_x2.png') }}" onclick="goHome();" alt="logo" />
        </div>
        <div class="mr-[20px] md:mr-[165px] md:w-10/12 h-full sm:contents">
            <div
                class="hidden h-full text-[#1E1E1E] sm:-my-px sm:ml-6 md:flex items-center sm:space-x-8 w-full justify-between">
                <div class="w-3/12 text-center">
                    <a class="p-0 no-underline text-base md:text-[14px] items-center leading-[1px] font-semibold uppercase"
                        href="{{ route('home') }}">Home</a>
                </div>
                <div class="w-3/12 text-center">
                    <a class="p-0 no-underline text-base md:text-[14px] items-center leading-[1px] font-semibold uppercase"
                        href="" target="_blank">Dairy</a>
                </div>
                <div class="w-3/12 text-center">
                    <a class="p-0 no-underline text-base md:text-[14px] items-center leading-[1px] font-semibold uppercase"
                        href="" target="_blank">Contact</a>
                </div>
                <div class="w-3/12 text-center">
                    <a href=""
                        class="h-[50px] inline-flex justify-center no-underline items-center m-0 py-[10px] px-[37px] text-[16px]
                                        leading-[30px] font-semibold text-center text-white bg-[#004C8D] border hover:bg-white
                                        hover:border-[#006E8F] hover:text-[#006E8F]">
                        Find a Distributor
                    </a>
                </div>
            </div>
            <div class="mr-2 flex items-center md:hidden">
                <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2">
                    <img src="{{ asset('images/general/menu_x2.png') }}" class="h-auto w-[30px]" alt="menu">
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu"
            class="hidden md:hidden flex-col flex-nowrap justify-start items-center fixed top-0 h-screen left-0 w-full bg-white z-[100]">
            <div class="space-y-[90px] pt-[93px] flex flex-col items-center justify-center text-[#1E1E1E] text-center">
                <div class="flex justify-center text-center w-[27.5px] h-[27.5px]">
                    <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2"
                        onclick="closeMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                            fill="none">
                            <path d="M10.0273 10.2773L29.4728 29.7228" stroke="#4C73B1" stroke-width="2"
                                stroke-linecap="round" />
                            <path d="M10.0273 29.7227L29.4728 10.2772" stroke="#4C73B1" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <a class="text-xl font-semibold p-0 md:p-4" href="{{ route('home') }}">Home</a>
                <a class="text-xl font-semibold p-0 md:p-4" href="">Dairy</a>
                <a class="text-xl font-semibold p-0 md:p-4" href="">Contact</a>
                <div class="md:m-4">
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

    const menuMoobile = document.getElementById('mobileMenu');

    function closeMenu() {
        if (!menuMoobile.classList.contains('hidden')) {
            menuMoobile.classList.add('hidden');
        }
    }

    // Toggle the mobile menu
    document.getElementById('mobileMenuButton').addEventListener('click', function(event) {
        menuMoobile.classList.toggle('hidden');
        menuMoobile.classList.add('flex');
        event.stopPropagation();
    });
</script>
