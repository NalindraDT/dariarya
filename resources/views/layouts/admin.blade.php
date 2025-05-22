<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('styles')
</head>

<body class="bg-gray-50 text-gray-800">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-black bg-opacity-40 lg:hidden"></div>

        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed z-30 w-64 h-full px-4 py-6 transition-transform transform bg-white border-r shadow-lg lg:translate-x-0 lg:static">
            <div class="text-center mb-10">
                <h2 class="text-xl font-bold text-indigo-600">Admin Panel</h2>
            </div>

            <nav class="space-y-2 text-sm">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-indigo-100 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
                    <i class="fas fa-house mr-3"></i> Dashboard
                </a>

                <a href="{{ route('matkul.index') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('matkul.*') ? 'bg-indigo-100 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
                    <i class="fas fa-user-tie mr-3"></i> Prodi
                </a>

                <a href="{{ route('mahasiswa.index') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('mahasiswa.*') ? 'bg-indigo-100 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
                    <i class="fas fa-user-graduate mr-3"></i> Mahasiswa
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1">
            <!-- Header -->
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b shadow-sm">
                <button @click="sidebarOpen = true" class="text-gray-500 lg:hidden">
                    <i class="fas fa-bars text-lg"></i>
                </button>

                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center gap-2 focus:outline-none">
                        <i class="fas fa-user-circle text-2xl text-gray-600"></i>
                    </button>

                    <div x-show="open" @click.outside="open = false" class="absolute right-0 z-10 mt-2 w-40 bg-white rounded-lg shadow-md">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-50 text-gray-700">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-50 text-gray-700">Logout</a>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto">
                <div class="p-6">
                    @if(session('success'))
                    <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg border border-green-200 animate-fade-in-down">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="p-4 mb-4 text-red-800 bg-red-100 rounded-lg border border-red-200 animate-fade-in-down">
                        {{ session('error') }}
                    </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <style>
        [x-cloak] {
            display: none;
        }

        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.3s ease-out;
        }
    </style>

    @yield('scripts')
</body>

</html>