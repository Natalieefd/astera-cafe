<section class="bg-cream p-10 justify-center items-center">
    <div class="grid grid-cols-5 gap-5">
        @foreach ($menu as $mn)
            <div class="flex flex-col bg-teal-800 w-fit rounded-2xl p-5 font-DMSans text-center">
                <img src="{{ asset('assets/images/' . $mn->gambar) }}" alt="{{ $mn->gambar }}" class="w-56 rounded-2xl">
                <p class="text-cream font-semibold text-xl pt-5">{{ $mn->nama }}</p>
                <p class="text-cream opacity-60 font-semibold text-md">{{ $mn->kategori->nama }}</p>
                <p class="text-seashell opacity-80 font-bold text-xl">Rp. {{ $mn->harga }}</p>
            </div>
        @endforeach
    </div>
</section>
