@extends('vendor.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Data Diri</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('data-diri.store') }}" method="POST">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Nama -->
            <div class="col-span-6 sm:col-span-3">
                <label for="vendor" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="vendor_id" name="vendor_id" autocomplete="vendor_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        @foreach ($getvendor as $item)
                        @if ($item->id == Auth::user()->id)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('vendor_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <!-- Coverage Area -->
            <div class="col-span-6 sm:col-span-3">
                <label for="vendor" class="block text-sm font-medium text-gray-700">Coverage Area</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="coverage_area" name="coverage_area" autocomplete="coverage_area" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        @foreach ($getcoverage as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('coverage_area')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>

            <!-- Nomor Whatsapp -->
            <div class="col-span-6 sm:col-span-3">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor Whatsapp</label>
                <div class="mt-1">
                    <input type="text" name="whatsapp" id="whatsapp" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nomor Whatsapp" required>
                    @error('whatsapp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>

            <!-- Nama Driver -->
            <div class="col-span-6 sm:col-span-3">
                <label for="nama_driver" class="block text-sm font-medium text-gray-700">Nama Driver</label>
                <div class="mt-1">
                    <input type="text" name="nama_driver" id="nama_driver" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nama Driver" required>
                    @error('nama_driver')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>

            <!-- Nopol Driver -->
            <div class="col-span-6 sm:col-span-3">
                <label for="nopol_driver" class="block text-sm font-medium text-gray-700">Nopol Driver</label>
                <div class="mt-1">
                    <input type="text" name="nopol_driver" id="nopol_driver" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nopol Driver" required>
                    @error('nopol_driver')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <!-- Foto KTP -->
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
            <br>

            <!-- Foto Unit -->
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_unit" class="block text-sm font-medium text-gray-700">Foto Unit</label>
                        <input type="file" name="foto_unit" class="form-control bg-light @error('foto_unit') is-invalid @enderror">
                        @error('foto_unit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>

            <!-- Foto SIM -->
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_sim" class="block text-sm font-medium text-gray-700">Foto SIM</label>
                        <input type="file" name="foto_sim" class="form-control bg-light @error('foto_sim') is-invalid @enderror">
                        @error('foto_sim')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>

            <!-- Foto STNK -->
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_stnk" class="block text-sm font-medium text-gray-700">Foto STNK</label>
                        <input type="file" name="foto_stnk" class="form-control bg-light @error('foto_stnk') is-invalid @enderror">
                        @error('foto_stnk')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <a href="{{ route('data-diri.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
        </div>
    </form>
</div>
@endsection