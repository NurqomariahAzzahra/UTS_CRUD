<x-template-layout>
    <h1 class="font-semibold text-x1 text-gray-800 leading-tight">
        {{$title}}
    </h1>
    <div class="shadow px-6 py-5 bg-white rounded sm:px-1 sm:py-1">
        <form action="{{(isset($data))?route('data.update', $data->id):route('data.store')}}" method="POST">
            @csrf
            @if (isset($data))
            @method('PUT')
            @endif
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="nama_produk" class="block text-sm font-medium text-gray-700">
                                Nama Produk
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="nama_produk" value="{{(isset($data))?$data->nama_produk:old('nama_produk')}}" class="@error('nama_produk') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                            </div>
                            <div class="text-xs text-red-600"> @error('nama_produk') {{$message}} @enderror </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700"> Photo </label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">
                            Gambar Produk
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="gambar" value="{{(isset($data))?$data->gambar:old('gambar')}}" class="@error('gambar') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                        </div>
                        <div class="text-xs text-red-600"> @error('gambar') {{$message}} @enderror </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">
                            Categori
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="kategori" value="{{(isset($data))?$data->kategori:old('kategori')}}" class="@error('kategori') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                            </input>
                        </div>
                        <div class="text-xs text-red-600"> @error('kategori') {{$message}} @enderror </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="harga" class="block text-sm font-medium text-gray-700">
                            Harga
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="harga" value="{{(isset($data))?$data->harga:old('harga')}}" class="@error('harga') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                            </input>
                        </div>
                        <div class="text-xs text-red-600"> @error('harga') {{$message}} @enderror </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                            Deskripsi
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="deskripsi" value="{{(isset($data))?$data->deskripsi:old('deskripsi')}}" class="@error('deskripsi') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                            </input>
                        </div>
                        <div class="text-xs text-red-600"> @error('deskripsi') {{$message}} @enderror </div>
                    </div>
                </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-secondary shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
            </div>
        </form>
    </div>
    </div>
</x-template-layout>