<header
    id="mainHeader"
    class="flex justify-start items-center w-full relative z-[99] bg-ah-lightest-grey md:bg-white"
>
    <div class="ah-container">
        <nav
            class="navbar flex justify-between items-stretch w-full h-auto mx-auto my-[8px] rounded-[50px] bg-white text-ah-darkest-grey
                   md:rounded-[0px] md:my-0" role="navigation">
            <div class="flex flex-col justify-center h-auto w-[70px] relative md:w-[125px]">
                <a
                    href="{{ route('home') }}"
                    class="inline-block h-auto leading-[0px] md:absolute md:bottom-0 md:translate-y-1/2"
                ><img
                    class="w-full h-auto"
                    src="{{ asset('images/general/Logo.svg') }}"
                    alt="logo"
                /></a>
            </div>
            <div class="flex flex-col justify-stretch items-stretch h-auto md:w-[calc(100%-125px)]">
                <ul
                    id="desktopMenu"
                    class="hidden w-full h-full m-0 list-none items-center justify-between
                           font-semibold text-[14px] leading-none uppercase text-ah-darkest-grey md:flex"
                >
                    <li class="basis-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            class="ah-text-link px-[5px] pb-[7px] pt-[5px]"
                            href="{{ route('home') }}"
                        >Home</a>
                    </li>
                    <li class="basis-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        {{-- <button
                            class="ah-text-link px-[5px] pb-[7px] pt-[5px] uppercase text-center align-middle cursor-pointer"
                            id="btnMenuProducts"
                            >Products &#9207;
                        </button> --}}
                        {{-- <ul class="dropdown w-full h-auto absolute top-[85%] left-[-1px] z-[1] bg-[#ffffff]" aria-label="submenu">
                            @foreach (collect(Storage::json('public/jsons/products.json')) as $product )
                           <li class="border-b">
                                <a class="text-ah-darkest-grey text-center no-underline" href="{{ route('product-detail', $product['name']) }}">
                                    <div class="w-full">
                                        {{$product['name'] }}
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul> --}}
                        {{-- <div id="menuProducts"
                            class="hidden w-full h-auto absolute top-[100%] left-[-1px] z-[1] bg-[#ffffff] ">
                            <div class="flex flex-col" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                @foreach (collect(Storage::json('public/jsons/products.json')) as $product )
                                <a class="text-[#1E1E1E] text-center no-underline" href="{{ route('product-detail', $product['name']) }}">
                                    <div class="border-b w-full ">
                                         {{$product['name'] }}
                                        </div>
                                </a>
                                @endforeach
                            </div>
                        </div> --}}
                        <div class="relative">
                            <button id="ourMenuButton"
                                class="p-0 lg:p-4 text-[20px] leading-5 font-sans font-semibold inline-flex items-center text-left">
                                Our Companies <span class="ml-2 inline-block text-[14px] leading-5">&#9660;</span>
                            </button>
                            <div id="ourMenu"
                                class="hidden w-full h-[310px] absolute rounded-[20px] top-0 z-[-1] bg-white">
                                <div class="flex flex-col justify-end items-start" role="menu"
                                    aria-orientation="vertical" aria-labelledby="options-menu">
                                    @foreach (collect(Storage::json('public/jsons/products.json')) as $product )
                                    <div class="px-4 border-b border-[##AFAFAF]">

                                        <a class="text-[#1E1E1E] text-center no-underline" href="{{ route('product-detail', $product['name']) }}">
                                            <a class="text-[#1E1E1E] p-0 lg:p-4 no-underline" href="{{ route('product-detail', $product['name']) }}">
                                                {{$product['name'] }}
                                            </a>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="basis-[calc(100%/3-156px/3)] text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            class="ah-text-link px-[5px] pb-[7px] pt-[5px]"
                            href="{{ route('contact') }}"
                        >Contact</a>
                    </li>
                    <li class="basis-auto text-center md:flex md:flex-col md:h-full md:items-center md:justify-center">
                        <a
                            href="{{ route('distributors') }}"
                            class="ah-button-blue my-[20px]"
                        >Find a Distributor</a>
                    </li>
                </ul>
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
                class="hidden flex-col flex-nowrap justify-start items-center w-screen h-screen px-[30px] py-[8vh]
                       fixed top-0 left-0 z-[100] bg-white md:hidden"
            >
                <div class="w-full flex-initial pb-[20px] text-center">
                    <button
                        id="mobileMenuCloseButton"
                        class="inline-flex items-center justify-center w-[40px] h-[40px] text-ah-dark-grey
                               transition-transform duration-500 will-change-transform hover:scale-110"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M10.0273 10.2773L29.4728 29.7228" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M10.0273 29.7227L29.4728 10.2772" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <ul
                    class="list-none h-auto flex-auto flex flex-col items-center justify-center mb-[40px] gap-y-[8%] overflow-auto
                            font-semibold text-xl text-center text-ah-darkest-grey">

                    <li><a class="ah-text-link" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <button class="ah-text-link" >Products &#9207;</button>
                        <ul class="dropdown w-full h-auto  bg-[#ffffff]" aria-label="submenu">
                            @foreach (collect(Storage::json('public/jsons/products.json')) as $product )
                           <li class="border-b">
                                <a class="text-ah-darkest-grey text-center no-underline" href="{{ route('product-detail', $product['name']) }}">
                                    <div class="w-full">
                                        {{$product['name'] }}
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="ah-text-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="mt-[4%]">
                        <a
                            href="{{ route('distributors') }}"
                            class="ah-button-blue m-0 pt-5 pb-6 px-12 font-medium text-xl"
                        >Find a Distributor</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>
<style>



ul.dropdown {
	list-style: none;
	margin: 0;
	padding-left: 0;
}

ul.dropdown li {
	color: #fff;
  background: white;
	display: block;
	float: left;
	padding: 1rem;
	position: relative;
	text-decoration: none;
  transition-duration: 0.5s;
}

ul.dropdown li:hover,
ul.dropdown li:focus-within {
	background: #f5f5f5;
	cursor: pointer;
}

ul.dropdown li:focus-within a {
  outline: none;
}


ul li  ul {
    visibility: hidden;
    opacity: 0;
    min-width: 5rem;
    position: absolute;
    transition: all 0.5s ease;
    margin-top: 1rem;
    left: 0;
    display: none;
}

ul li:hover > ul,
ul li:focus-within > ul,
ul li ul:hover,
ul li ul:focus {
   visibility: visible;
   opacity: 1;
   display: block;
}

ul li ul li {
    clear: both;
    width: 100%;
}
</style>
<script>
    let lastScrollTop = 0;
    const menu = document.getElementById("mainHeader");
    const menuPlaceholder = document.createElement('div');
    menuPlaceholder.style.height = menu.offsetHeight + 'px'; // Asigna la altura del menú al placeholder

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Usuario hace scroll hacia abajo
            menu.style.position = "relative";
            if (menu.parentNode.contains(menuPlaceholder)) {
                menu.parentNode.removeChild(menuPlaceholder); // Quitar el placeholder
            }
        } else {
            // Usuario hace scroll hacia arriba
            menu.style.position = "fixed";
            menu.style.top = "0";
            if (!menu.parentNode.contains(menuPlaceholder)) {
                menu.parentNode.insertBefore(menuPlaceholder, menu); // Agregar el placeholder
            }
        }

        lastScrollTop = scrollTop;
    });
</script>
<script>
   const menuProducts = document.getElementById('menuProducts');
   const btmMenu = document.getElementById('btnMenuProducts');
//    const menuMoobile = document.getElementById('mobileMenu');
//    const background = document.getElementById('backgraound');

//    backgraound.addEventListener('touchstart', (e) => {
//        closeMenu();
//    });

    document.body.addEventListener('click', function(event) {
        closeMenu();
    });

    btmMenu.addEventListener('click', function(event) {
        menuProducts.classList.toggle('hidden');
        menuProducts.classList.add('flex');
        menuProducts.classList.add('flex-col');
        menuProducts.classList.add('justify-end');

        event.stopPropagation();
    });

   function closeMenu() {
       if( !menuProducts.classList.contains('hidden') ){
        menuProducts.classList.add('hidden');
        menuProducts.classList.toggle('flex');
        menuProducts.classList.toggle('flex-col');
        menuProducts.classList.toggle('justify-end');
       }
   }


   // Toggle the mobile menu
   document.getElementById('mobileMenuButton').addEventListener('click', function(event) {
    //    background.classList.toggle('hidden');
    //    menuMoobile.classList.toggle('hidden');
    //    menuMoobile.classList.add('flex');
       event.stopPropagation();
   });
</script>
