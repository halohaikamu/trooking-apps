@extends('affiliator.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Data Diri</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('datadiri.update',$getdata->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div>
                <label for="affiliator" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="affiliator_id" name="affiliator_id" autocomplete="affiliator_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getaffiliator as $item)
                        @if ($item->id == Auth::user()->id)
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
            <br>
            <div>
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor Whatsapp</label>
                <div class="mt-1">
                    <input type="text" name="whatsapp" value="{{ $getdata->whatsapp }}" id="whatsapp" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                    @error('whatsapp')
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
                        <input type="file" name="foto_ktp" value="{{ $getdata->foto_ktp }}" class="form-control bg-light @error('foto_ktp') is-invalid @enderror">
                        <h7>{{ $getdata->foto_ktp}}</h7>
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
                        <label for="foto_npwp" class="block text-sm font-medium text-gray-700">Foto Unit</label>
                        <input type="file" name="foto_npwp" value="{{ old('foto_npwp') ?? $getdata->foto_npwp ?? null}}" class="form-control bg-light @error('foto_npwp') is-invalid @enderror">
                        <h7>{{ $getdata->foto_npwp}}</h7>
                        @error('foto_npwp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <a href="{{ route('datadiri.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
        </div>
    </form>
</div>
@endsection