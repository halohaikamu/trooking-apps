@extends('admin.layouts.index')
@section('main')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Detail pricelist</h3>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Origin</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pricelist->originId->name }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Destinasi</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pricelist->destinasiId->name }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Dimensi</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pricelist->dimensi }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Berat</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pricelist->berat }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Harga</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pricelist->harga }}</dd>
      </div>
    </dl>
  </div>
  <a type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('pricelist.index')}}">Kembali</a>
</div>
@endsection