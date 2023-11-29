<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-700">
        <div class="flex flex-col">
            <div class="pb-14 text-3xl text-cream font-dela uppercase text-center">astera cafe user</div>
            <div class="flex flex-row">
                <table class="w-full mx-32 bg-teal-800 rounded-2xl">
                    <tr class="bg-teal-900">
                        <th class="uppercase text-cream font-dela text-lg py-5">no</th>
                        <th class="uppercase text-cream font-dela text-lg">nama</th>
                        <th class="uppercase text-cream font-dela text-lg">email</th>
                    </tr>
                    <tr>
                        <td>
                            @php $i=1 @endphp
                            @foreach ($user as $usr)
                    <tr class="py-5">
                        <th class="text-seashell py-5">
                            {{ $i }}
                        </th>
                        <th class="text-seashell py-5">
                            {{ $usr->name }}
                        </th>
                        <th class="text-seashell py-5">
                            {{ $usr->email }}
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
