@extends('user.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Cek Ongkir</h1>
    </div>
    <form class="space-y-8 divide-y divide-gray-200" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Origin -->
            <div>
                <label for="origin" class="block text-sm font-medium text-gray-700">Kota Asal</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select onchange="fillPrice()" id="origin" name="origin" autocomplete="origin" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getorigin as $item)
                        <option value="{{$item->originId->id}}">{{$item->originId->name}}</option>
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
                <label for="destinasi" class="block text-sm font-medium text-gray-700">Kota Destinasi</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select onchange="fillPrice()" id="destinasi" name="destinasi" autocomplete="destinasi" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
                        @foreach ($getdestinasi as $item)
                        <option value="{{$item->destinasiId->id}}">{{$item->destinasiId->name}}</option>
                        @endforeach
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
                    <select onchange="fillPrice()" id="berat_id" name="berat_id" autocomplete="berat_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
						<option value="">Masukan Berat dalam Kg</option>
						@foreach ($getberat as $item)
                        <option value="{{$item->berat}}">{{$item->berat}}</option>
                        @endforeach
                    </select>
                    @error('berat_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Jenis Barang -->
            <div>
                <label for="jenis_barang" class="block text-sm font-medium text-gray-700">Jenis Barang</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="jenis_barang_id" name="jenis_barang_id" autocomplete="jenis_barang_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
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
            <!-- Dimensi -->
            <div>
                <label for="dimensi" class="block text-sm font-medium text-gray-700">Dimensi</label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="dimensi_id" name="dimensi_id" autocomplete="dimensi_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required>
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
                    <input type="text" id="harga_id" name="harga_id" autocomplete="harga_id" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md" required readonly/>
                    @error('harga_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            </br>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
            $('#origin').select2();
            $('#destinasi').select2();
        });
    console.log("TEST")
    
    $pricelist = [
        @foreach ($getpricelist as $item)
            {
                "origin": {{$item->origin}},
                "destinasi": {{$item->destinasi}},
                    @if(is_null($item->berat))
                    "berat": 0,
                    @else 
                    "berat": {{$item->berat}},
                    @endif
                "harga": {{$item->harga}}
            },
        @endforeach
    ]
    function fillPrice(){
        var origin =+ document.getElementById("origin").value
        var destinasi =+ document.getElementById("destinasi").value
        var berat_id =+ document.getElementById("berat_id").value

        let price = $pricelist.find(price => price.origin === origin && price.destinasi === destinasi && price.berat === berat_id);
        
        document.getElementById("harga_id").value = price.harga
    }
    
    
</script>
@endsection
