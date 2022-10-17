<nav class="fixed top-0 w-full h-14 bg-[#2c3e50] myshadow">
    <div class="flex items-center justify-between w-10/12 mx-auto h-14">
        <a href="/" class=" cursor-pointer text-white text-2xl">Sofaque</a>
        @if(!Auth::check())
        <div class="w-[8rem] flex justify-between">
            <a href="{{ route('login') }}" class="text-white hover:text-[#3498db]">Login</a>
            <a href="{{ route('register') }}" class="text-white hover:text-[#3498db]">Register</a>
        </div>
        @else
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost text-white">{{ Auth::user()->name }}<x-icons.chevron-down /></label>
            <ul tabindex="0" class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4">
              <li><a href="{{ route('profile.index') }}">Profile</a></li> 
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf   
                            <button type="submit" class="text-left w-full h-full">Logout</button>
                </form>
              </li>
            </ul>
        </div>
        @endif
    </div>
</nav>