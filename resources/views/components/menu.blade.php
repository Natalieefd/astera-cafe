<section class="bg-cream p-10 justify-center items-center">
    <div class="flex mb-10 px-10 py-8 bg-teal-800 rounded-md justify-center">
        <form action="{{ route('user.cari_menu') }}" method="get">
            <input type="text" name="search" placeholder="Search here . . ."
                class="text-sm font-DMSans p-3 rounded-sm w-64 h-7 ring-1 ring-teal-800 hover:bg-slate-100 focus:ring-teal-950">
        </form>
    </div>
    @if ($menu->isNotEmpty())
        <div class="grid grid-cols-5 gap-5">
            @foreach ($menu as $mn)
                <div class="flex flex-col bg-teal-800 w-fit rounded-2xl p-5 font-DMSans text-center">
                    <img src="{{ asset('assets/images/' . $mn->gambar) }}" alt="{{ $mn->gambar }}"
                        class="w-56 rounded-2xl">
                    <p class="text-cream font-semibold text-xl pt-5">{{ $mn->nama }}</p>
                    <p class="text-cream opacity-60 font-semibold text-md">{{ $mn->kategori->nama }}</p>
                    <p class="text-seashell opacity-80 font-bold text-xl">Rp. {{ $mn->harga }}</p>
                </div>
            @endforeach
        </div>
    @else
        <div
            class="flex flex-col justify-center items-center h-screen gap-5 font-DMSans uppercase text-teal-950 text-4xl font-black">
            <div class="flex gap-6">
                <div class="p-2 bg-teal-950 rounded-full"></div>
                <div class="p-2 bg-teal-950 rounded-full"></div>
                <div class="p-2 bg-teal-950 rounded-full"></div>
            </div>
            <p>menu tidak tersedia</p>
        </div>
    @endif
</section>
