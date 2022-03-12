@extends('admin.layouts.index')
@section('main')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Informasi</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="space-y-8 divide-y divide-gray-200" action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div>
                <label for="name" class="form-control block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Nama" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="email" class="form-control block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1">
                    <input type="text" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Email" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="password" class="form-control block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1">
                    <input type="text" name="password" id="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Password" value="{{ old('password', $user->password) }}">
                    @error('password')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <a href="{{ route('user.index') }}" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </a>
            <button type="submit" class="mt-12 w-full px-8 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
        </div>
    </form>
</div>
@endsection