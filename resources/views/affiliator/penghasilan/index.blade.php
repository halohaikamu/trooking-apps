@extends('affiliator.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Penghasilan Affiliator</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Penghasilan Affiliator</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Selamat datang {{Auth::user()->name}}</p>
                </div>
            </div>
        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            @if ($message = Session::get('success'))
            <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                {{ $message }}
            </div>
            @endif
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">id_pesanan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">invoice</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Affiliator</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">f2de68d4-e863-454b-8bb3-bdc1fdf901a1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Imam Syafii</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rp. 300.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /End replace -->
    </div>
</div>
@endsection