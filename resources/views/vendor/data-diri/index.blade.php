@extends('vendor.layouts.index')
@section('main')
<div class="py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <div class="py-4">
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">Profile Vendor</h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details {{Auth::user()->name}}.</p>
        </div>
        @foreach ($Vendor as $ven)
          @if ($ven->id == Auth::user()->id)
            @forelse ($dataVendor as $item)
              @if ($item->vendor_id == Auth::user()->id)
                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                  <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Nama</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $ven->name }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Email</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $ven->email }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Nomor Whatsapp</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->whatsapp }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Nama Driver</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->nama_driver }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Nomor Polisi Driver</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->nopol_driver }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Domisili Area</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->coverage->name }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Foto KTP</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->foto_ktp }}
                        <img src="{{url('/gambar/vendor/foto_ktp/'.$item->foto_ktp)}}" width="300">
                      </dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Foto Unit</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->foto_unit }}
                        <img src="{{url('/gambar/vendor/foto_unit/'.$item->foto_unit)}}" width="300">
                      </dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Foto SIM</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->foto_sim }}
                        <img src="{{url('/gambar/vendor/foto_sim/'.$item->foto_sim )}}" width="300">
                      </dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Foto STNK</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $item->foto_stnk }}
                        <img src="{{url('/gambar/vendor/foto_stnk/'.$item->foto_stnk)}}" width="300">
                      </dd>
                    </div>
                  </dl>
                </div>
                <div class="px-4 py-5 sm:px-6">
                  <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Data Diri</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                      <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                          <div class="w-0 flex-1 flex items-center">
                            <!-- Heroicon name: solid/paper-clip -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">Edit Data Diri</span>
                          </div>
                          <div class="ml-4 flex-shrink-0">
                            <a href="{{ route('data-diri.edit',$item->id) }}" class="font-medium text-indigo-600 hover:text-indigo-500"> Edit </a>
                          </div>
                        </li>
                      </ul>
                    </dd>
                  </div>
                </div>
              @elseif(empty($item->vendor_id == Auth::user()->id))
                <div class="px-4 py-5 sm:px-6">
                  <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Data Diri</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                      <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                          <div class="w-0 flex-1 flex items-center">
                            <!-- Heroicon name: solid/paper-clip -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">Isi Data Ktp</span>
                          </div>
                          <div class="ml-4 flex-shrink-0">
                            <a href="{{route('data-diri.create')}}" class="font-medium text-indigo-600 hover:text-indigo-500"> Isi </a>
                          </div>
                        </li>
                      </ul>
                    </dd>
                  </div>
                </div>
              @endif
            @empty
              <div class="px-4 py-5 sm:px-6">
                <div class="sm:col-span-2">
                  <dt class="text-sm font-medium text-gray-500">Data Diri</dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                      <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                          <!-- Heroicon name: solid/paper-clip -->
                          <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                          </svg>
                          <span class="ml-2 flex-1 w-0 truncate">Isi Data Ktp</span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                          <a href="{{route('data-diri.create')}}" class="font-medium text-indigo-600 hover:text-indigo-500"> Isi </a>
                        </div>
                      </li>
                    </ul>
                  </dd>
                </div>
              </div>
            @endforelse
          @endif
        @endforeach
      </div>
    </div>
    <!-- /End replace -->
  </div>
</div>
@endsection