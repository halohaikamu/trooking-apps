@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Pesanan</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('admin-payments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" id="name" name="name" autocomplete="name" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" placeholder="Nama Lengkap" required />
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Jumlah -->
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Harga</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" id="amount" name="amount" autocomplete="amount" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" placeholder="Harga" required />
                    @error('harga')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Jenis Pembayaran -->
            <div>
                <label for="bank_code" class="block text-sm font-medium text-gray-700">Jenis Pembayaran</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="bank_code" name="bank_code" autocomplete="bank_code" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option value="">Pilih Pembayaran</option>
                        <option value="BCA">Bank BCA</option>
                        <option value="BNI">Bank BNI</option>
                        <option value="BRI">Bank BRI</option>
                        <option value="BSI">Bank BSI</option>
                        <option value="CIMB">Bank CIMB</option>
                        <option value="MANDIRI">Bank Mandiri</option>
                    </select>
                    @error('bank_code')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </br>
            <a href="{{ route('admin-pesanan.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Pembayaran</button>
        </div>
    </form>

</div>
@endsection
