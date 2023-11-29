<nav class="bg-teal-950">
    <div class="flex justify-between px-20 gap-52 items-center">
        <a href="{{ route('admin.dashboard') }}">
            <p class="text-2xl pt-3 text-cream font-dela capitalize">astera</p>
            <p class="text-1xl px-14 pb-3 text-cream font-dela ">cafe</p>
        </a>
        <div class="flex items-center gap-5">
            <div class="flex border-0 rounded-full items-center">
                <img src="{{ asset('assets/images/admin_profile.png') }}" alt="" class="max-h-12 rounded-full">
            </div>
            <div class="w-1 h-12 bg-customTeal"></div>
            <a href="{{ route('logout') }}" class="text-cream">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ece1d9
                        }
                    </style>
                    <path
                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                </svg>
            </a>
        </div>
    </div>
</nav>
