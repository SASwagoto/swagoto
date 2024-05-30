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
        <div class="m-auto mt-[50px] w-4/5 md:w-2/3  md:mt-[85px]">
            <h2
                class="text-center text-[28px] font-titillium font-bold text-white blur-0 duration-500 group-hover:opacity-80 group-hover:blur-2xl md:text-[50px] lg:text-[80px]">
                Welcome to the World of Web Wonders!</h2>
        </div>
    </div>
    <div class="absolute rounded-full pointer-events-none border-[2px] border-white w-[200px] h-[200px] md:w-[340px] md:h-[340px] -bottom-[125%] md:-bottom-full -translate-y-full left-1/2 -translate-x-1/2 flex m-auto z-30">
        <div class="relative rounded-full  border-4 border-white bg-gradient-to-t from-[#214241] to-[#ffffff] w-[190px] h-[190px] md:w-[320px] md:h-[320px] m-auto p-4 overflow-hidden">
            <img class="blur-0 group-hover:blur-3xl group-hover:opacity-40 duration-500" src="{{asset('frontend/images/swagotovector.png')}}" alt="">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <h4 class="text-center uppercase text-3xl md:text-6xl font-bold font-titillium text-transparent group-hover:text-[#0C3C54] duration-500">SWAGOTO</h4>
                <span class="text-center text-nowrap text-xl md:text-3xl font-extralight italic text-transparent group-hover:text-white duration-500">Software Engineer</span>
            </div>
        </div>
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
