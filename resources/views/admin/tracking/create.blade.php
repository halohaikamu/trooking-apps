@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Tracking</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('tracking.store') }}" method="POST">
        @csrf  
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div>
                <label for="nomer_resi" class="block text-sm font-medium text-gray-700">Nomer Resi</label>
                <div class="mt-1">
                    <input type="text" name="nomer_resi" id="nomer_resi" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="nomer_resi" required>
                    @error('nomer_resi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <div class="mt-1">
                    <select id="status" name="status" autocomplete="status" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option value="">== Select Status ==</option>
                        <option value="sukses">Sukses</option>
                        <option value="gagal">Gagal</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <a href="{{ route('tracking.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
        </div>
    </form>
</div>
@endsection