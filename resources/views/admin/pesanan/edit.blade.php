@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Pesanan</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('admin-pesanan.update',$pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="name_id" name="name_id" autocomplete="name_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('name_id',$data->name_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->nameId->name}}</option>
                    </select>
                    @error('name_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="username_id" name="username_id" autocomplete="username_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('username_id',$data->username_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->usernameId->username}}</option>
                    </select>
                    @error('username_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Origin -->
            <div>
                <label for="origin" class="block text-sm font-medium text-gray-700">Origin</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="origin" name="origin" autocomplete="origin" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('origin',$data->origin ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->originId->origin}}</option>
                    </select>
                    @error('origin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Destinasi -->
            <div>
                <label for="destinasi" class="block text-sm font-medium text-gray-700">Destinasi</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="destinasi" name="destinasi" autocomplete="destinasi" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('destinasi',$data->destinasi ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->destinasiId->destinasi}}</option>
                    </select>
                    @error('destinasi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Berat -->
            <div>
                <label for="berat" class="block text-sm font-medium text-gray-700">Berat</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="berat_id" name="berat_id" autocomplete="berat_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('berat_id',$data->berat_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->beratId->berat}}</option>
                    </select>
                    @error('berat_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="jenis_barang" class="block text-sm font-medium text-gray-700">Jenis Barang</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="jenis_barang_id" name="jenis_barang_id" autocomplete="jenis_barang_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('jenis_barang_id',$data->jenis_barang_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->jenisbarangId->jenis_barang}}</option>
                    </select>
                    @error('jenis_barang_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Note -->
            <div>
                <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                <div class="mt-1">
                    <textarea {{ old('note',$data->note ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}" rows="4" name="note" id="note" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>{{$pesanan->note}}</textarea>
                    @error('note')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="packing" class="block text-sm font-medium text-gray-700">Packing</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="packing" name="packing" autocomplete="packing" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('packing',$data->packing ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->packing}}</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    @error('packing')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Harga -->
            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="harga_id" name="harga_id" autocomplete="harga_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('harga_id',$data->harga_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->hargaId->harga}}</option>
                    </select>
                    @error('harga_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Voucher -->
            <div>
                <label for="voucher" class="block text-sm font-medium text-gray-700">Voucher</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="voucher_id" name="voucher_id" autocomplete="voucher_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('voucher_id',$data->voucher_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->voucherId->voucher}}</option>
                    </select>
                    @error('voucher_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Invoice -->
            <div>
                <label for="invoice_id" class="block text-sm font-medium text-gray-700">Invoice</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="invoice_id" name="invoice_id" autocomplete="invoice_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('invoice_id',$data->invoice_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->invoiceId->invoice}}</option>
                    </select>
                    @error('invoice_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Nomor resi -->
            <div>
                <label for="nomer_resi_id" class="block text-sm font-medium text-gray-700">Nomor Resi</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="nomer_resi_id" name="nomer_resi_id" autocomplete="nomer_resi_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('nomer_resi_id',$data->nomer_resi_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->nomerresiId->nomer_resi}}</option>
                    </select>
                    @error('nomer_resi_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Jenis Pembayaran -->
            <div>
                <label for="jenis_pembayaran_id" class="block text-sm font-medium text-gray-700">Jenis Pembayaran</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="jenis_pembayaran_id" name="jenis_pembayaran_id" autocomplete="jenis_pembayaran_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option {{ old('jenis_pembayaran_id',$data->jenis_pembayaran_id ?? '')  == $pesanan->id ?'selected': null }} value="{{$pesanan->id}}">{{$pesanan->jenispembayaranId->jenis_pembayaran}}</option>
                    </select>
                    @error('jenis_pembayaran_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control bg-light @error('gambar') is-invalid @enderror">
                        <img src="/gambar/pesanan/{{ $pesanan->gambar }}" width="300px">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
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