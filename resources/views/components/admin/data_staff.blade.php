<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-700">
        <div class="flex flex-col">
            <div class="pb-14 text-3xl text-cream font-dela uppercase text-center">astera cafe staff</div>
            <div class="flex flex-col ml-32">
                <a href="{{ route('admin.add_staff') }}"
                    class="flex p-3 w-fit px-5 bg-teal-950 rounded-md mr-25 mb-5 text-seashell font-medium hover:text-teal-950 hover:bg-teal-800">
                    <p>Add Staff</p>
                </a>
            </div>
            <div class="flex flex-row">
                <table class="w-full mx-32 bg-teal-800 rounded-2xl">
                    <tr class="bg-teal-900">
                        <th class="uppercase text-cream font-dela text-lg py-5">no</th>
                        <th class="uppercase text-cream font-dela text-lg">username</th>
                        <th class="uppercase text-cream font-dela text-lg">nama</th>
                        <th class="uppercase text-cream font-dela text-lg">jabatan</th>
                        <th class="uppercase text-cream font-dela text-lg">action</th>
                    </tr>
                    <tr>
                        <td>
                            @php $i=1 @endphp
                            @foreach ($staff as $st)
                    <tr>
                        <th class="text-seashell">
                            {{ $i }}
                        </th>
                        <th class="text-seashell">
                            {{ $st->username }}
                        </th>
                        <th class="text-seashell">
                            {{ $st->nama }}
                        </th>
                        <th class="text-seashell">
                            {{ $st->jabatan }}
                        </th>
                        <th class="flex gap-2 justify-center ">
                            <a href="{{ route('admin.delete_staff', $st->id) }}" method="GET" class="py-2">
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
            </div>
        </div>
    </div>
</section>
