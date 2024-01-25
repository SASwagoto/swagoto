@extends('layouts.web')

@section('content')
<section class="group fixed z-0 flex h-[250px] w-full justify-center bg-black align-middle md:h-[448px] lg:h-[500px]">
    <div class="flex w-full justify-center">
        <img class="block w-full md:hidden" src="{{ asset('frontend') }}/images/mobile_banner.jpeg"
            alt="...">
        <img class="hidden w-full md:block" src="{{ asset('frontend') }}/images/banner.jpeg" alt="...">
    </div>
</section>
<section class="group relative top-0 h-[250px] w-full md:h-[448px] lg:h-[500px]">
    <div
        class="top-0 m-auto flex h-full w-full justify-center bg-black bg-opacity-90 align-middle duration-500 group-hover:bg-opacity-0">
        <div class="m-auto mt-[50px] w-2/3 md:mt-[85px]">
            <h2
                class="text-center font-mono text-[28px] font-bold text-white blur-0 duration-500 group-hover:opacity-80 group-hover:blur-2xl md:text-[50px] lg:text-[80px]">
                Welcome to the World of Web Wonders!</h2>
        </div>
    </div>
</section>
<section class="bg-indigo-300 dark:bg-[#222f50] w-full py-4 relative">
    <div class="align-middle image_box  top-[-50%]">
        <div class="rounded-full border-[1px] border-[#222f50] dark:border-white w-80 h-80 flex m-auto">
            <div class="relative rounded-full border-4 border-[#222f50] dark:border-white w-[300px] h-[300px] m-auto p-4 overflow-hidden">
                <img class="blur-0 hover:blur-2xl duration-500" src="{{asset('frontend/images/swagotovector.png')}}" alt="">
                <h1 class="text-xl absolute top-auto left-auto">Swagoto</h1>
            </div>
        </div>
    </div>
</section>
@endsection