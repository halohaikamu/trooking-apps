@extends('vendor.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Data Diri</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('data-diri.store') }}" method="POST">
        @csrf  
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div>
                <label for="vendor" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="vendor_id" name="vendor_id" autocomplete="vendor_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getvendor as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
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
            <div>
                <label for="vendor" class="block text-sm font-medium text-gray-700">Coverage Area</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="coverage_area" name="coverage_area" autocomplete="coverage_area" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getcoverage as $item)
                         
                        <option value="{{ old('coverage_area') ?? $getdata->coverage_area ?? null}}">{{$item->name}}</option>
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
            <div>
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor Whatsapp</label>
                <div class="mt-1">
                    <input type="text" name="whatsapp" value="{{ old('whatsapp') ?? $getdata->whatsapp ?? null}}" id="whatsapp" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Nomor Whatsapp" required>
                    @error('whatsapp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <div>
                <label for="nama_driver" class="block text-sm font-medium text-gray-700">Nama Driver</label>
                <div class="mt-1">
                    <input type="text" name="nama_driver" value="{{ old('nama_driver') ?? $getdata->nama_driver ?? null}}" id="nama_driver" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Nama Driver" required>
                    @error('nama_driver')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <div>
                <label for="nopol_driver" class="block text-sm font-medium text-gray-700">Nopol Driver</label>
                <div class="mt-1">
                    <input type="text" name="nopol_driver" value="{{ old('nopol_driver') ?? $getdata->nopol_driver ?? null}}" id="nopol_driver" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Nopol Driver" required>
                    @error('nopol_driver')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_ktp" class="block text-sm font-medium text-gray-700">Foto KTP</label>
                        <input type="file" name="foto_ktp" value="{{ old('foto_ktp') ?? $getdata->foto_ktp ?? null}}" class="form-control bg-light @error('foto_ktp') is-invalid @enderror">
                        @error('foto_ktp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_unit" class="block text-sm font-medium text-gray-700">Foto Unit</label>
                        <input type="file" name="foto_unit" value="{{ old('foto_unit') ?? $getdata->foto_unit ?? null}}" class="form-control bg-light @error('foto_unit') is-invalid @enderror">
                        @error('foto_unit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_sim" class="block text-sm font-medium text-gray-700">Foto SIM</label>
                        <input type="file" name="foto_sim" value="{{ old('foto_sim') ?? $getdata->foto_sim ?? null}}" class="form-control bg-light @error('foto_sim') is-invalid @enderror">
                        @error('foto_sim')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <div>
                <div>
                    <div class="form-group">
                        <label for="foto_stnk" class="block text-sm font-medium text-gray-700">Foto STNK</label>
                        <input type="file" name="foto_stnk" value="{{ old('foto_stnk') ?? $getdata->foto_stnk ?? null}}" class="form-control bg-light @error('foto_stnk') is-invalid @enderror">
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