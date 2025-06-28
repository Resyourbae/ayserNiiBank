<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Profile - Bank Aysernii</title>
    <style>
        .profile-hover:hover {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-gray-800">
    <!-- Sidebar Navigation -->
    <nav
        class="fixed left-0 top-0 h-full w-64 bg-gray-900 bg-opacity-90 border-r border-white shadow-lg z-50 rounded-tr-3xl rounded-br-3xl">
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center">
                <img src="{{ asset('img/shiroko_jilat_jilat.gif') }}" width="40" height="40" class="mr-2" alt="Logo">
                <span class="text-white font-bold text-lg">Bank Aysernii</span>
            </div>
            {{-- <!-- Notifikasi & Mini Profile -->
            <div class="flex items-center space-x-4">
                <!-- Notifikasi -->
                <button class="relative group focus:outline-none">
                    <svg class="w-6 h-6 text-gray-300 group-hover:text-white transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-xs text-white rounded-full px-1.5 py-0.5 animate-pulse">3</span>
                </button>
                <!-- Mini Profile Dropdown -->
                <div class="relative group">
                    <button class="flex items-center focus:outline-none">
                        <img src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('img/default-profile.png') }}"
                            class="w-8 h-8 rounded-full border-2 border-blue-400 object-cover" alt="Mini Profile">
                    </button>
                    <div
                        class="absolute right-0 mt-2 w-40 bg-gray-900 border border-gray-700 rounded-lg shadow-lg py-2 opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition-opacity z-50">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-200 hover:bg-gray-700">Profil
                            Saya</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-200 hover:bg-gray-700">Logout</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <ul class="flex flex-col space-y-4 p-4 text-gray-300">
            <li><a href="{{ route('dashboard') }}" class="hover:text-white flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a></li>
            <li><a href="{{ route('profile') }}" class="hover:text-white flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Profile</span>
                </a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-white flex items-center space-x-2 w-full text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="ml-64 min-h-screen p-8">
        <div class="max-w-4xl mx-auto">
            <!-- Flash Message -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
                    <div class="font-bold">Oops! Ada beberapa kesalahan:</div>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif <!-- Profile Card -->
            <div class="bg-gray-700 rounded-2xl p-8 shadow-lg">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="relative group">
                        <div class="w-16 h-16 rounded-full overflow-hidden bg-blue-500 flex items-center justify-center cursor-pointer profile-hover"
                            onclick="showProfilePhotoModal()">
                            @if(auth()->user()->photo)
                                <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="Profile Picture"
                                    class="w-full h-full object-cover">
                            @else
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            @endif
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-60 transition-opacity rounded-full">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold text-white">Profil Pengguna</h1>
                </div>

                <!-- Profile Information -->
                <div class="space-y-6">
                    <div class="border-b border-gray-600 pb-4">
                        <p class="text-gray-400 text-sm mb-1">Nama Lengkap</p>
                        <p class="text-white text-lg">{{ auth()->user()->nama }}</p>
                    </div>

                    <div class="border-b border-gray-600 pb-4">
                        <p class="text-gray-400 text-sm mb-1">Email</p>
                        <p class="text-white text-lg">{{ auth()->user()->email }}</p>
                    </div>

                    <div class="border-b border-gray-600 pb-4">
                        <p class="text-gray-400 text-sm mb-1">Nomor Telepon</p>
                        <p class="text-white text-lg">{{ auth()->user()->no_hp }}</p>
                    </div>

                    <div>
                        <p class="text-gray-400 text-sm mb-1">Saldo</p>
                        <p class="text-green-400 text-2xl font-bold">Rp
                            {{ number_format(auth()->user()->saldo, 2, ',', '.') }}
                        </p>
                    </div>
                </div>

                <!-- Edit Profile Button -->
                <div class="mt-8 flex justify-end">
                    <button onclick="showEditModal()"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition duration-300">
                        Edit Profil
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-gray-800 w-full max-w-md p-6 rounded-2xl shadow-xl relative">
                <button onclick="closeEditModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 class="text-2xl font-bold text-white mb-6">Edit Profil</h2>
                <form method="POST" action="{{ route('profile.update') }}" class="space-y-4"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-gray-300 mb-2">Foto Profil</label>
                        <input type="file" name="photo" accept="image/*"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div> <label class="block text-gray-300 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ auth()->user()->nama }}"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" value="{{ auth()->user()->email }}"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Password Baru (kosongkan jika tidak ingin
                            mengubah)</label>
                        <input type="password" name="password"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Nomor Telepon</label>
                        <input type="text" name="phone" value="{{ auth()->user()->no_hp }}"
                            class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div> <!-- Profile Photo Modal -->
    <div id="profilePhotoModal" class="fixed inset-0 backdrop-blur-sm bg-black bg-opacity-70 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div
                class="bg-gray-800 bg-opacity-50 w-full max-w-lg p-6 rounded-2xl shadow-2xl relative border border-gray-700">
                <button onclick="closeProfilePhotoModal()"
                    class="absolute -top-3 -right-3 text-gray-400 hover:text-white bg-gray-800 rounded-full p-2 border border-gray-700 shadow-lg transition-all duration-200 hover:scale-110">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Full size photo view -->
                <div id="photoView" class="mb-6">
                    @if(auth()->user()->photo)
                        <div class="relative group">
                            <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="Profile Picture"
                                class="w-full h-auto max-h-[60vh] object-contain rounded-lg shadow-xl transition-transform duration-300 group-hover:scale-[1.02]">
                            <div
                                class="absolute inset-0 rounded-lg bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300">
                            </div>
                        </div>
                    @else
                        <div
                            class="w-full h-64 bg-gray-700 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-600">
                            <div class="text-center">
                                <svg class="w-20 h-20 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <p class="text-gray-400">Belum ada foto profil</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Actions -->
                <div class="flex justify-center space-x-4">
                    <form method="POST" action="{{ route('profile.updatePhoto') }}" class="flex-1"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center space-x-4">
                            <input type="file" name="photo" id="photoInput" accept="image/*" class="hidden"
                                onchange="this.form.submit()">
                            <button type="button" onclick="document.getElementById('photoInput').click()"
                                class="flex-1 bg-blue-500 text-white py-3 px-4 rounded-lg hover:bg-blue-600 transition-all duration-200 transform hover:scale-[1.02] flex items-center justify-center space-x-2 shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <span>Ganti Foto</span>
                            </button>
                        </div>
                    </form>
                    @if(auth()->user()->photo)
                        <form method="POST" action="{{ route('profile.deletePhoto') }}" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-500 text-white py-3 px-4 rounded-lg hover:bg-red-600 transition-all duration-200 transform hover:scale-[1.02] flex items-center justify-center space-x-2 shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <span>Hapus Foto</span>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEditModal() {
            document.getElementById('editProfileModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editProfileModal').classList.add('hidden');
        }

        function showProfilePhotoModal() {
            document.getElementById('profilePhotoModal').classList.remove('hidden');
        }

        function closeProfilePhotoModal() {
            document.getElementById('profilePhotoModal').classList.add('hidden');
        }
    </script>

</body>

</html>