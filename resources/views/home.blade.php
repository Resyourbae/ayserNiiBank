<!doctype html>
<html class="scroll-smooth md:scroll-auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Bank Aysernii</title>

    <style>
        .uhuy {
            animation: fade-in 1s ease-in-out;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-in-out;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1a202c;
                /* Dark mode background */
            }

            .bg-gray-800 {
                background-color: #2d3748;
                /* Darker gray for dark mode */
            }

            .text-gray-300 {
                color: #e2e8f0;
                /* Lighter gray for dark mode */
            }
        }
    </style>
</head>

<body class=" bg-gray-900 min-h-screen flex flex-col items-center justify-center pt-16">
    <nav class="uhuy fixed top-0 w-full p-4 bg-gray-900 bg-opacity-90 z-50 border-b-1 border-white shadow-xl/30 rounded-bl-lg rounded-br-lg">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <div class="flex items-center pl-1">
                <img src="{{ asset('img/shiroko_jilat_jilat.gif') }}" width="40" height="40" class="mr-2" alt="Logo">
                <span class="text-white font-bold text-lg">Bank Aysernii</span>
            </div>
            <ul class="flex space-x-6 text-gray-300 pr-2">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
        </div>
    </nav>

    {{-- content1 --}}
    <div class="grid grid-cols-2 gap-8 px-4 max-w-7xl mx-auto mt-10 pt-10">
        <div class="text-center bg-gray-800 bg-opacity-75 p-10 border-1 border-gray-300 rounded-lg shadow-xl/30">
            <h1 class="text-5xl font-bold text-white mb-8">
                <img src="{{ asset('img/GuraPng.gif') }}" width="80" height="80" class="mx-auto content-center"
                    alt="Logo">
                Selamat Datang di Bank Aysernii
            </h1>
            <p class="text-gray-400 text-xl mb-12">
                Bank Aysernii adalah platform keuangan yang memudahkan
                <br>Anda dalam mengelola keuangan pribadi dan bisnis Anda.
                Bergabunglah dengan kami
                <br>untuk pengalaman perbankan yang lebih baik.
                <br>Dengan teknologi canggih dan layanan pelanggan yang
            </p>
        </div>

        {{-- content2 --}}
        <div class="text-center bg-gray-800 bg-opacity-75 p-10 border-1 border-gray-300 rounded-lg shadow-xl/30 ">
            <h1 class="text-5xl font-bold text-white mb-8">
                <img src="{{ asset('img/arisu.gif') }}" width="80" height="80" class="mx-auto content-center"
                    alt="Logo">
                Keunggulan Bank Aysernii
            </h1>
            <p class=" text-gray-400 text-xl mb-12">
                - Layanan perbankan yang cepat dan aman
                <br>- Akses mudah melalui aplikasi mobile
                <br>- Dukungan pelanggan 24/7
                <br>- Berbagai produk keuangan untuk kebutuhan Anda
                <br>- Keamanan data dan transaksi yang terjamin
                <br>- Kemudahan dalam melakukan transaksi internasional
                <br>- Dan lain-lain
            </p>
        </div>
    </div>
    {{-- content3 --}}
    <div
        class="mt-10 mb-10 text-center bg-gray-800 bg-opacity-75 p-10 border-1 border-gray-300 rounded-lg shadow-xl/30  w-3/4">
        <h1 class="text-5xl font-bold text-white mb-8 ">
            <img src="{{ asset('img/lp_pokpok.gif') }}" width="80" height="80" class="mx-auto content-center"
                alt="Logo">
            Bergabunglah Sekarang
        </h1>
        <p class=" text-gray-400 text-xl mb-12">
            Bergabunglah dengan Bank Aysernii hari ini dan nikmati
            <br>kemudahan dalam mengelola keuangan Anda.
            <br>Daftar sekarang untuk mendapatkan akses penuh ke semua fitur kami.
            <br>Jadilah bagian dari komunitas Bank Aysernii dan
            <br>rasakan perbedaan dalam pengalaman perbankan Anda.
        </p>
        <div class="space-x-4">
            <a href="{{ route('login') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-xl/30 ">
                Login
            </a>
            <a href="{{ route('register') }}"
                class="bg-transparent hover:bg-gray-700 text-white font-bold py-3 px-8 rounded-lg border-2 border-gray-600 transition duration-300 shadow-xl/30">
                Register
            </a>
        </div>
        <div class="container mt-5 pt-5 flex justify-center align-center">
            <a href="https://github.com/Resyourbae" target="_blank"
                class="flex overflow-hidden items-center text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-black text-white shadow hover:bg-black/90 h-9 px-4 py-2 max-w-52 whitespace-pre md:flex group relative w-full justify-center gap-2 rounded-md transition-all duration-300 ease-out hover:ring-2 hover:ring-black hover:ring-offset-2">
                <span
                    class="absolute right-0 -mt-12 h-32 w-8 translate-x-12 rotate-12 bg-white opacity-10 transition-all duration-1000 ease-out group-hover:-translate-x-40"></span>
                <div class="flex items-center shadow-xl/30 text-shadow-md">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 438.549 438.549">
                        <path
                            d="M409.132 114.573c-19.608-33.596-46.205-60.194-79.798-79.8-33.598-19.607-70.277-29.408-110.063-29.408-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8C9.803 148.168 0 184.854 0 224.63c0 47.78 13.94 90.745 41.827 128.906 27.884 38.164 63.906 64.572 108.063 79.227 5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562 0-.571-.049-5.708-.144-15.417a2549.81 2549.81 0 01-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999-6.854-1.231-13.229-4.086-19.13-8.559-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429-1.142-1.331-1.997-2.663-2.568-3.997-.572-1.335-.098-2.43 1.427-3.289 1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851 5.614 3.806 10.229 8.754 13.846 14.842 4.38 7.806 9.657 13.754 15.846 17.847 6.184 4.093 12.419 6.136 18.699 6.136 6.28 0 11.704-.476 16.274-1.423 4.565-.952 8.848-2.383 12.847-4.285 1.713-12.758 6.377-22.559 13.988-29.41-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979-3.901-12.374-5.852-26.648-5.852-42.826 0-23.035 7.52-42.637 22.557-58.817-7.044-17.318-6.379-36.732 1.997-58.24 5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994 5.046 3.041 9.089 5.618 12.135 7.708 17.705-4.947 35.976-7.421 54.818-7.421s37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979-6.191 7.521-13.901 13.85-23.131 18.986-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146 9.894 8.562 14.842 22.077 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995 44.163-14.653 80.185-41.062 108.068-79.226 27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049z">
                        </path>
                    </svg>
                    <span class="ml-1 text-white">Dev Acount GitHub</span>
                </div>
                <div class="ml-2 flex items-center gap-1 text-sm md:flex">
                    <svg class="w-4 h-4 text-gray-500 transition-all duration-300 group-hover:text-yellow-300"
                        data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span class="inline-block tabular-nums tracking-wider font-display font-medium text-white">6</span>
                </div>
            </a>
        </div>
    </div>

    <br>
    <hr class="border-gray-100 w-3/4 mx-auto" />
    <div class="flex items-center my-8 max-w-7xl mx-auto px-4 ">
        <div class="flex-grow border-t border-gray-600 "></div>
        <span class="mx-4 text-gray-400 font-semibold bg-gray-700 px-3 shadow-xl/30 text-shadow-md">DEVELOPER</span>
        <div class="flex-grow border-t border-gray-600"></div>
    </div>

    {{-- card1 --}}
    <div class="grid grid-cols-4 gap-8 px-4 max-w-7xl mx-auto">
        <div class="shadow-xl/30 text-shadow-md mt-10 mb-10 transform transition duration-300 hover:scale-110 rounded-lg h-52 w-56 hover:shadow-xl bg-gray-800 bg-opacity-75 cursor-pointer"
            data-image="{{ asset('img/ResyaAnime.jpeg') }}" data-description="Dibuat oleh Resya Anggara(FrontEnd 1)">
            <div class="m-2 h-3/6 rounded-lg overflow-hidden text-shadow-md relative">
                <div class="spinner absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50">
                    <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-10 w-10"></div>
                </div>
                <img src="{{ asset('img/ResyaAnime.jpeg') }}" alt="Profile Photo"
                    class="w-full h-full object-cover hidden" />
            </div>

            <div class="px-5 pt-2 flex flex-col items-center">
                <h2 class="font-semibold text-white text-center">Dibuat oleh</h2>

                <button
                    class="bg-blue-500 cursor-pointer text-white px-2 py-1 mt-2 rounded-md transition duration-150 hover:bg-blue-700"
                    type="button">
                    Readmore
                </button>
            </div>
        </div>

        {{-- card2 --}}
        <div class="shadow-xl/30 text-shadow-md mt-10 mb-10 transform transition duration-300 hover:scale-110 rounded-lg h-52 w-56 hover:shadow-xl bg-gray-800 bg-opacity-75 cursor-pointer"
            data-image="{{ asset('img/kusuri.jpeg') }}" data-description="Dibuat oleh Kusuri(FrontEnd 2)">
            <div class="m-2 h-3/6 rounded-lg overflow-hidden relative">
                <div class="spinner absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50">
                    <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-10 w-10"></div>
                </div>
                <img src="{{ asset('img/kusuri.jpeg') }}" alt="Profile Photo"
                    class="w-full h-full object-cover hidden" />
            </div>

            <div class="px-5 pt-2 flex flex-col items-center">
                <h2 class="font-semibold text-white text-center">Dibuat oleh</h2>

                <button
                    class="bg-blue-500 cursor-pointer text-white px-2 py-1 mt-2 rounded-md transition duration-150 hover:bg-blue-700"
                    type="button">
                    Readmore
                </button>
            </div>
        </div>

        {{-- card3 --}}
        <div class="shadow-xl/30 text-shadow-md mt-10 mb-10 transform transition duration-300 hover:scale-110 rounded-lg h-52 w-56 hover:shadow-xl bg-gray-800 bg-opacity-75 cursor-pointer"
            data-image="{{ asset('img/tiara.jpeg') }}" data-description="Dibuat oleh Tiara Basori(BackEnd 1)">
            <div class="m-2 h-3/6 rounded-lg overflow-hidden relative">
                <div class="spinner absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50">
                    <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-10 w-10"></div>
                </div>
                <img src="{{ asset('img/tiara.jpeg') }}" alt="Profile Photo"
                    class="w-full h-full object-cover hidden" />
            </div>

            <div class="px-5 pt-2 flex flex-col items-center">
                <h2 class="font-semibold text-white text-center">Dibuat oleh</h2>

                <button
                    class="bg-blue-500 cursor-pointer text-white px-2 py-1 mt-2 rounded-md transition duration-150 hover:bg-blue-700"
                    type="button">
                    Readmore
                </button>
            </div>
        </div>

        {{-- card4 --}}
        <div class="shadow-xl/30 text-shadow-md mt-10 mb-10 transform transition duration-300 hover:scale-110 rounded-lg h-52 w-56 hover:shadow-xl bg-gray-800 bg-opacity-75 cursor-pointer"
            data-image="{{ asset('img/ciroko.jpeg') }}" data-description="Dibuat oleh Ciroko(BackEnd 2)">
            <div class="m-2 h-3/6 rounded-lg overflow-hidden relative">
                <div class="spinner absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50">
                    <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-10 w-10"></div>
                </div>
                <img src="{{ asset('img/ciroko.jpeg') }}" alt="Profile Photo"
                    class="w-full h-full object-cover hidden" />
            </div>

            <div class="px-5 pt-2 flex flex-col items-center">
                <h2 class="font-semibold text-white text-center">Dibuat oleh</h2>

                <button
                    class="bg-blue-500 cursor-pointer text-white px-2 py-1 mt-2 rounded-md transition duration-150 hover:bg-blue-700"
                    type="button">
                    Readmore
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-gray-800 rounded-lg max-w-lg w-full p-4 relative">
            <button id="closeModal" class="absolute top-2 right-2 text-white text-2xl font-bold">&times;</button>
            <img id="modalImage" src="" alt="Large Image" class="w-full h-64 object-contain rounded-md" />
            <p id="modalDescription" class="text-white mt-4 text-center"></p>
        </div>
    </div>

    <!-- Loading Modal -->
    <div id="loadingModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
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
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalDescription = document.getElementById('modalDescription');
            const closeModal = document.getElementById('closeModal');

            // Open modal when clicking on card or button
            document.querySelectorAll('.grid.grid-cols-4 > div').forEach(card => {
                card.addEventListener('click', () => {
                    const imageSrc = card.getAttribute('data-image');
                    const description = card.getAttribute('data-description');
                    modalImage.src = imageSrc;
                    modalDescription.textContent = description;
                    modal.classList.remove('hidden');
                });
            });

            // Close modal on close button click
            closeModal.addEventListener('click', () => {
                modal.classList.add('hidden');
                modalImage.src = '';
                modalDescription.textContent = '';
            });

            // Close modal when clicking outside modal content
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modalImage.src = '';
                    modalDescription.textContent = '';
                }
            });

            // Image loading spinner logic
            document.querySelectorAll('.grid.grid-cols-4 > div .m-2 img').forEach(img => {
                const spinner = img.previousElementSibling;
                img.addEventListener('load', () => {
                    if (spinner) spinner.style.display = 'none';
                    img.classList.remove('hidden');
                });
                // In case image is cached and already loaded
                if (img.complete) {
                    if (spinner) spinner.style.display = 'none';
                    img.classList.remove('hidden');
                }
            });
        });


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
    </script>

    <div class="footer"></div>
    <footer class="bg-gray-900 text-gray-400 text-center py-4 mt-10 w-full">
        © 2025-2026 Bank Aysernii. All rights reserved.
    </footer>
    </div>

    @vite('resources/js/app.js')


</body>

</html>