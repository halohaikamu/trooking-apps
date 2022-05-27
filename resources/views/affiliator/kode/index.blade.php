@extends('affiliator.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Kode Affiliator</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Kode Affiliator</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Selamat datang {{Auth::user()->name}}</p>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">AFTRK2004220001 </p>
                </div>
            </div>
        </div>
        <!-- /End replace -->
    </div>
</div>
@endsection