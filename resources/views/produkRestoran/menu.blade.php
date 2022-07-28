<x-template-layout>
    <h1>AZZAHRA</h1>
    <table class="table-fixed w-full">
        <thead class="bg-gray-300">

            <tr class="text-lg text-left">
                <th class="px-3 py-3 text-white">Nama Restoran</th>
                <th class="px-3 py-3 text-white">harga</th>
                <th class="px-3 py-3 text-white">Wilayah</th>
                <th class="px-3 py-3 text-white">Action</th>

            </tr>
        </thead>

        <tbody class="bg-primary divide-y divide-gray-200">
            @foreach ($menu as $menu)
            <tr>

                <td class="px-3 py-3">{{$menu->nama_makanan}}</td>
                <td class="px-3 py-3">{{$menu->harga}}</td>
                <td class="px-3 py-3">{{$menu->wilayah}}</td>
                <td></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</x-template-layout>