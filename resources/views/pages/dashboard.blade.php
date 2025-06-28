<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Dashboard - Bank Aysernii</title>
</head>

<body class="bg-gray-800">

    <!-- Sidebar Navigation -->
    <!-- Sidebar ini digunakan untuk navigasi utama aplikasi -->
    <nav
        class="fixed left-0 top-0 h-full w-64 bg-gray-900 bg-opacity-90 border-r border-white shadow-lg z-50 rounded-tr-3xl rounded-br-3xl">
        <div class="flex items-center p-4">
            <!-- Logo dan nama aplikasi -->
            <img src="{{ asset('img/shiroko_jilat_jilat.gif') }}" width="40" height="40" class="mr-2" alt="Logo">
            <span class="text-white font-bold text-lg">Bank Aysernii</span>
        </div>
        <ul class="flex flex-col space-y-4 p-4 text-gray-300">
            <!-- Link ke halaman dashboard -->
            <li><a href="{{ route('dashboard') }}" class="hover:text-white flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a></li>
            <!-- Link ke halaman profil -->
            <li><a href="{{ route('profile') }}" class="hover:text-white flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Profile</span>
                </a></li>
            <!-- Tombol logout -->
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
    </nav> <!-- Main Content -->
    <div class="ml-64 min-h-screen p-8 overflow-y-auto relative">
        <!-- Notifikasi & Mini Profile di pojok kanan atas dashboard -->
        <div class="absolute top-6 right-10 z-50">
            <div class="flex items-center space-x-4 bg-white/10 backdrop-blur-md border border-blue-400/30 shadow-2xl rounded-2xl px-5 py-2 transition-all duration-300"
                style="box-shadow:0 8px 32px 0 rgba(31,38,135,0.37);">
                <!-- Tombol notifikasi, menampilkan jumlah notifikasi -->
                <button class="relative group focus:outline-none hover:scale-110 transition-transform duration-200">
                    <svg class="w-7 h-7 text-blue-200 group-hover:text-blue-400 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute -top-2 -right-2 bg-gradient-to-tr from-pink-500 via-red-500 to-yellow-500 text-xs text-white rounded-full px-2 py-0.5 animate-bounce shadow-lg border-2 border-white">3</span>
                </button>
                <!-- Mini Profile Dropdown, menampilkan foto dan menu profil/logout -->
                <div class="relative group">
                    <button class="flex items-center focus:outline-none group/avatar">
                        <span
                            class="inline-block rounded-full p-1 bg-gradient-to-tr from-blue-400 via-purple-400 to-pink-400 group-hover/avatar:shadow-lg group-hover/avatar:ring-2 group-hover/avatar:ring-blue-300 transition-all duration-300">
                            <img src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('img/default-profile.png') }}"
                                class="w-9 h-9 rounded-full object-cover border-2 border-white shadow-md"
                                alt="Mini Profile">
                        </span>
                    </button>
                    <div class="absolute right-0 mt-3 w-44 bg-white/20 backdrop-blur-md border border-blue-400/30 rounded-xl shadow-xl py-2 opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-focus:opacity-100 group-focus:scale-100 transition-all duration-300 z-50"
                        style="box-shadow:0 8px 32px 0 rgba(31,38,135,0.37);">
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-gray-900 hover:bg-blue-100 rounded-lg transition">Profil
                            Saya</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-900 hover:bg-blue-100 rounded-lg transition">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Balance Card -->
        <!-- Kartu saldo, menampilkan saldo user -->
        <div class="bg-gray-700 rounded-2xl p-6 shadow-lg mb-8 relative mt-20 pr-40">
            <div class="flex items-center">
                <div>
                    <h2 class="text-xl font-semibold text-white mb-2">Saldo Anda</h2>
                    <p class="text-3xl font-bold text-green-400">Rp
                        {{ number_format(auth()->user()->saldo, 2, ',', '.') }}
                    </p>
                </div>
                <div class="text-5xl text-green-400 absolute top-1/2 right-8 -translate-y-1/2">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Transfer Card -->
            <!-- Kartu untuk menu transfer antar pengguna -->
            <div onclick="openTransactionModal('transferModal')"
                class="bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300 hover:bg-gray-600 flex flex-col justify-between h-full cursor-pointer">
                <div>
                    <div class="flex items-center space-x-4 mb-4">
                        <!-- Ikon transfer -->
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a4 4 0 00-8 0v2m8 0H9m8 0l-2 2m-6-2v6a2 2 0 002 2h4a2 2 0 002-2v-6M7 16h10" />
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Transfer</h2>
                    </div>
                    <p class="text-gray-300 mb-4">Kirim uang ke rekening lain dengan mudah dan cepat.</p>
                </div>
                <div class="mt-auto flex justify-center">
                    <button onclick="openTransactionModal('transferModal'); event.stopPropagation();"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                        Mulai Transfer
                    </button>
                </div>
            </div>

            <!-- Tarik Uang Card -->
            <!-- Kartu untuk menu tarik uang tunai -->
            <div onclick="openTransactionModal('tarikModal')"
                class="bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300 hover:bg-gray-600 flex flex-col justify-between h-full cursor-pointer">
                <div>
                    <div class="flex items-center space-x-4 mb-4">
                        <!-- Ikon tarik uang -->
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.1 0-2 .9-2 2m4 0a2 2 0 00-2-2m0 4v4m0 4h.01M4 6h16M4 6v14a2 2 0 002 2h12a2 2 0 002-2V6" />
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Tarik Uang</h2>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Tarik uang tunai Anda dengan mudah di BankAyserNii.
                    </p>
                </div>
                <div class="mt-auto flex justify-center">
                    <button onclick="openTransactionModal('tarikModal'); event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-center">
                        Tarik Uang
                    </button>
                </div>
            </div>

            <!-- Top Up Card -->
            <!-- Kartu untuk menu isi ulang saldo -->
            <div onclick="openTransactionModal('topupModal')"
                class="bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300 hover:bg-gray-600 flex flex-col justify-between h-full cursor-pointer">
                <div>
                    <div class="flex items-center space-x-4 mb-4">
                        <!-- Ikon top up -->
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 0v4m0-4h4m-4 0H8m4-8a9 9 0 100 18 9 9 0 000-18z" />
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Top Up</h2>
                    </div>
                    <p class="text-gray-300 mb-4">Isi saldo Anda dengan mudah dan cepat.</p>
                </div>
                <div class="mt-auto flex justify-center">
                    <button onclick="openTransactionModal('topupModal'); event.stopPropagation();"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-center">
                        Top Up
                    </button>
                </div>
            </div>
        </div>

        <br>
        <hr class="border-gray-600">

        <!-- Carousel Inner -->
        <div id="productCarousel" class="relative w-full max-w-6xl mx-auto mt-8 overflow-hidden rounded-2xl">
            <div class="relative h-[30rem]">
                <!-- Slides -->
                <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="carouselSlides">
                    <img src="{{ asset('img/bank1.jpg') }}" alt="Product 1"
                        class="w-full h-full object-cover flex-shrink-0 cursor-pointer" onclick="openModal(this)">
                    <img src="{{ asset('img/bank3.jpg') }}" alt="Product 2"
                        class="w-full h-full object-cover flex-shrink-0 cursor-pointer" onclick="openModal(this)">
                    <img src="{{ asset('img/bankCelengan.jpg') }}" alt="Product 3"
                        class="w-full h-full object-cover flex-shrink-0 cursor-pointer" onclick="openModal(this)">
                </div>

                <!-- Navigation Buttons -->
                <!-- Tombol Kiri -->
                <button id="prevButton"
                    class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition">
                    <!-- Icon Panah Kiri -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Tombol Kanan -->
                <button id="nextButton"
                    class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition">
                    <!-- Icon Panah Kanan -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
            <div class="relative">
                <img id="modalImage" src="" alt="Zoomed Image" class="max-w-full max-h-screen rounded-lg">
                <button onclick="closeModal()"
                    class="absolute top-4 right-4 bg-gray-800 text-white p-2 rounded-full shadow-lg hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Transaction Modals -->
        <!-- Transfer Modal -->
        <div id="transferModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="bg-gray-800 w-full max-w-md p-6 rounded-2xl shadow-xl relative">
                    <button onclick="closeTransactionModal('transferModal')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <h2 class="text-2xl font-bold text-white mb-6">Transfer</h2>
                    <form id="transferForm" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-300 mb-2">Nomor Telepon Tujuan</label>
                            <input type="text" name="phone" placeholder="Masukkan nomor telepon (contoh: 08xxxxxxxxxx)"
                                class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Jumlah Transfer</label>
                            <input type="number" name="amount" min="10000" step="10000" placeholder="Minimal Rp 10.000"
                                class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
                            Kirim Transfer
                        </button>
                        <p class="text-red-500 hidden error-message"></p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tarik Uang Modal -->
        <div id="tarikModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="bg-gray-800 w-full max-w-md p-6 rounded-2xl shadow-xl relative">
                    <button onclick="closeTransactionModal('tarikModal')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <h2 class="text-2xl font-bold text-white mb-6">Tarik Uang</h2>
                    <form id="withdrawForm" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-300 mb-2">Jumlah Penarikan</label>
                            <input type="number" name="amount" min="50000" step="50000" placeholder="Minimal Rp 50.000"
                                class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-green-500 focus:ring-1 focus:ring-green-500">
                        </div>
                        <button type="submit"
                            class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition">
                            Tarik Uang
                        </button>
                        <p class="text-red-500 hidden error-message"></p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Top Up Modal -->
        <div id="topupModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="bg-gray-800 w-full max-w-md p-6 rounded-2xl shadow-xl relative">
                    <button onclick="closeTransactionModal('topupModal')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <h2 class="text-2xl font-bold text-white mb-6">Top Up</h2>
                    <form id="topupForm" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-300 mb-2">Jumlah Top Up</label>
                            <input type="number" name="amount" min="10000" step="10000"
                                class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500"
                                placeholder="Minimal Rp 10.000">
                        </div>
                        <button type="submit"
                            class="w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">
                            Top Up
                        </button>
                        <p class="text-red-500 hidden error-message"></p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Loading Modal -->
        <div id="loadingModal"
            class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
            <div class="flex-col gap-4 w-full flex items-center justify-center">
                <div
                    class="w-20 h-20 border-4 border-transparent text-blue-400 text-4xl animate-spin flex items-center justify-center border-t-blue-400 rounded-full">
                    <div
                        class="w-16 h-16 border-4 border-transparent text-red-400 text-2xl animate-spin flex items-center justify-center border-t-red-400 rounded-full">
                    </div>
                </div>
            </div>

            <!-- No Network Modal -->
            <div id="networkModal"
                class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
                <div class="flex-col gap-4 w-full flex items-center justify-center">
                    <div
                        class="w-20 h-20 border-4 border-transparent text-blue-400 text-4xl animate-spin flex items-center justify-center border-t-blue-400 rounded-full">
                        <div
                            class="w-16 h-16 border-4 border-transparent text-red-400 text-2xl animate-spin flex items-center justify-center border-t-red-400 rounded-full">
                        </div>
                    </div>
                </div>
                <p class="text-red-500 text-lg font-bold mb-4">No Network Connection</p>
                <button onclick="closeNetworkModal()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Close
                </button>
            </div>
        </div>

        <style>
            .loader {
                border-top-color: #3498db;
                -webkit-animation: spin 1s linear infinite;
                animation: spin 1s linear infinite;
            }

            @-webkit-keyframes spin {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            /* Custom animations for SweetAlert */
            @keyframes bounceIn {
                from {
                    opacity: 0;
                    transform: scale3d(0.3, 0.3, 0.3);
                }

                20% {
                    transform: scale3d(1.1, 1.1, 1.1);
                }

                40% {
                    transform: scale3d(0.9, 0.9, 0.9);
                }

                60% {
                    transform: scale3d(1.03, 1.03, 1.03);
                }

                80% {
                    transform: scale3d(0.97, 0.97, 0.97);
                }

                to {
                    opacity: 1;
                    transform: scale3d(1, 1, 1);
                }
            }

            .animated {
                animation-duration: 0.7s;
                animation-fill-mode: both;
            }

            .bounceIn {
                animation-name: bounceIn;
            }

            /* SweetAlert Custom Styles */
            .swal2-popup {
                font-size: 1.2em !important;
                border-radius: 15px !important;
                border: 2px solid #0896f5 !important;
            }

            .swal2-icon {
                width: 5em !important;
                height: 5em !important;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const slides = document.getElementById('carouselSlides');
                const totalSlides = slides.children.length;
                let currentIndex = 0;

                function updateSlidePosition() {
                    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                function moveToNextSlide() {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateSlidePosition();
                }

                function moveToPrevSlide() {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateSlidePosition();
                }

                document.getElementById('nextButton').addEventListener('click', moveToNextSlide);
                document.getElementById('prevButton').addEventListener('click', moveToPrevSlide);

                setInterval(moveToNextSlide, 3000); // Change slide every 3 seconds
            });

            function openModal(image) {
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                modalImage.src = image.src;
                modal.classList.remove('hidden');
            }

            function closeModal() {
                const modal = document.getElementById('imageModal');
                modal.classList.add('hidden');
            }

            function openTransactionModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                }
                // Prevent event bubbling
                event.stopPropagation();
            }

            function closeTransactionModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');
                    // Reset form when closing modal
                    const form = modal.querySelector('form');
                    if (form) {
                        form.reset();
                        const errorMessage = form.querySelector('.error-message');
                        if (errorMessage) {
                            errorMessage.classList.add('hidden');
                        }
                    }
                }
            }

            // Loading and Network Modals
            document.addEventListener('DOMContentLoaded', () => {
                const loadingModal = document.getElementById('loadingModal');
                const networkModal = document.getElementById('networkModal');

                // Show loading modal on page load
                window.addEventListener('beforeunload', () => {
                    if (navigator.onLine) {
                        loadingModal.classList.remove('hidden');
                    } else {
                        showNetworkModal();
                    }
                });

                // Hide loading modal after page load
                window.addEventListener('load', () => {
                    loadingModal.classList.add('hidden');
                });

                // Check network status
                window.addEventListener('offline', showNetworkModal);

                function showNetworkModal() {
                    loadingModal.classList.add('hidden');
                    networkModal.classList.remove('hidden');
                }

                function closeNetworkModal() {
                    networkModal.classList.add('hidden');
                }
            });

            function updateBalance(newBalance) {
                const formattedBalance = 'Rp ' + new Intl.NumberFormat('id-ID').format(newBalance);
                document.querySelector('.text-3xl.font-bold.text-green-400').textContent = formattedBalance;
            }

            function handleTransaction(formId, url) {
                const form = document.getElementById(formId);
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const errorMessage = form.querySelector('.error-message');
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;

                    try {
                        submitButton.disabled = true;
                        submitButton.textContent = 'Memproses...';

                        const response = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                            },
                            body: JSON.stringify(Object.fromEntries(new FormData(form)))
                        });
                        const data = await response.json();
                        if (data.success) {
                            updateBalance(data.new_balance);
                            form.reset();
                            closeTransactionModal(formId.replace('Form', 'Modal'));
                            // Show success animation
                            Swal.fire({
                                title: 'Berhasil!',
                                text: data.message,
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                customClass: {
                                    popup: 'animated bounceIn'
                                },
                                background: '#1F2937',
                                color: '#FFFFFF',
                                willClose: () => {
                                    setTimeout(() => {
                                        Swal.close();
                                        const allModals = document.querySelectorAll('.swal2-container');
                                        allModals.forEach(modal => {
                                            document.body.removeChild(modal);
                                        });
                                    }, 100);
                                }
                            });
                        } else {
                            errorMessage.textContent = data.message;
                            errorMessage.classList.remove('hidden');
                        }
                    } catch (error) {
                        errorMessage.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
                        errorMessage.classList.remove('hidden');
                    } finally {
                        submitButton.disabled = false;
                        submitButton.textContent = originalText;
                    }
                });
            }

            document.addEventListener('DOMContentLoaded', () => {
                handleTransaction('topupForm', '{{ route("topup") }}');
                handleTransaction('withdrawForm', '{{ route("withdraw") }}');
                handleTransaction('transferForm', '{{ route("transfer") }}');
            });
        </script>

        <!-- Add Font Awesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        @vite('resources/js/app.js')
</body>

</html>