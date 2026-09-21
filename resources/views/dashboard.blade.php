<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-card>
                <h3 class="text-lg font-semibold mb-2">
                    Ringkasan Hari Ini
                </h3>

                <p class="text-gray-600 mb-4">
                    Selamat datang, {{ auth()->user()->name }}.
                </p>

                <div class="space-x-2">
                    <x-badge class="bg-green-100 text-green-800">
                        Aman
                    </x-badge>

                    <x-badge class="bg-yellow-100 text-yellow-800">
                        Menipis
                    </x-badge>

                    <x-badge class="bg-red-100 text-red-800">
                        Habis
                    </x-badge>
                </div>
            </x-card>

        </div>
    </div>

</x-app-layout>