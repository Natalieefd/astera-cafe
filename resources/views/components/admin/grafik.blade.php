@extends('layouts.global')
@section('content')
    @include('components.admin.nav_bar')
    <section class="h-fit bg-cream py-1">
        <div  class="container px-4 mx-auto py-4">
            <div class="bg-teal-900 w-fit py-2 px-3 rounded-md font-DMSans text-cream">
                <a href="{{ route('admin.dashboard') }}">
                    <p>Back</p>
                </a>
            </div>
            <div class="p-6 m-20 bg-white shadow">
                {!! $chart->container() !!}
            </div>
        </div>
        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
    </section>
@include('components.footer')
@endsection
