<footer class="fixed bottom-0 z-10 w-screen bg-slate-800 p-4 md:hidden lg:hidden xl:hidden">
    <div class="flex justify-between">
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
</footer>

<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "220109344523399");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v19.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>