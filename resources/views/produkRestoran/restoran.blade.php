<x-template-layout>
    <h1>RESTORAN</h1>
    <table class="table-fixed w-full"">
        <thead class=" bg-gray-600">

        <tr class="text-lg text-left">
            <th class="px-3 py-3 text-white">Nama</th>
            <th class="px-3 py-3 text-white">Alamat</th>
            <th class="px-3 py-3 text-white">Menu Restoran</th>
            <th class="px-3 py-3 text-white"></th>
            <th class="px-3 py-3 text-white">Action</th>

        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($restoran as $restoran)
            <tr>

                <td class="px-3 py-3">{{$restoran->nama}}</td>
                <td class="px-3 py-3">{{$restoran->alamat}}</td>
                <td class="px-3 py-3">
                    @foreach ($restoran->menu as $menu)
                    {{$menu->nama_makanan}},
                    @endforeach
                </td>
                <td>
                </td>
                <td>
                    <a href="#"><button class="bg-green-500 px-4 py-1 text-sm rounded text-white font-semibold border border-red-200 hover:text-white  hover:border-transparent focus:outline-none">
                            Edit </button>

                        <form action="#" method="POST" class="inline">
                            <button type="submit" class=" bg-red-500 px-4 py-1 text-sm rounded text-white font-semibold border border-red-200 hover:text-white  hover:border-transparent focus:outline-none" onsubmit="return confirm('yakin hapus')">
                                Delete</button>
                    </a>
                    @csrf
                    @method ('DELETE')
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach

        </tbody>
    </table>
</x-template-layout>