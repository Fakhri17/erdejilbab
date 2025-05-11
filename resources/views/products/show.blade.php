@extends('layouts.app')

@section('content')
  <section class="pt-24 pb-12">
    <div class="container mx-auto px-4 py-8">
      {{-- Breadcrumb --}}
      <div class="flex items-center gap-2">
        <a href="{{ route('index') }}" class="text-gray-700 hover:text-secondary">
          Beranda
        </a>
        <iconify-icon icon="majesticons:chevron-right-line" width="24" height="24"></iconify-icon>
        <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-secondary">
          List Produk
        </a>
        <iconify-icon icon="majesticons:chevron-right-line" width="24" height="24"></iconify-icon>
        <span class="text-secondary font-semibold">{{ $product->name }}</span>
      </div>

      {{-- Product Detail --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
        {{-- Product Image --}}
        <div>
          @if ($product->product_images)
            @foreach ($product->product_images as $image)
              <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}"
                class="w-full h-auto object-cover rounded-lg mb-6">
            @endforeach
          @else
            <img src="https://placehold.co/600x400" alt="{{ $product->name }}"
              class="w-full h-auto object-cover rounded-lg">
          @endif
        </div>
        {{-- Product Description --}}
        <div>
          <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold text-primary mb-6">{{ $product->name }}</h2>
          {{-- category --}}
          <p class="text-secondary text-lg font-semibold mb-14">Kategori: {{ $product->category->name }}</p>
          {{-- price --}}
          <p class="text-gray-800 text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
            Rp{{ number_format($product->price, 0, ',', '.') }}</p>
          {{-- description --}}
          <div class="border border-primary rounded-lg p-4 md:p-7 mb-10">
            <h3 class="text-2xl font-semibold mb-4">Deskripsi Produk</h3>
            <hr class="border-t border-primary mb-10 w-1/4">
            <div class="text-gray-800 font-medium">{!! $product->description !!}</div>
          </div>
          {{-- button --}}
          <div class="flex flex-wrap gap-4">
            @php
              $siteSetting = \App\Models\SiteSetting::first();
              $waMessage = "Halo saya tertarik dengan produk {$product->name}";
              $waUrl = $siteSetting->wa_url . "?text=" . urlencode($waMessage);
            @endphp
            <a href="{{ $waUrl }}" target="_blank" class="button-whatsapp">
              <iconify-icon icon="mdi:whatsapp" width="24" height="24"></iconify-icon>
              Hubungi Kami
            </a>
            @if ($product->shopee_link)
              <a href="{{ $product->shopee_link }}" class="button-shopee">
                <iconify-icon icon="tabler:brand-shopee" width="40" height="40"></iconify-icon>
                Beli di Shopee
              </a>
            @endif
            @if ($product->tiktok_link)
              <a href="{{ $product->tiktok_link }}" class="button-tiktok">
                <iconify-icon icon="tabler:brand-tiktok" width="40" height="40"></iconify-icon>
                Beli di Tiktok
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
