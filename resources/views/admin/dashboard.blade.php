@extends('admin.layouts.index')
@section('main')
<div class="py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <!-- Replace with your content -->
    <div class="py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
      </div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
          <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
              <h3 class="text-lg leading-6 font-medium text-gray-900">Profile User</h3>
              <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details.</p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
              <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                @foreach ($user as $item)
                @if ($item->id == Auth::user()->id)
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">Nama</dt>
                  <dd class="mt-1 text-sm text-gray-900">{{ $item->name }}</dd>
                </div>
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">Email</dt>
                  <dd class="mt-1 text-sm text-gray-900">{{ $item->email }}</dd>
                </div>
                <div class="sm:col-span-2">
                  <dt class="text-sm font-medium text-gray-500">Ganti Email / Password</dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                      <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                          <!-- Heroicon name: solid/paper-clip -->
                          <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                          </svg>
                          <span class="ml-2 flex-1 w-0 truncate"> Email </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Ganti </a>
                        </div>
                      </li>
                      <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                          <!-- Heroicon name: solid/paper-clip -->
                          <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                          </svg>
                          <span class="ml-2 flex-1 w-0 truncate"> Password </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Ganti </a>
                        </div>
                      </li>
                    </ul>
                  </dd>
                </div>
                @endif
                @endforeach
              </dl>
            </div>
          </div>
    
    
        </div>
        <!-- /End replace -->
      </div>
    </div>
    <!-- /End replace -->
  </div>
</div>

@endsection