<x-template-layout>
    <h5 class="font-semibold text-x1 text-gray-800 leading-tight">
        {{$title}}
    </h5>
    <div class="shadow px-6 py-5 bg-white rounded sm:px-1 sm:py-1">
        <form action="{{(isset($restoran))?route('restoran.update', $restoran->id):route('restoran.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($restoran))
            @method('PUT')
            @endif
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700"> Gambar Profil </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    @if (isset($restoran) && $restoran->profil_resto!='')
                                    <img src="{{asset('storage/'.$restoran->profil_resto)}}" class="mx-auto h-12 w-12 text-gray-400 rounded" alt="">
                                    @else
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    @endif

                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="profil_resto" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="nama" class="block text-sm font-medium text-gray-700">
                                Nama Restoran
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="nama" value="{{(isset($restoran))?$restoran->nama:old('nama')}}" class="@error('nama') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                                </input>
                            </div>
                            <div class="text-xs text-red-600"> @error('nama') {{$message}} @enderror </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">
                                Alamat
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="alamat" value="{{(isset($restoran))?$restoran->alamat:old('alamat')}}" class="@error('alamat') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                                </input>
                            </div>
                            <div class="text-xs text-red-600"> @error('alamat') {{$message}} @enderror </div>
                        </div>

                        <!--                         
                        <div class="col-span-3 sm:col-span-2">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                                Deskripsi
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="deskripsi" value="{{(isset($data))?$data->deskripsi:old('deskripsi')}}" class="@error('deskripsi') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">

                                </input>
                            </div>
                            <div class="text-xs text-red-600"> @error('deskripsi') {{$message}} @enderror </div>
                        </div> -->
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