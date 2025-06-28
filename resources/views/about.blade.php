<!doctype html>
<html class="scroll-smooth md:scroll-auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  <title>About - Bank Aysernii</title>
</head>

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

<body class="bg-gray-900 min-h-screen flex flex-col items-center justify-center pt-16">
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

  <main class="relative max-w-7xl mx-auto px-4 mt-24 mb-16 w-full">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center brightness-50 scale-110 rounded-lg"
      style="background-image: url('{{ asset('img/genshin.gif') }}'); z-index: -1;"></div>

    <h1 class="text-white text-4xl font-bold mb-12 text-center">About Bank Aysernii</h1>
    <div id="loadingCards" class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Loading skeleton cards -->
      <div class="flex flex-col bg-neutral-300 w-full h-64 animate-pulse rounded-xl p-4 gap-4">
        <div class="bg-neutral-400/50 w-full h-32 animate-pulse rounded-md"></div>
        <div class="flex flex-col gap-2">
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-4/5 h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-2/4 h-4 animate-pulse rounded-md"></div>
        </div>
      </div>
      <div class="flex flex-col bg-neutral-300 w-full h-64 animate-pulse rounded-xl p-4 gap-4">
        <div class="bg-neutral-400/50 w-full h-32 animate-pulse rounded-md"></div>
        <div class="flex flex-col gap-2">
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-4/5 h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-2/4 h-4 animate-pulse rounded-md"></div>
        </div>
      </div>
      <div class="flex flex-col bg-neutral-300 w-full h-64 animate-pulse rounded-xl p-4 gap-4">
        <div class="bg-neutral-400/50 w-full h-32 animate-pulse rounded-md"></div>
        <div class="flex flex-col gap-2">
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-4/5 h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-full h-4 animate-pulse rounded-md"></div>
          <div class="bg-neutral-400/50 w-2/4 h-4 animate-pulse rounded-md"></div>
        </div>
      </div>
    </div>

    <div id="actualCards" class="grid grid-cols-1 md:grid-cols-3 gap-8 hidden">
      <div class="relative bg-gray-800 bg-opacity-75 p-8 rounded-lg shadow-lg text-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50 rounded-lg border-2 border-white"
          style="background-image: url('{{ asset('img/real.jpg') }}'); z-index: 0;"></div>
        <h2 class="text-white text-2xl font-semibold mb-4 relative z-10">Pendirian</h2>
        <p class="text-gray-200 text-lg relative z-10">
          Bank Aysernii didirikan pada tahun 2023 dengan tujuan memberikan layanan perbankan yang inovatif dan
          terpercaya.
        </p>
      </div>
      <div class="relative bg-gray-800 bg-opacity-75 p-8 rounded-lg shadow-lg text-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50 rounded-lg border-2 border-white"
          style="background-image: url('{{ asset('img/real2.jpg') }}'); z-index: 0;"></div>
        <h2 class="text-white text-2xl font-semibold mb-4 relative z-10">Misi Kami</h2>
        <p class="text-gray-200 text-lg relative z-10">
          Misi kami adalah memudahkan pengelolaan keuangan pribadi dan bisnis dengan teknologi canggih dan layanan
          pelanggan terbaik.
        </p>
      </div>
      <div class="relative bg-gray-800 bg-opacity-75 p-8 rounded-lg shadow-lg text-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50 rounded-lg border-2 border-white"
          style="background-image: url('{{ asset('img/real3.jpg') }}'); z-index: 0;"></div>
        <h2 class="text-white text-2xl font-semibold mb-4 relative z-10">Visi Masa Depan</h2>
        <p class="text-gray-200 text-lg relative z-10">
          Kami berkomitmen untuk terus berkembang dan menjadi bank digital terdepan yang dapat diandalkan oleh seluruh
          masyarakat.
        </p>
      </div>
    </div>
  </main>

  <footer class="bg-gray-900 text-gray-400 text-center py-4 mt-auto w-full">
    © 2025-2026 Bank Aysernii. All rights reserved.
  </footer>

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
  </div>

  <!-- No Network Modal -->
  <div id="networkModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
    <div class="flex-col gap-4 w-full flex items-center justify-center">
      <div
        class="w-20 h-20 border-4 border-transparent text-blue-400 text-4xl animate-spin flex items-center justify-center border-t-blue-400 rounded-full">
        <div
          class="w-16 h-16 border-4 border-transparent text-red-400 text-2xl animate-spin flex items-center justify-center border-t-red-400 rounded-full">
        </div>
      </div>
    </div>
    <p class="text-red-500 text-lg font-bold mb-4">Tidak ada koneksi internet</p>
    <button onclick="closeNetworkModal()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
      Tutup
    </button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const loadingModal = document.getElementById('loadingModal');
      const networkModal = document.getElementById('networkModal');

      // Show loading modal on page unload (navigation or refresh)
      window.addEventListener('beforeunload', (event) => {
        if (navigator.onLine) {
          loadingModal.classList.remove('hidden');
        } else {
          showNetworkModal();
          event.preventDefault();
          event.returnValue = '';
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

      window.closeNetworkModal = function () {
        networkModal.classList.add('hidden');
      };
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const loadingCards = document.getElementById('loadingCards');
      const actualCards = document.getElementById('actualCards');

      // Simulate loading delay based on network speed or rendering
      // Here we just use window load event to hide loading and show actual cards
      window.addEventListener('load', () => {
        loadingCards.classList.add('hidden');
        actualCards.classList.remove('hidden');
      });
    });
  </script>

  @vite('resources/js/app.js')
</body>

</html>