@extends('layouts.global')
@section('content')
    <div class="flex justify-center items-center h-screen bg-cream">
        <div
            class="flex flex-col justify-center items-center h-fit py-16 mx-56 w-fit bg-teal-800 rounded-3xl drop-shadow-lg">
            <div>
                <p class="uppercase text-seashell font-dela font-medium text-4xl">Edit Menu</p>
            </div>
            <form action="{{ route('admin.update_menu', $menu->id) }}" method="post" enctype="multipart/form-data"
                class="w-full flex items-start">
                @csrf
                <div class="flex flex-col items-center justify-center">
                    <div class="flex items-center justify-center">

                        <div class="flex flex-col">
                            <div class="flex flex-col w-full pl-32 pr-32">
                                <label class="pt-10 pb-3 font-DMSans font-medium text-seashell">Nama</label>
                                <input type="text" name="nama" placeholder="{{ $menu->nama }}"
                                    class="w-full px-2.5 py-2 bg-teal-900 rounded-md ring-1 ring-teal-900 focus:outline-none focus:ring-gray-900 placeholder:text-teal-700">
                                @error(session('nama'))
                                    <p class="pt-2 text-red-400 text-xs">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex w-full gap-5 pl-32 pr-32">
                                <div class="flex flex-col w-full">
                                    <label class="pt-5 pb-3 font-DMSans font-medium text-seashell">Stok</label>
                                    <input type="text" name="stok" placeholder="{{ $menu->stok }}"
                                        class="w-full px-2.5 py-2 bg-teal-900 rounded-md ring-1 ring-teal-900 focus:outline-none focus:ring-gray-900 placeholder:text-teal-700 ">
                                    @error(session('stok'))
                                        <p class="pt-2 text-red-400 text-xs">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="flex flex-col w-full">
                                    <label class="pt-5 pb-3 font-DMSans font-medium text-seashell">Pilih Kategori</label>
                                    <select name="kategori_id"
                                        class=" px-2.5 py-2.5 font-DMSans bg-teal-900 border-teal-900 text-teal-700 text-sm rounded-md focus:ring-teal-900 focus:border-teal-900 ">
                                        <option hidden>{{ $menu->kategori->nama }}</option>
                                        @foreach ($kategoris as $kt)
                                            <option value="{{ $kt->id }}" class="">{{ $kt->nama }}</option>
                                        @endforeach
                                    </select>

                                    @error(session('kategori_id'))
                                        <p class="pt-2 text-red-400 text-xs">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col w-full  pl-32 pr-32">
                                <label class="pt-5 pb-3 font-DMSans font-medium text-seashell">Harga</label>
                                <input type="text" name="harga" placeholder="{{ $menu->harga }}"
                                    class="pl-2.5 pr-28 py-2 bg-teal-900 rounded-md ring-1 ring-teal-900 focus:outline-none focus:ring-gray-900 placeholder:text-teal-700">
                                @error(session('harga'))
                                    <p class="pt-2 text-red-400 text-xs">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex flex-col w-full  pl-32 pr-32">
                                <label class="block mb-2 mt-5 text-sm font-medium text-teal-900 dark:text-cream">Upload
                                    file</label>
                                <input placeholder="{{ $menu->gambar }}"
                                    class="block w-full pl-2 py-2 text-sm text-teal-900 border border-teal-700 rounded-lg cursor-pointer bg-teal-90 dark:text-teal-700 focus:outline-none dark:bg-teal-900 dark:border-teal-800 dark:placeholder-cream"
                                    name="gambar" type="file">
                                @error(session('gambar'))
                                    <p class="pt-2 text-red-400 text-xs">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-fit px-36 py-2 mt-10 text-cream font-DMSans
                bg-teal-950 rounded-md shadow-md hover:bg-teal-700 ">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endSection
