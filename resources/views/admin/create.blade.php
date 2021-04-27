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
                            <label for="nama" class="block text-sm font-medium text-gray-700">
                                Nama Mahasiswa
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="nama" value="{{(isset($data))?$data->nama:old('nama')}}" class="@error('nama') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                            </div>
                            <div class="text-xs text-red-600"> @error('nama') {{$message}} @enderror </div>
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            NIM
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="nim" value="{{(isset($data))?$data->nim:old('nim')}}" class="@error('nim') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                        </div>
                        <div class="text-xs text-red-600"> @error('nim') {{$message}} @enderror </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Program Studi
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="prodi" value="{{(isset($data))?$data->prodi:old('prodi')}}" class="@error('prodi') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                            </input>
                        </div>
                        <div class="text-xs text-red-600"> @error('prodi') {{$message}} @enderror </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Jurusan
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="jurusan" value="{{(isset($data))?$data->jurusan:old('jurusan')}}" class="@error('jurusan') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                            </input>
                        </div>
                        <div class="text-xs text-red-600"> @error('jurusan') {{$message}} @enderror </div>
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