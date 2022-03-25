@extends('affiliator.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Tambah Data Diri Anda</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('datadiri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <!-- Whatapps -->
            <div>
                <label for="whatapps" class="block text-sm font-medium text-gray-700">Whatapps</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="whatapps" id="whatapps" name="whatapps" autocomplete="whatapps" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" placeholder="Masukan nomer whatapps Anda" required />
                    @error('harga')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Foto Diri -->
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_ktp" class="block text-sm font-medium text-gray-700">Foto KTP</label>
                        <input type="file" name="foto_ktp" class="form-control bg-light @error('foto_ktp') is-invalid @enderror">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Foto NPWP -->
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_npwp" class="block text-sm font-medium text-gray-700">Foto NPWP</label>
                        <input type="file" name="foto_npwp" class="form-control bg-light @error('foto_npwp') is-invalid @enderror">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            </br>
            <a href="{{ route('pesanan.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Simpan</button>
        </div>
    </form>

</div>
@endsection