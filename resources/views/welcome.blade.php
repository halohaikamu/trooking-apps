<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6adea09fab.js" crossorigin="anonymous"></script>
</head>
<body>
 <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm font-medium truncate">Admin</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">Hanya untuk role admin</p>
                    </div>
                    <img class="w-auto h-24 bg-gray-300 rounded-full flex-shrink-0" src="https://www.lokersemar.id/wp-content/uploads/2021/06/Lowongan-Kerja-SPV-Operasional-di-PT.-Pilar-Utama-Transindo-252x219.png" alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/login/admin" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="ml-3">Login</span>
                        </a>
                    </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm font-medium truncate">Affiliator</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Affiliator</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">Hanya untuk role Affiliator</p>
                    </div>
                    <img class="w-auto h-24 bg-gray-300 rounded-full flex-shrink-0" src="https://www.lokersemar.id/wp-content/uploads/2021/06/Lowongan-Kerja-SPV-Operasional-di-PT.-Pilar-Utama-Transindo-252x219.png" alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/login/affiliator" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                        <!-- Heroicon name: solid/mail -->
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="ml-3">Login</span>
                        </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        <a href="/register/affiliator" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                        <i class="fa-solid fa-registered"></i>
                        <span class="ml-3">Register</span>
                        </a>
                    </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm font-medium truncate">Agent</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Agent</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">Hanya untuk role Agent</p>
                    </div>
                    <img class="w-auto h-24 bg-gray-300 rounded-full flex-shrink-0" src="https://www.lokersemar.id/wp-content/uploads/2021/06/Lowongan-Kerja-SPV-Operasional-di-PT.-Pilar-Utama-Transindo-252x219.png" alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/login/agent" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                        <!-- Heroicon name: solid/mail -->
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="ml-3">Login</span>
                        </a>
                    </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm font-medium truncate">User</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">User</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">Hanya untuk role User</p>
                    </div>
                    <img class="w-auto h-24 bg-gray-300 rounded-full flex-shrink-0" src="https://www.lokersemar.id/wp-content/uploads/2021/06/Lowongan-Kerja-SPV-Operasional-di-PT.-Pilar-Utama-Transindo-252x219.png" alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/login/user" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                        <!-- Heroicon name: solid/mail -->
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="ml-3">Login</span>
                        </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        <a href="/register/user" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                        <i class="fa-solid fa-registered"></i>
                        <span class="ml-3">Register</span>
                        </a>
                    </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm font-medium truncate">Vendor</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Vendor</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm truncate">Hanya untuk role Vendor</p>
                    </div>
                    <img class="w-auto h-24 bg-gray-300 rounded-full flex-shrink-0" src="https://www.lokersemar.id/wp-content/uploads/2021/06/Lowongan-Kerja-SPV-Operasional-di-PT.-Pilar-Utama-Transindo-252x219.png" alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="/login/vendor" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                        <!-- Heroicon name: solid/mail -->
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="ml-3">Login</span>
                        </a>
                    </div>
                    </div>
                </div>
            </li>
        </ul>
  
    </ul>
  
    </div>
  
  
</body>
</html>