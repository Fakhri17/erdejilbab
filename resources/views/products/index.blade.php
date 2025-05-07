@extends('layouts.app')

@section('title', 'List Produk')

<!-- Data Dummy -->
{{-- @php
  $products = [
      [
          'name' => 'Hijab Basic',
          'description' => 'Nyaman dan lembut dipakai harian.',
          'image_url' => 'assets/image.png',
          'harga' => 100000,
      ],
      [
          'name' => 'Hijab Premium',
          'description' => 'Tampil elegan dengan bahan premium.',
          'image_url' => '/img/image-14.png',
          'harga' => 200000,
      ],
      [
          'name' => 'Hijab Instan',
          'description' => 'Praktis tanpa jarum, langsung pakai.',
          'image_url' => '/img/image-15.png',
          'harga' => 150000,
      ],
      [
          'name' => 'Hijab Syar\'i',
          'description' => 'Menutup sempurna dengan gaya.',
          'image_url' => '/img/image.png',
          'harga' => 120000,
      ],
      [
          'name' => 'Hijab Segi Empat',
          'description' => 'Klasik dan timeless.',
          'image_url' => 'assets/image-14.png',
          'harga' => 90000,
      ],
      [
          'name' => 'Hijab Pashmina',
          'description' => 'Bisa dipakai berbagai gaya.',
          'image_url' => 'assets/image-15.png',
          'harga' => 130000,
      ],
      [
          'name' => 'Hijab Satin',
          'description' => 'Bahan satin yang mewah.',
          'image_url' => 'assets/image.png',
          'harga' => 250000,
      ],
  ];
@endphp --}}

@section('content')
  <section>
    <div class="container mx-auto px-4 py-8">
      <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <div class="flex flex-row flex-wrap items-center gap-2">
          <!-- Button Terbaru -->
          <button
            class="bg-white font-light text-sm py-2 px-4 border border-gray-300 rounded-md hover:bg-gray-100 shadow-md cursor-pointer">
            Terbaru
          </button>

          <!-- Button Dropdown Kategori -->
          <div class="hs-dropdown relative inline-flex">
            <button id="hs-dropdown-example" type="button"
              class="hs-dropdown-toggle py-2 px-4 inline-flex items-center gap-x-2 text-sm font-light border border-gray-300 rounded-md bg-white hover:bg-gray-100 shadow-md cursor-pointer"
              aria-haspopup="menu" aria-expanded="false">
              Kategori
              <svg class="hs-dropdown-open:rotate-180 size-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>

            <!-- Dropdown Menu -->
            <div class="hs-dropdown-menu hidden absolute z-10 mt-2 w-56 bg-white shadow-md rounded-lg p-2">
              <a href="#" class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded">Newsletter</a>
              <a href="#" class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded">Purchases</a>
              <a href="#" class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded">Downloads</a>
              <a href="#" class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded">Team Account</a>
            </div>
          </div>
        </div>

        <!-- Search Box -->
        <div class="flex w-full md:max-w-md">
          <input type="text" placeholder="Cari Produk"
            class="w-full px-4 py-2 text-sm font-light border border-gray-300 rounded-l-md focus:outline-none shadow-md" />
          <button
            class="bg-[#8B5E3C] hover:bg-[#7a4f31] text-white px-4 py-2 border border-gray-300 border-l-0 rounded-r-md shadow-md cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container mx-auto px-4 py-8">
      <!-- Judul -->
      <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">
        Produk <span class="text-[#e48786]">Erdejilbab</span>
        <span class="opacity-50 font-normal text-2xl sm:text-3xl md:text-4xl"></span>
      </h1>

      <!-- Card Produk -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        @for ($i = 0; $i < 9; $i++)
          <div
            class="flex flex-col bg-white border-none rounded-xl overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <!-- Gambar -->
            <div class="aspect-[4/5] overflow-hidden">
              <img src="{{ asset('assets/image-14.png') }}" alt="xyz"
                class="w-full h-full rounded-xl object-cover transition-transform duration-500 ease-in-out hover:scale-105">
            </div>
            <!-- Konten -->
            <div class="p-4 md:p-5 flex flex-col justify-between flex-grow">
              <div>
                <h3 class="text-base sm:text-lg md:text-lg font-bold">
                  Produk Hijab
                </h3>
                <p class="mt-1 text-sm sm:text-base text-gray-500 dark:text-neutral-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore soluta omnis consequatur unde ipsum deserunt reprehenderit tempore, esse aut nisi beatae, sint magni vero sit! Iusto ea incidunt dolor!
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <p class="text-base sm:text-lg md:text-xl font-bold text-black">
                  Rp200.000
                </p>
                <a href="#"
                  class="text-sm sm:text-lg text-[#8B5E3C] border border-[#8B5E3C] font-semibold rounded-lg px-4 py-1 hover:bg-[#8B5E3C] hover:text-white transition">
                  Lihat Produk
                </a>
              </div>
            </div>
          </div>
        @endfor

      </div>
    </div>
  </section>

@endsection
