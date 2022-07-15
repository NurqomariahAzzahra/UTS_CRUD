<x-template-layout>
    <h2 class="font-semibold text-x1 text-gray-800 leading-tight">

        Data Saya
    </h2>
    <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
        <div class="grid grid-cols-12">
            <div class="col-span-6 p-4">
                <a href="{{route('data.create')}}"><button class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Tambah Data</button></a>
            </div>

            <div class="col-span-6 p-4 flex justify-end">
                <form action="{{route('search')}}" method="GET">
                    <input type="text" name="query" value="{{request('keyword')}}" placeholder="Search" class="px-4 py-2focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-sm border-gray-300">
                    <button type="submit" class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-blue-600 hover:text-white hover:bg-blue-600">Cari</button>
                </form>
            </div>

        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg m-3">

            <table class="table-fixed w-full">
                <thead class="bg-gray-600">

                    <tr class="text-lg text-left">
                        <th class="px-3 py-3 text-white">Nama Produk</th>
                        <th class="px-3 py-3 text-white">Gambar</th>
                        <th class="px-3 py-3 text-white">Categori</th>
                        <th class="px-3 py-3 text-white">Harga</th>
                        <th class="px-3 py-3 text-white">Deskripsi</th>
                        <th class="px-3 py-3 text-white"></th>
                        <th class="px-3 py-3 text-white">Action</th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($data as $item)
                    <tr>

                        <td>{{$item->nama_produk}}</td>
                        <td>{{$item->gambar}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td></td>

                        <td>
                            <a href="{{route('data.edit',$item->id)}}"><button class="bg-green-500 px-4 py-1 text-sm rounded text-white font-semibold border border-red-200 hover:text-white  hover:border-transparent focus:outline-none">
                                    Edit </button>

                                <form action="{{route('data.destroy',$item->id)}}" method="POST" class="inline">
                                    <button type="submit" class=" bg-red-500 px-4 py-1 text-sm rounded text-white font-semibold border border-red-200 hover:text-white  hover:border-transparent focus:outline-none" onsubmit="return confirm('yakin hapus')">
                                        Delete</button>
                            </a>
                            @csrf
                            @method ('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
</x-template-layout>