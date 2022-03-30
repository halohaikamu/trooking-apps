@extends('admin.layouts.index')
@section('main')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-6">
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2">
              <a type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('admin-pesanan.create')}}">Tambah</a>
            </div>
            {{-- <div class="col-span-7">
                <form action="{{ route('pesanan.index') }}" method="GET">
            <input type="text" name="search" class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white" placeholder="ketik jenis pesanan dan enter">
            </form>
          </div> --}}
        </div>

        @if ($message = Session::get('success'))
        <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
          {{ $message }}
        </div>
        @endif
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Origin</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destinasi</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($pesanan as $item)
            <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->nameId->name }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->usernameId->username }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->originId->origin }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->originId->destinasi }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img src="{{url('/gambar/pesanan/'.$item->gambar)}}" width="150"></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus ?');" action="{{ route('admin-pesanan.destroy',$item->id) }}" method="POST">
                  <button class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><a href="{{ route('admin-pesanan.show',$item->id) }}">SHOW</a></button>
                  {{-- <button class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><a href="{{ route('pesanan.edit',$item->id) }}">EDIT</a></button> --}}
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
              Data Belum Tersedia!
            </div>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{!! $pesanan->links() !!}
</div>

@endsection