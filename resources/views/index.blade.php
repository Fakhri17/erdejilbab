@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- Hero Section -->
  <!-- Hero Section -->
  <section class="py-24">
    <div class="container mx-auto px-4 py-8">
      <div class="max-w-6xl mx-auto flex flex-col-reverse md:flex-row justify-between items-center gap-8">
        <div class="md:w-1/2 text-center md:text-left">
          <h1 class="text-3xl md:text-4xl font-bold mb-5 leading-normal">
            Tampil Anggun & Syar'i <br />Bersama <span class="text-[#E48786]">Erdejilbab</span>
          </h1>
          <p class="text-gray-800 font-semibold mb-8 pr-8">
            Pilihan sempurna untuk gaya muslimah modern, eksklusif hanya di Erdejilbab.
          </p>
          <a href="#"
            class="inline-block px-5 py-2 font-bold text-[#946756] rounded-md border border-gray-800 shadow-md hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">
            Lihat Produk
          </a>
        </div>
        <div class="md:w-1/2 flex justify-center">
          <img src="{{ asset('assets/heroimg.png') }}" alt="Model Hijab" class="max-w-xs w-full md:max-w-md rounded-xl">
        </div>
      </div>
    </div>
  </section>

  <!-- Keunggulan Section -->
  <section class="py-24">
    <div class="container mx-auto px-4 py-8 text-center">
      <h2 class="text-2xl lg:text-3xl font-bold mb-4">Keunggulan <span class="text-[#E48786]">Erdejilbab</span></h2>
      <p class="text-gray-600 max-w-2xl mx-auto mb-10">
        Mengapa Erdejilbab Menjadi Pilihan Tepat untuk Tampil Syar'i dan Elegan
      </p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-[5vw]">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl p-6">
          <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
              <iconify-icon icon="hugeicons:hijab" width="32" height="32"
                class="bg-primary p-2 text-white rounded-xl"></iconify-icon>
              <h1 class="font-bold text-xl">Bahan Berkualitas</h1>
            </div>
          </div>
          <p class="text-gray-600 text-base font-medium text-center md:text-left">
            Menggunakan bahan pilihan yang lembut, ringan, dan tidak panas, sehingga nyaman dipakai seharian.
          </p>
        </div>
        <!-- Card 2 -->
        <div class="bg-white rounded-xl p-6">
          <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
              <iconify-icon icon="fluent:design-ideas-48-regular" width="32" height="32"
                class="bg-primary p-2 text-white rounded-xl"></iconify-icon>
              <h1 class="font-bold text-xl">Desain Eksklusif</h1>
            </div>
          </div>
          <p class="text-gray-600 text-base font-medium text-center md:text-left">
            Kualitas premium dengan harga yang bersahabat. Karena tampil anggun tak harus mahal.
          </p>
        </div>
        <!-- Card 3 -->
        <div class="bg-white rounded-xl p-6">
          <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
              <iconify-icon icon="solar:tag-price-outline" width="32" height="32"
                class="bg-primary p-2 text-white rounded-xl"></iconify-icon>
              <h1 class="font-bold text-xl">Harga Terjangkau</h1>
            </div>
          </div>
          <p class="text-gray-600 text-base font-medium text-center md:text-left">
            Kualitas premium dengan harga yang bersahabat. Karena tampil anggun tak harus mahal.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Produk Unggulan -->
  <section class="py-24 relative">
    <div class="container mx-auto px-4 py-8">
      <div class="lg:flex items-center justify-between mb-4">
        <h2 class="text-2xl lg:text-3xl font-bold">Produk <span class="text-[#E48786]">Unggulan</span></h2>
      </div>
      <div class="block lg:flex items-center justify-between mb-6 pb-4">
        <p class="text-base text-gray-700 font-medium mb-3 lg:mb-0">Pilihan Terbaik untuk Tampil Cantik dan Syar'i Setiap
          Hari</p>
        <a href="#" class="font-bold text-[#946756] hover:text-[#E48786] flex items-center gap-2">Lihat Semua
          <iconify-icon icon="ep:arrow-right-bold"></iconify-icon></a>
      </div>

      <div
        class="absolute top-[60%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#946756] rounded-full opacity-50 blur-3xl">
      </div>
      <div class="relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <!-- Produk Card -->
          @for ($i = 0; $i < 3; $i++)
            <div class="bg-white border border-gray-300 rounded-xl p-4">
              <img src="{{ asset('assets/prodimg.png') }}" alt="Pashmina Crinkle Erdejilbab"
                class="rounded-lg mb-4 w-full h-60 object-cover">
              <div class="flex flex-col items-center">
                <h3 class="font-bold text-xl text-[#946756]">Pashmina Crinkle Erdejilbab</h3>
                <p class="text-sm text-gray-700 font-medium my-4 text-center mx-4">Model Pashmina yang sedang hits....</p>
                <a href="#"
                  class="inline-block text-sm px-5 py-2 font-semibold text-[#946756] rounded-md border border-gray-500 hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">Lihat
                  Produk</a>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </section>

  <!-- Section Hubungi Kami -->
  <section class="py-24">
    <div class="container mx-auto px-4 py-8 text-center">
      <div class="mb-10">
        <h2 class="text-2xl font-bold lg:text-3xl mb-4">Hubungi <span class="text-[#E48786]">Kami</span></h2>
        <p class="text-base text-gray-700 font-medium">Ada pertanyaan, saran, atau ingin memesan langsung?</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
        <!-- Shopee -->
        <div
          class="border-2 border-gray-300 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
          <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <iconify-icon icon="tabler:brand-shopee" width="48" height="48" class="mb-3"></iconify-icon>
            <h1 class="font-bold text-xl mb-2">Shopee</h1>
            <p class="text-sm text-gray-700 font-medium mb-4">
              Dapatkan produk Erdejilbab di Shopee dengan promo menarik!
            </p>
            <a href="#"
              class="inline-block text-sm px-5 py-2 font-semibold text-[#946756] rounded-md border border-gray-500 
              hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">
              Kunjungi</a>
          </div>
        </div>
        <!-- WhatsApp -->
        <div
          class="border-2 border-gray-300 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
          <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <iconify-icon icon="ic:baseline-whatsapp" width="48" height="48" class="mb-3"></iconify-icon>
            <h1 class="font-bold text-xl mb-2">WhatsApp</h1>
            <p class="text-sm text-gray-700 font-medium mb-4">
              Hubungi kami langsung untuk konsultasi & pemesanan.
            </p>
            <a href="#"
              class="inline-block text-sm px-5 py-2 font-semibold text-[#946756] rounded-md border-2 border-gray-300 
              hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">Hubungi</a>
          </div>
        </div>
        <!-- TikTok -->
        <div
          class="border-2 border-gray-300 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
          <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <iconify-icon icon="mingcute:tiktok-line" width="48" height="48" class="mb-3"></iconify-icon>
            <h1 class="font-bold text-xl mb-2">TikTok</h1>
            <p class="text-sm text-gray-700 font-medium mb-4">
              Temukan koleksi dari video kami dan checkout tanpa ribet!
            </p>
            <a href="#"
              class="inline-block text-sm px-5 py-2 font-semibold text-[#946756] rounded-md border-2 border-gray-300 hover:border-[#E48786] 
              hover:bg-[#E48786] hover:text-white transition duration-200">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
