<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-cyan-50 via-sky-50 to-emerald-50 text-slate-800 antialiased">
    <main class="mx-auto flex min-h-screen w-full max-w-6xl flex-col gap-6 px-4 py-10 sm:px-6 lg:px-8">
        <section class="rounded-2xl border border-cyan-100 bg-white/90 p-6 shadow-md shadow-cyan-100/60 backdrop-blur-sm">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h1 class="mt-2 text-3xl font-semibold tracking-tight text-cyan-950">
                        Vista sitio Categorias
                    </h1>
                </div>

                <div class="w-full sm:w-56">
                    <button class="rounded-lg bg-emerald-600 px-3 py-1.5 text-xs font-medium text-white transition hover:bg-emerald-500">
                        Agregar Categoría
                    </button>  
                </div>
            </div>
        </section>

        <section class="overflow-hidden rounded-2xl border border-cyan-100 bg-white/95 shadow-md shadow-cyan-100/60">
            <div class="border-b border-cyan-100 bg-gradient-to-r from-cyan-50 to-emerald-50 px-6 py-4">
                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-700">
                    Lista de categorías
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-cyan-100 text-left text-sm">
                    <thead class="bg-cyan-50/70 text-cyan-800">
                        <tr>
                            <th class="px-6 py-3 font-medium">Id</th>
                            <th class="px-6 py-3 font-medium">Título</th>
                            <th class="px-6 py-3 font-medium">Descripción</th>
                            <th class="px-6 py-3 font-medium">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-cyan-100/80 bg-white">
                        @foreach ($cate as $categoria)
                            <tr class="transition hover:bg-cyan-50/70">
                                <td class="whitespace-nowrap px-6 py-4 font-semibold text-cyan-950">
                                    {{ $categoria['id'] }}
                                </td>
                                <td class="px-6 py-4 text-cyan-900">
                                    {{ $categoria['name'] }}
                                </td>
                                <td class="max-w-md px-6 py-4 text-slate-600">
                                    {{ $categoria['description'] }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex gap-2">
                                        <button class="rounded-lg border border-cyan-200 bg-cyan-50 px-3 py-1.5 text-xs font-medium text-cyan-800 transition hover:border-cyan-300 hover:bg-cyan-100">
                                            Editar
                                        </button>
                                        <button class="rounded-lg bg-emerald-600 px-3 py-1.5 text-xs font-medium text-white transition hover:bg-emerald-500">
                                            Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>