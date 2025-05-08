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
  <section class="pt-24 pb-12">
    <div class="container mx-auto px-4 py-8">
      <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <div class="flex flex-row flex-wrap items-center gap-2">
          <!-- Button Terbaru -->
          {{-- <button
            class="bg-white font-light text-sm py-2 px-4 border border-gray-300 rounded-md hover:bg-gray-100 shadow-md cursor-pointer">
            Terbaru
          </button> --}}

          <!-- Button Dropdown Kategori -->
          <div class="hs-dropdown relative inline-flex">
            <button id="hs-dropdown-example" type="button"
              class="hs-dropdown-toggle py-2.5 px-5 inline-flex items-center gap-x-2 text-base font-medium border border-gray-300 rounded-md bg-white hover:bg-gray-100 shadow-md cursor-pointer"
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
            class="bg-[#8B5E3C] hover:bg-[#7a4f31] text-white px-4 py-2 border border-gray-300 border-l-0 rounded-r-md shadow-md cursor-pointer flex items-center justify-center">
            <iconify-icon icon="iconamoon:search" width="20" height="20"></iconify-icon>
          </button>
        </div>
      </div>
    </div>
  </section>


  <section class="">
    <div class="container mx-auto px-4 py-8">
      <!-- Judul -->
      <div class="flex items-center gap-2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">
          Produk <span class="text-[#e48786]">Erdejilbab</span>
        </h1>
        <span class="text-lg sm:text-xl md:text-2xl text-gray-500">(14)</span>
      </div>

      <!-- Card Produk -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
        @for ($i = 0; $i < 9; $i++)
          <div
            class="flex flex-col group bg-white border border-gray-200 shadow-2xs rounded-xl 
            overflow-hidden hover:shadow-lg focus:outline-hidden focus:shadow-lg transition">
            <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
              <img
                class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                src="{{ asset('assets/image-14.png') }}" alt="Card Image">
            </div>
            <div class="p-4 md:p-5">

              <h3 class="text-xl font-bold text-secondary">
                Card title
              </h3>
              <div class="mt-1">
                <p class="text-sm text-gray-700 font-medium mt-4 mb-6">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <div class="mt-3 flex items-center justify-between">
                  <p class="text-base font-bold text-black">
                    Rp200.000
                  </p>
                  <a href="#"
                    class="inline-block px-3 py-1.5 text-sm font-bold text-[#946756] rounded-md border border-gray-400 hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">
                    Lihat Produk
                  </a>
                </div>
              </div>

            </div>
          </div>
          {{-- <div
            class="flex flex-col bg-white border-none rounded-xl overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <!-- Gambar -->
            <div class="aspect-[4/5] overflow-hidden">
              <img src="{{ asset('assets/image-14.png') }}" alt="xyz"
                class="w-full h-full rounded-xl object-cover transition-transform duration-500 ease-in-out hover:scale-105">
            </div>
            <!-- Konten -->
            <div class="p-3 flex flex-col justify-between flex-grow">
              <div>
                <h3 class="text-base font-bold text-primary">
                  Produk Hijab
                </h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-neutral-400 line-clamp-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore soluta omnis consequatur
                  unde ipsum deserunt reprehenderit tempore.
                </p>
              </div>
              <div class="mt-3 flex items-center justify-between">
                <p class="text-base font-bold text-black">
                  Rp200.000
                </p>
                <a href="#"
                  class="inline-block px-3 py-1.5 text-sm font-bold text-[#946756] rounded-md border border-gray-400 hover:border-[#E48786] hover:bg-[#E48786] hover:text-white transition duration-200">
                  Lihat
                </a>
              </div>
            </div>
          </div> --}}
        @endfor

      </div>
    </div>
  </section>

@endsection
