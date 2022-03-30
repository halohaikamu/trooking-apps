@extends('affiliator.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Tambah Data Diri Anda</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('affiliator-data-diri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="col-span-6 sm:col-span-3">
                <label for="vendor" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="affiliator_id" name="affiliator_id" autocomplete="affiliator_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        @foreach ($getaffiliator as $item)
                        @if($item->id == Auth::user()->id)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('affiliator_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Whatapps -->
            <div class="col-span-6 sm:col-span-3">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Whatapps</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" id="whatsapp" name="whatsapp" autocomplete="whatsapp" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukan nomer whatapps Anda" required />
                    @error('whatapp')
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
                        @error('foto_ktp')
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
                        @error('foto_npwp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            </br>
            <a href="{{ route('affiliator-data-diri.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Simpan</button>
        </div>
    </form>

</div>
@endsection