<nav class="bg-teal-950">
    <div class="flex justify-between items-center px-20">
        <a href="@if (Auth::check()) {{ route('user.home_page') }} @else {{ route('welcome') }} @endif">
            <p class="text-2xl pt-3 text-cream font-dela capitalize">astera</p>
            <p class="text-1xl px-14 pb-3 text-cream font-dela ">cafe</p>
        </a>
        <ul class="flex gap-32 text-cream font-medium text-sm uppercase">
            @if (Auth::check())
                <li><a href="{{ route('user.home_page') }}"
                        class="text-sm font-DMSans hover:border-b-2 hover:border-cream hover:pb-1">home</a></li>
            @else
                <li><a href="{{ route('welcome') }}"
                        class="text-sm font-DMSans hover:border-b-2 hover:border-cream hover:pb-1">home</a></li>
            @endif

            <li><a href="{{ route('about') }}"
                    class="text-sm font-DMSans hover:border-b-2 hover:border-cream hover:pb-1">about</a></li>

            @if (Auth::check())
                <li><a href="{{ route('menu') }}"
                        class="text-sm font-DMSans hover:border-b-2 hover:border-cream hover:pb-1">menu</a></li>
            @else
                <li><a href="{{ route('login') }}"
                        class="text-sm font-DMSans hover:border-b-2 hover:border-cream hover:pb-1">menu</a></li>
            @endif
        </ul>

        @if (Auth::check())
            <a href="{{ route('logout') }}" class="bg-teal-950 border-cream border-2 rounded-full hover:bg-cream">
                <p
                    class="py-2 px-4 text-sm font-DMSans font-medium text-primary capitalize text-cream hover:text-teal-900">
                    logout</p>
            </a>
        @else
            <a href="{{ route('login') }}" class=" bg-teal-950 border-cream border-2 rounded-full hover:bg-cream">
                <p
                    class="py-2 px-4 text-sm font-DMSans font-medium text-primary capitalize text-cream hover:text-teal-900">
                    login</p>
            </a>
        @endif
    </div>
</nav>
