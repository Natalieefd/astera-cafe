@extends('layouts.global')
@section('content')
    @include('components.admin.nav_bar')
    <section class="bg-cream px-10 pt-10">
        <div class="flex flex-col bg-teal-700 rounded-md p-10 gap-3">
            <div class="flex items-center gap-2">
                <div class="bg-teal-950 h-1.5 w-12 rounded-md opacity-70"></div>
                <p class="text-teal-950 font-dela uppercase text-4xl">welcome to</p>
            </div>
            <p class="text-teal-900 font-dela uppercase text-2xl pl-16">admin dashboard</p>
        </div>
    </section>
    <section class="flex bg-cream justify-center items-center gap-20 pt-20">
        <div class="text-center w-44 rounded-xl bg-teal-800 p-8 uppercase font-dela">
            <p class="font-semibold text-teal-950 text-2xl">user</p>
            <p class="font-black text-cream opacity-80 text-5xl">{{ $userCount }}</p>
        </div>
        <div class="text-center w-44 rounded-xl bg-teal-800 p-8 uppercase font-dela">
            <p class="font-semibold text-teal-950 text-2xl">menu</p>
            <p class="font-black text-cream opacity-80 text-5xl">{{ $menuCount }}</p>
        </div>
        <div class="text-center w-44 rounded-xl bg-teal-800 p-8 uppercase font-dela">
            <p class="font-semibold text-teal-950 text-2xl">staff</p>
            <p class="font-black text-cream opacity-80 text-5xl">{{ $staffCount }}</p>
        </div>
    </section>
    @include('components.admin.data_user')
    @include('components.admin.data_staff')
    @include('components.admin.data_menu')
    @include('components.footer')
@endsection
