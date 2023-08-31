<div {{ $attributes->merge(['class' => " $clases  border-t-4 rounded-b px-4 py-3 shadow-md"]) }} role="alert">
    <div class="flex">
        <div class="py-1">{{ $icono }}</div>
      <div>
        <p class="font-bold">{{ $title }}</p>
        {{ $slot }}
      </div>
    </div>
</div>
