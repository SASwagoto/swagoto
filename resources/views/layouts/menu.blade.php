<a href="{{route('home')}}" class="dark:text-white text-[#222f50] duration-500"><i class="fa-solid fa-house fa-xl md:fa-2xl"></i></a>
<a href="#" class="dark:text-white text-[#222f50] duration-500"><i class="fa-solid fa-diagram-project fa-xl md:fa-2xl"></i></a>
<button type="button" class="sun dark:text-white text-[#222f50] duration-500">
    <i class="fa-solid fa-sun fa-xl md:fa-2xl"></i>
</button>
<button type="button" class="moon dark:text-white text-[#222f50] duration-500">
    <i class="fa-solid fa-moon fa-xl md:fa-2xl"></i>
</button>
@if (Route::has('login'))
    @auth
        <a href="{{ route('dashboard') }}" class="dark:text-white text-[#222f50] duration-500"><i class="fa-solid fa-gauge fa-xl md:fa-2xl"></i></a>
    @else
        <a href="{{ route('login') }}" class="dark:text-white text-[#222f50] duration-500"><i
                class="fa-solid fa-right-to-bracket fa-xl md:fa-2xl"></i></a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold dark:text-white text-[#222f50] duration-500">Register</a>
        @endif
    @endauth
@endif