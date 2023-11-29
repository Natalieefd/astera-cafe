@extends('layouts.global')
@section('content')
    <div class="relative flex items-center h-screen bg-cream">
        <p class="absolute left-44 uppercase text-teal-900 font-dela font-medium text-6xl">login</p>
        <div class="absolute right-0 h-full w-7/12 py-24 bg-teal-800 rounded-sm drop-shadow-lg">
            <form action="{{ route('login.action') }}" method="post"
                class="flex flex-col justify-center items-start py-28 px-36">
                <label class="pt-10 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full px-2.5 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-700">

                <label class="pt-5 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-2.5 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-700">

                @csrf
                @if (session('error'))
                    <p class="pt-2 text-red-400 text-xs">
                        {{ session('error') }}
                    </p>
                @endif

                <div class="w-full flex justify-between mt-4 pl-4">
                    <p class="text-sm">
                        Don't have an account?
                        <a href="/register" class="text-teal-950 underline">Regist</a>
                    </p>

                </div>
                <button type="submit"
                    class="w-full py-2.5 mt-10 text-cream font-DMSans
                bg-teal-950 rounded-md shadow-md hover:dark:bg-teal-900 hover:text-teal-950 hover:font-bold hover:font-DMSans">
                    Login
                </button>
            </form>
        </div>
    </div>
@endSection
