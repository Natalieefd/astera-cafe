<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-700">
        <div class="flex flex-col">
            <p class="pb-14 text-3xl text-cream font-dela uppercase text-center">astera cafe menu</p>
            <div class="flex items-center justify-between">
                <div class="flex flex-row gap-5 ml-32">
                    <a href="{{ route('admin.add_menu') }}"
                        class="flex p-3 w-fit pr-5 px-5 bg-teal-950 rounded-md mr-25 mb-5 text-seashell font-medium hover:text-teal-950 hover:bg-teal-800">
                        <p>Add Menu</p>
                    </a>
                    <a href="{{ route('admin.exportExcelMenu') }}" title="Export Data"
                        class="flex w-fit bg-teal-950 rounded-md px-4 items-center mr-25 mb-5 hover:bg-teal-800">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                            viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 232V334.1l31-31c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-72 72c-9.4 9.4-24.6 9.4-33.9 0l-72-72c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l31 31V232c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                        </svg>
                    </a>
                </div>
                <form action="{{ route('admin.cari_menu') }}" method="get" class="mr-36 mb-5">
                    <input type="text" name="search" placeholder="Search here . . ."
                        class="text-sm font-DMSans p-3 rounded-sm w-64 h-7 ring-1 ring-teal-800 hover:bg-slate-100 focus:ring-teal-950">
                </form>
            </div>
            <div class="flex flex-row justify-center">
                @if ($menu->isNotEmpty())
                    <table class="w-full mx-32 bg-teal-800 rounded-2xl">
                        <tr class="bg-teal-900">
                            <th class="uppercase text-cream font-dela text-lg py-5">no</th>
                            <th class="uppercase text-cream font-dela text-lg">nama</th>
                            <th class="uppercase text-cream font-dela text-lg">kategori</th>
                            <th class="uppercase text-cream font-dela text-lg">stok</th>
                            <th class="uppercase text-cream font-dela text-lg">harga</th>
                            <th class="uppercase text-cream font-dela text-lg">gambar</th>
                            <th class="uppercase text-cream font-dela text-lg">action</th>
                        </tr>
                        <tr>
                            <td>
                                @php $i=1 @endphp
                                @foreach ($menu as $mn)
                                <tr>
                                    <th class="text-seashell">
                                        {{ $i }}
                                    </th>
                                    <th class="text-seashell">
                                        {{ $mn->nama }}
                                    </th>
                                    <th class="text-seashell">
                                        {{ $mn->kategori->nama }}
                                    </th>
                                    <th class="text-seashell">
                                        {{ $mn->stok }}
                                    </th>
                                    <th class="text-seashell">
                                        Rp. {{ $mn->harga }}
                                    </th>
                                    <th>
                                        <div class="flex justify-center">
                                            <img src="{{ asset('assets/images/menu/' . $mn->gambar) }}"
                                                alt="{{ $mn->gambar }}" class="rounded-lg w-32">
                                        </div>
                                    </th>
                                    <th class="flex gap-2 py-10 justify-center text-cream">
                                        <a href="{{ route('admin.edit_menu', $mn->id) }}" class="py-2">
                                            <div class="p-2 rounded-lg bg-yellow-500 hover:bg-yellow-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="{{ route('admin.delete_menu', $mn->id) }}" method="GET" class="py-2">
                                            @csrf
                                            <div class="p-2 rounded-lg bg-red-500 hover:bg-red-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </th>
                                </tr>
                                @php $i++ @endphp
                                @endforeach
                            </td>
                        </tr>
                    </table>
                @else
                    <table class="w-full mx-32 mt-10 bg-teal-800 rounded-2xl">
                        <th>
                            <div class="flex justify-center items-center bg-teal-800 h-fit p-20 gap-5 font-DMSans uppercase text-cream text-xl font-black">
                                <p>menu tidak tersedia</p>
                            </div>
                        </th>
                    </table>
                @endif
            </div>
        </div>
    </div>
</section>
