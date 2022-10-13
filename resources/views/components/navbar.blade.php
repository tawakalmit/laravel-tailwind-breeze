<nav class="fixed top-0 w-full h-14 bg-[#2c3e50] myshadow">
    <div class="flex items-center justify-between w-10/12 mx-auto h-14">
        <a href="/" class=" cursor-pointer text-white text-2xl">Sofaque</a>
        @if(!Auth::check())
        <div class="w-[8rem] flex justify-between">
            <a href="{{ route('login') }}" class="text-white hover:text-[#3498db]">Login</a>
            <a href="{{ route('register') }}" class="text-white hover:text-[#3498db]">Register</a>
        </div>
        @else
        <p class="text-white">{{ Auth::user()->name }}</p>
        @endif
    </div>
</nav>