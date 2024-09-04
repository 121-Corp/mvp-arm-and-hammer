<style>
    #mainHeader {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
    }

    #desktopMenu > div:nth-child(1),
    #desktopMenu > div:nth-child(2) {
        position: relative;
    }

    #desktopMenu > div:nth-child(1):after,
    #desktopMenu > div:nth-child(2):after {
        content: "";
        display: block;
        width: 1px;
        height: 30px;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: #dadada;
    }
</style>
<header
    id="mainHeader"
    class="flex justify-start items-center w-full relative z-[99] bg-ah-lightest-grey md:bg-white"
>
    <div class="w-full max-w-[1440px] px-[15px] md:px-[20px] lg:px-[40px] xl:px-[70px] 2xl:px-[110px] 3xl:px-[165px]">
        <nav
            class="navbar flex justify-between items-stretch w-full h-auto mx-auto my-[8px] rounded-[50px] bg-white text-ah-darkest-grey
                   md:rounded-[0px] md:my-0">
            <div class="flex flex-col justify-center h-auto w-[70px] relative md:w-[125px]">
                <img
                    class="h-auto cursor-pointer md:absolute md:bottom-0 md:translate-y-1/2"
                    src="{{ asset('images/general/Logo.svg') }}"
                    onclick="goHome();"
                    alt="logo"
                />
            </div>
            <div class="flex flex-col justify-stretch items-stretch h-auto md:w-[calc(100%-125px)]">
                <div
                    id="desktopMenu"
                    class="hidden w-full h-full items-center justify-between text-ah-darkest-grey md:flex"
                >
                    <div class="w-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            class="font-kohinoor font-semibold text-[14px] leading-none uppercase no-underline"
                            href="{{ route('home') }}"
                        >Home</a>
                    </div>
                    <div class="w-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            class="font-kohinoor font-semibold text-[14px] leading-none uppercase no-underline"
                            href="#"
                        >Dairy</a>
                    </div>
                    <div class="w-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            class="font-kohinoor font-semibold text-[14px] leading-none uppercase no-underline"
                            href="#"
                        >Contact</a>
                    </div>
                    <div class="text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            href="#"
                            class="inline-flex justify-center items-center my-[20px] pt-[15px] pb-[19px] px-[20px]
                                   font-kohinoor font-medium text-[14px] leading-none text-center no-underline
                                   text-white bg-ah-blue border
                                   hover:bg-white hover:border-ah-blue hover:text-ah-blue"
                        >Find a Distributor</a>
                    </div>
                </div>
                <div class="flex justify-end items-center h-full mr-[20px] md:hidden">
                    <button
                        id="mobileMenuButton"
                        class="inline-flex items-center justify-center p-[10px]"
                    >
                        <img
                            src="{{ asset('images/general/menu_x2.png') }}"
                            class="h-auto w-[30px]"
                            alt="menu"
                        >
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div
                id="mobileMenu"
                class="hidden flex-col flex-nowrap justify-start items-center w-screen h-screen fixed top-0 left-0 z-[100] bg-white md:hidden"
            >
                <div class="flex flex-col items-center justify-center space-y-[90px] pt-[90px] text-center text-ah-darkest-grey">
                    <div class="flex justify-center w-[27.5px] h-[27.5px] text-center">
                        <button
                            id="mobileMenuButton"
                            class="inline-flex items-center justify-center p-[10px]"
                            onclick="closeMenu()"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M10.0273 10.2773L29.4728 29.7228" stroke="#4C73B1" stroke-width="2" stroke-linecap="round" />
                                <path d="M10.0273 29.7227L29.4728 10.2772" stroke="#4C73B1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                    <a class="text-xl font-kohinoor font-semibold p-0 md:p-4" href="{{ route('home') }}">Home</a>
                    <a class="text-xl font-kohinoor font-semibold p-0 md:p-4" href="#">Dairy</a>
                    <a class="text-xl font-kohinoor font-semibold p-0 md:p-4" href="#">Contact</a>
                    <div class="md:m-4">
                        <a
                            href="#"
                            class="inline-flex justify-center items-center m-0 pt-5 pb-6 px-12
                                   font-kohinoor font-medium text-xl leading-none text-center no-underline
                                   text-white bg-ah-blue border
                                   hover:bg-white hover:border-ah-blue hover:text-ah-blue"
                        >Find a Distributor</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
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
