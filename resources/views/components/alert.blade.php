@props(['title'=>'Alerta','type'=>'info'])

@php
    switch ($type){
        case 'info':
            $clases = 'bg-blue-100 border-blue-500 text-blue-900';
            break;
        case 'danger':
            $clases = 'bg-red-100 border-red-500 text-red-900';
            break;
        case 'warning':
            $clases = 'bg-yellow-100 border-yellow-500 text-yellow-900';
            break;
        case 'success':
            $clases = 'bg-teal-100 border-teal-500 text-teal-900';
            break;
        default:
            $clases = 'bg-blue-100 border-blue-500 text-blue-900';
            break;
    }
@endphp


{{--  <div {{ $attributes }} class="{{ $clases }} border-t-4 rounded-b px-4 py-3 shadow-md" role="alert">
    <div class="flex">
        <div class="py-1">{{ $icono }}</div>
      <div>
        <p class="font-bold">{{ $title }}</p>
        {{ $slot }}
      </div>
    </div>
</div>
  --}}

<div {{ $attributes->merge(['class' => " $clases  border-t-4 rounded-b px-4 py-3 shadow-md"]) }} role="alert">
    <div class="flex">
        <div class="py-1">{{ $icono }}</div>
      <div>
        <p class="font-bold">{{ $title }}</p>
        {{ $slot }}
      </div>
    </div>
</div>
