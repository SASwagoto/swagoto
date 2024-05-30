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
            <h2 data-aos="fade-up"
                class="text-center font-mono text-[28px] font-bold text-white blur-0 duration-500 group-hover:opacity-80 group-hover:blur-2xl md:text-[50px] lg:text-[80px]">
                Welcome to the World of Web Wonders!</h2>
        </div>
    </div>
</section>
<section class="w-full relative bg-[#222f50] px-4">
    <div class="w-full h-80 relative bg-white">
        <div class="flex justify-between items-center gap-4 group bg-[#222f50] p-2 h-40 w-1/2 rounded-r-full">
            <div>
                <h2 class="text-white text-4xl font-brand font-bold">Shawon Ahmed Swagoto</h2>
                <h3 class="text-white text-2xl font-brand font-bold">Software Engineer</h3>
            </div>

            <div class="h-36 w-36 border border-white rounded-full duration-500 overflow-hidden">
                <img src="{{asset('frontend/images/swagotovector.png')}}" alt="">
            </div>
        </div>
        <div class="bg-white h-40 w-1/2 rounded-l-full"></div>
    </div>
</section>
@endsection