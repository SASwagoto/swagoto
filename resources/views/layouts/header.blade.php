<header class="sticky top-0 z-10 bg-slate-800 max-full mx-auto px-4 py-3 sm:px-6 lg:px-8 flex">
    <a href="{{url('/')}}" class="group flex w-full justify-center md:w-1/3 md:justify-start lg:w-1/6">
        <img class="h-8 md:h-10" src="{{ asset('frontend') }}/images/less.png" alt="">
        <div class="overflow-hidden">
            <h3
                class="me-1 ml-[-250px] font-mono text-2xl text-white duration-300 group-hover:ml-0 md:ml-[-320px] md:text-3xl">
                swagoto</h3>
        </div>
        <img class="ml-[-7px] h-8 md:h-10" src="{{ asset('frontend') }}/images/greater.png" alt="">
    </a>
    <div class="md:w-2/3 lg:w-5/6 justify-end pt-2 gap-10 items-start hidden md:flex lg:flex xl:flex">
        <a href="{{route('home')}}" class="text-white"><i class="fa-solid fa-house fa-xl md:fa-2xl"></i></a>
        <a href="#" class="text-white"><i class="fa-solid fa-diagram-project fa-xl md:fa-2xl"></i></a>
        <button type="button"
            class="hs-dark-mode-active:hidden hs-dark-mode group block items-center font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray-500"
            data-hs-theme-click-value="dark">
            <a href="#" class="text-white"><i class="fa-solid fa-sun fa-xl md:fa-2xl"></i></a>
        </button>
        <button type="button"
            class="hs-dark-mode-active:block hs-dark-mode group hidden items-center font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray-500"
            data-hs-theme-click-value="light">
            <a href="#" class="text-white"><i class="fa-solid fa-moon fa-xl md:fa-2xl"></i></a>
        </button>
        @if (Route::has('login'))
            @auth
                <a href="{{ route('dashboard') }}" class="text-white"><i class="fa-solid fa-gauge fa-xl md:fa-2xl"></i></a>
            @else
                <a href="{{ route('login') }}" class="text-white"><i
                        class="fa-solid fa-right-to-bracket fa-xl md:fa-2xl"></i></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Register</a>
                @endif
            @endauth
        @endif
    </div>
</header>