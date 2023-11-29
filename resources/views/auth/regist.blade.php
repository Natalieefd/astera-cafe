@extends('layouts.global')
@section('content')
    <div class="relative flex items-center h-screen bg-cream">
        <p class="absolute left-40 uppercase text-teal-900 font-dela font-medium text-6xl">Regist</p>
        <div class="absolute right-0 h-full w-7/12 py-36 bg-teal-800 rounded-sm drop-shadow-lg">
            <form action="{{ route('register.action') }}" method="post"
                class="flex flex-col justify-center items-start px-36">
                @csrf
                @if (session('error'))
                    <div class="w-full relative">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                            <p class="text-red-500">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                <label class="pt-5 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Name</label>
                <input type="text" name="name" placeholder="Name"
                    class="w-full px-2 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-500">

                <label class="pt-5 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full px-2 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-500">

                <label class="pt-5 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-2 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-500">

                <label class="pt-5 pb-3 pl-2 font-DMSans font-semibold text-teal-950">Confirm Password</label>
                <input type="password" name="confPassword" placeholder="Confirm Password"
                    class="w-full px-2 py-2 bg-teal-50 rounded-sm ring-1 ring-teal-700 focus:outline-none focus:ring-teal-500">

                <div class="w-full flex justify-between mt-4 pl-4">
                    <p class="text-sm">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-teal-950 underline">Login</a>
                    </p>

                </div>
                <button type="submit"
                    class="w-full py-2 mt-10 text-white font-DMSans
            bg-teal-950 rounded-md shadow-md hover:dark:bg-teal-900 hover:text-teal-950 hover:font-bold hover:font-DMSans">
                    Regist
                </button>
            </form>
        </div>
    </div>
@endSection
