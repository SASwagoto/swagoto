@extends('layouts.web')

@section('content')
<section class="group fixed z-0 flex h-[250px] w-screen justify-center bg-black align-middle md:h-[448px] lg:h-[500px]">
    <div class="flex w-full justify-center">
        <img class="block w-full md:hidden" src="{{ asset('frontend') }}/images/mobile_banner.jpeg"
            alt="...">
        <img class="hidden w-full md:block" src="{{ asset('frontend') }}/images/banner.jpeg" alt="...">
    </div>
</section>
<section class="group relative top-0 h-[250px] w-screen md:h-[448px] lg:h-[500px]">
    <div
        class="top-0 m-auto flex h-full w-full justify-center bg-black bg-opacity-90 align-middle duration-500 group-hover:bg-opacity-0">
        <div class="m-auto mt-[50px] w-2/3 md:mt-[85px]">
            <h2
                class="text-center font-mono text-[28px] font-bold text-white blur-0 duration-500 group-hover:opacity-80 group-hover:blur-2xl md:text-[50px] lg:text-[80px]">
                Welcome to the World of Web Wonders!</h2>
        </div>
    </div>
</section>
<section class="relative bg-slate-800 w-screen">
    <div class="flex w-full px-6 py-20 md:px-8">
        <div class="text-start w-full md:w-1/2 lg:1/2">
            <h3 class="text-gray-300 text-mono text-lg">Hello, I'm Md Shahnewas Shawon</h3>
            <h1 class="uppercase text-4xl text-cyan-500 text-bold">Swagoto</h1>
        </div>
        <div class="flex w-1/2 items-end">
        </div>
    </div>
</section>
@endsection