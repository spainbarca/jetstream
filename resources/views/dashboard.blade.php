<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert title="Titulo test">
                <x-slot name="icono">
                    <svg class="h-8 w-8 text-black-500 mr-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" /></svg>
                </x-slot>
                <p class="text-sm">Este es una alerta de prueba</p>
            </x-alert>
            <br>

            @php
                $type = 'success';
            @endphp

            <x-alert :type="$type">
                <x-slot name="icono">
                    <svg class="h-8 w-8 text-black-500 mr-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" /></svg>
                </x-slot>
                <p class="text-sm">Este es una alerta de prueba</p>
            </x-alert>

            <br>
            <x-alert :type="$type" id="alerta" class="mb-4">
                <x-slot name="icono">
                    <svg class="h-8 w-8 text-black-500 mr-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  <line x1="12" y1="9" x2="12" y2="13" />  <line x1="12" y1="17" x2="12.01" y2="17" /></svg>
                </x-slot>
                <p class="text-sm">Este es una alerta de prueba</p>
            </x-alert>

            <p>Hola mundo</p>
        </div>
    </div>
</x-app-layout>
