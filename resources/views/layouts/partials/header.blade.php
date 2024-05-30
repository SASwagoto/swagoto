<header class="sticky top-0 z-10 bg-indigo-300 dark:bg-[#222f50] w-full mx-auto px-4 py-2 md:py-3 lg:py-3 sm:px-6 lg:px-8 flex duration-500">
    <a href="{{url('/')}}" class="group flex w-full justify-center md:w-1/3 md:justify-start lg:w-1/6">
        <svg class="ml-[-7px] h-8 md:h-10" viewBox="0 0 49 100">
            <path class="fill-[#222f50] dark:fill-white duration-500" d="M 14.091 24.447 C 6.341 37.893, -0 49.383, -0 49.980 C -0 50.578, 6.345 62.077, 14.100 75.533 L 28.200 100 38.600 100 C 44.320 100, 49 99.707, 49 99.348 C 49 98.989, 42.670 87.739, 34.932 74.348 L 20.865 50 34.932 25.652 C 42.670 12.261, 49 1.011, 49 0.652 C 49 0.293, 44.316 -0, 38.591 -0 L 28.182 -0 14.091 24.447"/>
        </svg>
        {{-- <img class="h-8 md:h-10" src="{{ asset('frontend') }}/images/less.png" alt=""> --}}
        <div class="overflow-hidden">
            <h3
                class="me-1 ml-[-250px] font-mono font-bold text-2xl text-[#222f50] dark:text-white duration-500 group-hover:ml-0 md:ml-[-320px] md:text-3xl">
                swagoto</h3>
        </div>
        <svg class="ml-[-7px] h-8 md:h-10" viewBox="0 0 107 100">
            <path class="fill-[#222f50] dark:fill-white duration-500" d="M 53.173 6.750 C 29.848 46.965, -0 99.020, -0 99.483 C 0 99.805, 4.763 99.940, 10.585 99.784 L 21.170 99.500 44.335 59.307 C 61.528 29.476, 67.780 19.421, 68.587 20.307 C 69.185 20.963, 73.347 27.914, 77.837 35.753 L 86 50.007 72.889 72.753 C 65.678 85.264, 59.143 96.512, 58.366 97.750 L 56.954 100 67.796 100 L 78.637 100 92.569 75.809 C 100.231 62.504, 106.500 50.890, 106.500 50 C 106.500 49.110, 100.231 37.496, 92.569 24.191 L 78.637 0 67.863 0 L 57.088 0 53.173 6.750" />
        </svg>
        {{-- <img class="ml-[-7px] h-8 md:h-10" src="{{ asset('frontend') }}/images/greater.png" alt=""> --}}
    </a>
    <div class="md:w-2/3 lg:w-5/6 justify-end pt-2 gap-10 items-start hidden md:flex lg:flex xl:flex">
        @include('layouts.partials.menu')
    </div>
</header>