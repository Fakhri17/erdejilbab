@extends('layouts.app')

@section('title', 'List Produk')


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
              class="hs-dropdown-toggle py-2.5 px-5 inline-flex items-center gap-x-2 text-base font-medium border border-gray-300 rounded-md bg-white hover:bg-gray-100 shadow-lg shadow-primary/50 cursor-pointer"
              aria-haspopup="menu" aria-expanded="false">
              {{ request('category') ? $categories->firstWhere('slug', request('category'))->name : 'Kategori' }}
              <svg class="hs-dropdown-open:rotate-180 size-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>

            <!-- Dropdown Menu -->
            <div class="hs-dropdown-menu hidden absolute z-10 mt-2 w-56 bg-white shadow-md rounded-lg p-2">
              <a href="{{ route('products.index', request('search') ? ['search' => request('search')] : []) }}"
                class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded {{ !request('category') ? 'bg-gray-100' : '' }}">
                Semua Kategori
              </a>
              @foreach ($categories as $category)
                <a href="{{ route(
                    'products.index',
                    array_merge(request('search') ? ['search' => request('search')] : [], ['category' => $category->slug]),
                ) }}"
                  class="block px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 rounded {{ request('category') == $category->slug ? 'bg-gray-100' : '' }}">
                  {{ $category->name }}
                </a>
              @endforeach
            </div>
          </div>
        </div>

        <!-- Search Box -->
        <form action="{{ route('products.index') }}" method="GET" class="flex w-full md:max-w-md">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Produk"
            class="w-full px-4 py-2 text-sm font-light border border-gray-300 rounded-l-md focus:outline-none shadow-md bg-white" />
          <button type="submit"
            class="bg-primary hover:bg-[#f18787] text-white px-4 py-2 border border-gray-300 border-l-0 rounded-r-md shadow-md cursor-pointer flex items-center justify-center ">
            <iconify-icon icon="iconamoon:search" width="20" height="20"></iconify-icon>
          </button>
        </form>
      </div>
    </div>
  </section>


  <section class="">
    <div class="container mx-auto px-4 py-8">
      <!-- Judul -->
      <div class="flex items-center gap-2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
          Produk <span class="text-primary">Erdejilbab</span>
        </h1>
        <span class="text-lg sm:text-xl md:text-2xl text-gray-100">({{ $products->total() }})</span>
      </div>

      @if (request('search') && $products->isEmpty())
        <div class="mt-8 flex justify-center">
          <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 w-full max-w-2xl">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-3">
                <p class="text-sm text-yellow-700">
                  Tidak ada produk yang ditemukan untuk pencarian "{{ request('search') }}"
                </p>
              </div>
            </div>
          </div>
        </div>
      @endif

      @if (request('category') && $products->isEmpty() && !request('search'))
        <div class="mt-8 flex justify-center">
          <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 w-full max-w-2xl">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-3">
                <p class="text-sm text-yellow-700">
                  Tidak ada produk yang ditemukan untuk kategori
                  "{{ $categories->firstWhere('slug', request('category'))->name }}"
                </p>
              </div>
            </div>
          </div>
        </div>
      @endif

      <!-- Card Produk -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
        @forelse ($products as $product)
          <x-product_list :product="$product" />
        @empty
          @if (!request('category') && !request('search'))
            <div class="col-span-full text-center py-8">
              <p class="text-gray-500">Tidak ada produk yang ditemukan</p>
            </div>
          @endif
        @endforelse

      </div>

      <!-- Pagination Section -->
      <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="text-sm text-gray-100 font-semibold">
          Menampilkan {{ $products->firstItem() ?? 0 }} sampai {{ $products->lastItem() ?? 0 }} dari
          {{ $products->total() }} produk
        </div>
        <div>
          <x-pagination :paginator="$products->appends(request()->query())" />
        </div>
      </div>
    </div>
  </section>

@endsection
