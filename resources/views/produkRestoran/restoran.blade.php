<x-template-layout>
    <h8 class="font-semibold text-x3 text-gray-800 leading-tight">
        DATA RESTORAN
    </h8>
    <div class="shadow px-10 py-10 bg-white rounded sm:px-5 sm:py-1">
        <div class="grid grid-cols-12">

            <div class="col-span-6 p-4">
                <a href="{{route('menu.create')}}"><button class="inline-flex justify-center py-2 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Tambah Data</button></a>
            </div>
            <div class="col-span-6 p-4 flex justify-end">
                <form action="{{route('search')}}" method="GET">
                    <input type="text" name="query" value="{{request('keyword')}}" placeholder="Search" class="px-4 py-2focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-sm border-gray-300">
                    <button type="submit" class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-blue-600 hover:text-white hover:bg-blue-600">Cari</button>
                </form>
            </div>

        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg m-2">

            <table class="table-fixed w-full  table table-striped table-bordered">
                <thead class=" bg-gray-600">

                    <tr class="text-lg text-left">
                        <th class="px-3 py-3 text-white">Profil</th>
                        <th class="px-3 py-3 text-white">Nama Restoran</th>
                        <th class="px-3 py-3 text-white">Alamat</th>
                        <th class="px-3 py-3 text-white">Menu Restoran</th>
                        <th class="px-3 py-3 text-white"></th>
                        <th class="px-3 py-3 text-white">Action</th>

                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($restoran as $restoran)
                    <tr>
                    <td class="px-3 py-3">
                            <img src="{{asset('storage/'.$restoran->profil_resto)}}" class="w-12" alt=""></img>
                        </td>
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
                            <a href="{{route('restoran.edit',$restoran->id)}}"><button class="bg-green-500 px-4 py-1 text-sm rounded text-white font-semibold border border-red-200 hover:text-white  hover:border-transparent focus:outline-none">
                                    Edit </button>

                                <form action="{{route('restoran.destroy',$restoran->id)}}" method="POST" class="inline">
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