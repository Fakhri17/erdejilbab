@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- Hero Section -->
  <section class="py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4 flex flex-col-reverse md:flex-row justify-between items-center gap-8">
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-3xl md:text-4xl font-bold mb-5 leading-normal">
          Tampil Anggun & Syar'i <br />Bersama <span class="text-[#E48786]">Erdejilbab</span>
        </h1>
        <p class="text-gray-600 mb-8 pr-8">
          Pilihan sempurna untuk gaya muslimah modern, eksklusif hanya di Erdejilbab.
        </p>
        <a href="#"
          class="inline-block px-6 py-3 font-bold text-[#946756] rounded border border-gray-300 shadow hover:bg-[#E48786] hover:text-white transition duration-200">
          Lihat Produk
        </a>
      </div>
      <div class="md:w-1/2 flex justify-center">
        <img src="/assets/heroimg.png" alt="Model Hijab" class="max-w-xs w-full md:max-w-md rounded-xl">
      </div>
    </div>
  </section>

  <!-- Keunggulan Section -->
  <section class="max-w-6xl mx-auto py-10 text-center">
    <h2 class="text-2xl lg:text-3xl font-bold mb-4">Keunggulan <span class="text-[#E48786]">Erdejilbab</span></h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-10">
      Mengapa Erdejilbab Menjadi Pilihan Tepat untuk Tampil Syar'i dan Elegan
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-[5vw]">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl p-6">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
          <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
            <img src="/assets/icon1.png" alt="Bahan Berkualitas" class="w-12 h-12">
            <h1 class="font-bold text-lg">Bahan Berkualitas</h1>
          </div>
        </div>
        <p class="text-gray-600 text-sm text-center md:text-left">
          Kualitas premium dengan harga yang bersahabat. Karena tampil anggun tak harus mahal.
        </p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white rounded-xl p-6">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
          <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
            <img src="/assets/icon2.png" alt="Desain Eksklusif" class="w-12 h-12">
            <h1 class="font-bold text-lg">Desain Eksklusif</h1>
          </div>
        </div>
        <p class="text-gray-600 text-sm text-center md:text-left">
          Kualitas premium dengan harga yang bersahabat. Karena tampil anggun tak harus mahal.
        </p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-xl p-6">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-4 mb-3 text-center md:text-left">
          <div class="flex flex-col md:flex-row items-center md:items-center gap-4">
            <img src="/assets/icon3.png" alt="Harga Terjangkau" class="w-12 h-12">
            <h1 class="font-bold text-lg">Harga Terjangkau</h1>
          </div>
        </div>
        <p class="text-gray-600 text-sm text-center md:text-left">
          Kualitas premium dengan harga yang bersahabat. Karena tampil anggun tak harus mahal.
        </p>
      </div>
    </div>
  </section>

  <!-- Section Produk Unggulan -->
  <section class="max-w-6xl mx-auto px-4 py-10 relative">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl lg:text-3xl font-bold">Produk <span class="text-[#E48786]">Unggulan</span></h2>
      </div>
      <div class="flex items-center justify-between mb-6 pb-4">
        <p class="text-sm text-gray-500">Pilihan Terbaik untuk Tampil Cantik dan Syar'i Setiap Hari</p>
        <a href="#" class="font-bold text-[#946756] hover:text-[#E48786]">Lihat Semua &gt;</a>
      </div>

      <div class="absolute top-[60%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#946756] rounded-full opacity-50 blur-3xl"></div>
      <div class="relative z-10">
  
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Produk Card -->
        <div class="bg-white border border-gray-300 rounded-xl p-4">
          <img src="/assets/prodimg.png" alt="Pashmina Crinkle Erdejilbab" class="rounded-lg mb-4 w-full h-60 object-cover">
          <div class="flex flex-col items-center">
            <h3 class="font-semibold text-lg text-[#946756] mb-1">Pashmina Crinkle Erdejilbab</h3>
            <p class="text-sm text-gray-500 mb-4 text-center mx-4">Bahan katun ombre super dengan ukuran 180x80cm</p>
            <button
              class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">Lihat
              Produk</button>
          </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-xl p-4">
          <div class="flex flex-col items-center">
            <img src="/assets/prodimg.png" alt="Pashmina Kaos Rayon Super" class="rounded-lg mb-4 w-full h-60 object-cover">
            <h3 class="font-semibold text-lg text-[#946756] mb-1">Pashmina Kaos Rayon Super</h3>
            <p class="text-sm text-gray-500 mb-4 text-center mx-4">Bahan rayon spandex super dengan ukuran 180x60cm</p>
          <button
              class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">Lihat
              Produk</button>
          </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-xl p-4">
          <div class="flex flex-col items-center">
            <img src="/assets/prodimg.png" alt="Hijab Azara Voal Segi Empat" class="rounded-lg mb-4 w-full h-60 object-cover">
            <h3 class="font-semibold text-lg text-[#946756] mb-1">Hijab Azara Voal Segi Empat</h3>
            <p class="text-sm text-gray-500 mb-4 text-center mx-4">Bahan voal miracle ori Azara dengan ukuran 110x110cm</p>
          <button
            class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">Lihat
            Produk</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Hubungi Kami -->
  <section class="max-w-6xl mx-auto px-4 py-10 text-center">
    <h2 class="text-2xl font-bold lg:text-3xl mb-4">Hubungi <span class="text-[#E48786]">Kami</span></h2>
    <p class="text-sm text-gray-600 mt-2 mb-8">Ada pertanyaan, saran, atau ingin memesan langsung?</p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
      <!-- Shopee -->
      <div class="border border-gray-300 hover:border-3 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <img src="/assets/shope.png" alt="Shopee Icon" class="mb-3" >
          <h1 class="font-bold text-lg mb-1">Shopee</h1>
          <p class="text-sm text-gray-500 mb-4">
            Dapatkan produk Erdejilbab di Shopee dengan promo menarik!
          </p>
          <a href="#"
            class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">
            Kunjungi
          </a>
        </div>
      </div>
      <!-- WhatsApp -->
      <div class="border border-gray-300 hover:border-3 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <img src="/assets/wa.png" alt="WhatsApp Icon" class="mb-3">
          <h1 class="font-bold text-lg mb-1">WhatsApp</h1>
          <p class="text-sm text-gray-500 mb-4">
            Hubungi kami langsung untuk konsultasi & pemesanan.
          </p>
          <a href="#"
            class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">
            Kunjungi
          </a>
        </div>
      </div>
      <!-- TikTok -->
      <div class="border border-gray-300 hover:border-3 hover:border-[#E48786] rounded-xl p-10 bg-white transition duration-300">
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <img src="/assets/tiktok.png" alt="Tiktok Icon" class="mb-3">
          <h1 class="font-bold text-lg mb-1">TikTok</h1>
          <p class="text-sm text-gray-500 mb-4">
            Temukan koleksi dari video kami dan checkout tanpa ribet!
          </p>
          <a href="#"
            class="text-sm text-[#946756] hover:text-white hover:bg-[#E48786] border border-gray-300 px-4 py-2 rounded transition duration-200">
            Kunjungi
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
