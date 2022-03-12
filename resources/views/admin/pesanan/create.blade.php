@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Pesanan</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('pesanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="name_id" name="name_id" autocomplete="name_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getname as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
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
                        @foreach ($getusername as $item)
                        <option value="{{$item->id}}">{{$item->username}}</option>
                        @endforeach
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
                        {{-- @foreach ($getorigin as $item)
                        <option value="{{$item->id}}">{{$item->originId->name}}</option>
                        @endforeach --}}
                        <option value="">== Select Origin ==</option>
                        @foreach ($origins as $id => $origin)
                        <option value="{{ $id }}">{{ $origin }}</option>
                        @endforeach
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
                    <select id="destinasi" name="destinasi" autocomplete="destinasi" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        <option value="">== Select Destinasi ==</option>
                        {{-- @foreach ($getdestinasi as $item)
                        <option value="{{$item->id}}">{{$item->destinasiId->name}}</option>
                        @endforeach --}}
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
                    <select id="berat_id" name="berat_id" autocomplete="berat_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        @foreach ($getberat as $item)
                        <option value="{{$item->id}}">{{$item->berat}}</option>
                        @endforeach
                    </select>
                    @error('berat_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Dimensi -->
            <div>
                <label for="dimensi" class="block text-sm font-medium text-gray-700">Dimensi</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="dimensi_id" name="dimensi_id" autocomplete="dimensi_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        @foreach ($getdimensi as $item)
                        <option value="{{$item->id}}">{{$item->dimensi}}</option>
                        @endforeach
                    </select>
                    @error('dimensi_id')
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
                    <select id="harga_id" name="harga_id" autocomplete="harga_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        @foreach ($getharga as $item)
                        <option value="{{$item->id}}">{{$item->harga}}</option>
                        @endforeach
                    </select>
                    @error('harga_id')
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
                        <option value="">== Select Jenis Barang ==</option>
                        @foreach ($getjenisbarang as $item)
                        <option value="{{$item->id}}">{{$item->jenis_barang}}</option>
                        @endforeach
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
                    <textarea rows="4" name="note" id="note" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required></textarea>
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
                        <option value="">== Select Packing ==</option>
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
            <!-- Voucher -->
            <div>
                <label for="voucher" class="block text-sm font-medium text-gray-700">Voucher</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="voucher_id" name="voucher_id" autocomplete="voucher_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        <option value="">== Select Voucher ==</option>
                        @foreach ($getvoucher as $item)
                        <option value="{{$item->id}}">{{$item->voucher}}</option>
                        @endforeach
                    </select>
                    @error('voucher_id')
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
                        <option value="">== Select Jenis Pembayaran ==</option>
                        @foreach ($getjenispembayaran as $item)
                        <option value="{{$item->id}}">{{$item->jenis_pembayaran}}</option>
                        @endforeach
                    </select>
                    @error('jenis_pembayaran_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control bg-light @error('gambar') is-invalid @enderror">
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </br>
            <a href="{{ route('pesanan.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Pembayaran</button>
        </div>
    </form>

</div>
@endsection

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     $('#origin').select2();
        //     $('#destinasi').select2();
        // });
        $(function () {
            $('#origin').on('change', function () {
                axios.post('{{ route('admin.pesanan.getDestinasi') }}', {id: $(this).val()})
                    .then(function (response) {
                        $('#destinasi').empty();

                        $.each(response.data, function (id, destinasi) {
                            $('#destinasi').append(new Option(destinasi, id))
                        })
                    });
            });
        });
        // $('#origin').change(function() {
        // var originID = $(this).val();
        // if (originID) {
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ url('admin.pesanan.getDestinasi') }}?id=" + originID,
        //         success: function(res) {
        //             if (res) {
        //                 $("#destinasi").empty();
        //                 $("#destinasi").append('<option>Select destinasi</option>');
        //                 $.each(res, function(key, value) {
        //                     $("#destinasi").append('<option value="' + key + '">' + value +
        //                         '</option>');
        //                 });
        //             } else {
        //                 $("#destinasi").empty();
        //             }
        //         }
        //     });
        // } else {
        //     $("#destinasi").empty();
        // }
        // });
    </script>
@endpush
