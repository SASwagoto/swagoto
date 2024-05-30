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
        <div class="bg-white h-40 w-1/2 rounded-l-full"></div>
    </div>
</section>

<section class="relative bg-gradient-to-t to-[#0C3C54] from-[#000000] pt-36 md:pt-48 pb-20 md:pb-28">
    <div class="text-center">
        <h5 class="text-white text-2xl md:text-4xl font-ubuntu">Hello! I'm </h5>
        <h2 class="text-4xl md:text-8xl font-bebas text-[#FFD700]">MD SHAHANEWAS SHAWON</h2>
        <p class="w-full md:w-2/4 m-auto text-lg md:text-xl font-extralight italic text-white text-center">A passionate Full Stack Developer with {{Carbon\Carbon::now()->diffInYears("2019-01-01");}} years of experience in designing and building web applications. I specialize in creating seamless, user-friendly experiences from concept to deployment. Welcome to my portfolio, where you can learn more about my work, skills, and what drives me as a developer.</p>

        <div class="w-full md:w-1/4 m-auto flex justify-center gap-5 mt-10">
            <button type="button" class="border border-[#FFD700] rounded-full px-4 py-2 text-lg uppercase font-titillium font-bold text-[#FFD700]">Hire Me</button>
            <button type="button" class="rounded-full px-4 py-2 text-lg uppercase font-titillium font-bold bg-[#FFD700] text-[#0c3c54]">resume</button>
        </div>
    </div>
</section>

<section class="relative bg-black py-10">
    <div class="w-10/12 m-auto">
        <div class="w-full border-b border-white pb-2 my-5">
            <h2 class="text-2xl uppercase font-bold md:text-4xl text-white text-center font-titillium">Latest Projects</h2>
        </div>
    </div>
</section>
@endsection
