@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Informasi</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('admin-informasi.update',$informasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div>
                <label for="jenis_informasi" class="form-control block text-sm font-medium text-gray-700">Jenis Informasi</label>
                <div class="mt-1">
                    <input type="text" name="jenis_informasi" id="jenis_informasi" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Jenis Informasi" value="{{ old('jenis_informasi', $informasi->jenis_informasi) }}">
                    @error('jenis_informasi')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="isi" class="form-control block text-sm font-medium text-gray-700">Isi</label>
                <div class="mt-1">
                    <input type="text" name="isi" id="isi" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Isi" value="{{ old('isi', $informasi->isi) }}">
                    @error('isi')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <a href="{{ route('admin-informasi.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
        </div>
    </form>
</div>
@endsection