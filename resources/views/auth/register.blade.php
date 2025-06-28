<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <style>
        .login-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

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
    <title>login - Bank Aysernii</title>
</head>

<body class="bg-gray-900 min-h-screen flex flex-col items-center justify-center">
    <nav
        class="uhuy fixed top-0 w-full p-4 bg-gray-900 bg-opacity-90 z-50 border-b-1 border-white shadow-xl/30 rounded-bl-lg rounded-br-lg">
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

    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-xl bg-gray-800 rounded-lg shadow-md p-6 login-card">
            <h2 class="text-2xl font-bold text-gray-200 mb-6 text-center">
                <span class="relative flex size-3">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex size-3 rounded-full bg-sky-500"></span>
                </span>
                Register
            </h2>
            <form action="{{ route('register') }}" method="POST"
                class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-gray-300 mb-1">Name</label>
                    <input type="text" id="name" name="name"
                    placeholder="Masukkan nama lengkap"
                        class="w-full bg-gray-700 text-gray-200 border-0 rounded-md p-3 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                    @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-300 mb-1">Email</label>
                    <input type="email" id="email" name="email"
                    placeholder="Masukkan Email"
                        class="w-full bg-gray-700 text-gray-200 border-0 rounded-md p-3 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                    @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-gray-300 mb-1">Password</label>
                    <input type="password" id="password" name="password"
                        placeholder="Masukkan password"
                        class="w-full bg-gray-700 text-gray-200 border-0 rounded-md p-3 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                    @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-gray-300 mb-1">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone"
                        class="w-full bg-gray-700 text-gray-200 border-0 rounded-md p-3 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                        placeholder="Masukkan nomor telepon (contoh: 08xxxxxxxxxx)">
                    @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-2 flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                    <label class="text-sm text-gray-200 cursor-pointer flex items-center" for="remember-me">
                        <input class="mr-2" id="remember-me" type="checkbox">
                        Remember me
                    </label>
                    <a class="text-sm text-blue-500 hover:underline" href="#">Forgot password?</a>
                </div>

                <div class="col-span-2 mt-2">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 rounded-md hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">
                        Register
                    </button>
                </div>

                <div class="col-span-2 text-center mt-2">
                    <p class="text-sm text-gray-300">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>