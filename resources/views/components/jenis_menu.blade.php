<section class="relative w-full h-ful flex justify-center text-center pt-28 pb-20 bg-cream">
    <div class="flex flex-col items-center">
        <div class="pb-16 text-3xl font-bold text-teal-950 font-dela uppercase">what we have</div>
        <div class="flex flex-row gap-20">
            <div class="flex flex-col justify-between items-center px-6 py-6 bg-teal-800 rounded-full drop-shadow-2xl">
                <img src={{ asset('assets/images/orange-honey-crepes.jpg') }} alt="" class="h-40 rounded-full">
                <p class="text-cream text-lg pt-3 pb-3 font-dela capitalize">dessert</p>
            </div>
            <div class="flex flex-col justify-between items-center px-6 py-6 bg-teal-800 rounded-full drop-shadow-2xl">
                <img src={{ asset('assets/images/coffee1.jpg') }} alt="" class="h-40 rounded-full">
                <p class="text-cream text-lg pt-3 pb-3 font-dela capitalize">coffee</p>
            </div>
            <div class="flex flex-col justify-between items-center px-6 py-6 bg-teal-800 rounded-full drop-shadow-2xl">
                <img src={{ asset('assets/images/avocado-chesee-toast.jpg') }} alt="" class="h-40 rounded-full">
                <p class="text-cream text-lg pt-3 pb-3 font-dela capitalize">meals</p>
            </div>
            <div class="flex flex-col justify-between items-center px-6 py-6 bg-teal-800 rounded-full drop-shadow-2xl">
                <img src={{ asset('assets/images/orange-lime.jpg') }} alt="" class="h-40 rounded-full">
                <p class="text-cream text-lg pt-3 pb-3 font-dela capitalize">non-coffe</p>
            </div>
        </div>
        @if (Auth::check())
            <a href="{{ route('menu') }}"
                class="bg-teal-900 mt-16 px-6 py-2 rounded-full w-fit font-DMSans text-cream font-medium uppercase hover:dark:bg-teal-700 hover:text-teal-950 hover:font-medium">
                <p>see more</p>
            </a>
        @else
            <a href="{{ route('login') }}"
                class="bg-teal-900 mt-16 px-6 py-2 rounded-full w-fit font-DMSans text-cream font-medium uppercase hover:dark:bg-teal-700 hover:text-teal-950 hover:font-medium">
                <p>see more</p>
            </a>
        @endif
    </div>
</section>
