<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://bunny.net" rel="stylesheet" />

        <!-- Estilos Modernos -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #0a0a0a; /* Negro profundo */
                color: #ffffff;
            }
            .blue-gradient {
                background: linear-gradient(135deg, #007cf0 0%, #00dfd8 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .btn-primary {
                background-color: #0062ff;
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #004cc5;
                transform: translateY(-2px);
                box-shadow: 0 10px 20px -10px rgba(0, 98, 255, 0.5);
            }
            .card-border {
                border: 1px solid #1f1f1f;
                background: #111111;
            }
        </style>
    </head>
    <body class="antialiased flex flex-col min-h-screen">
        
        <!-- Navegación Simple -->
        <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto w-full">
            <div class="text-xl font-bold tracking-tighter italic">
                LARAVEL<span class="text-blue-500">.</span>
            </div>
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-medium hover:text-blue-400">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium hover:text-blue-400">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm bg-white text-black px-4 py-2 rounded-full font-semibold hover:bg-gray-200 transition">Get Started</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        <!-- Hero Section -->
        <main class="flex-grow flex items-center justify-center px-6">
            <div class="max-w-3xl text-center">
                <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-6">
                    Construye el futuro en <span class="blue-gradient">Azul & Negro</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl mb-10 leading-relaxed">
                    Una interfaz limpia, rápida y personalizada para tu próximo proyecto con Laravel. 
                    Menos distracciones, más código.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://laravel.com" class="btn-primary text-white px-8 py-4 rounded-xl font-bold">
                        Documentación
                    </a>
                    <div class="card-border px-8 py-4 rounded-xl font-bold cursor-pointer hover:bg-[#1a1a1a] transition">
                        Explorar Proyecto
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="p-8 text-center text-gray-600 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Built with Laravel & Tailwind.
        </footer>

    </body>
</html>
