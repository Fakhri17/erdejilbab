@props(['product'])



<div
  class="flex flex-col group bg-white border border-gray-200 shadow-2xs rounded-xl 
              overflow-hidden shadow-xl shadow-primary/50 focus:outline-hidden focus:shadow-lg transition">
  <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
    @if ($product->product_images)
      <img
        class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
        src="{{ asset('storage/' . $product->product_images[0]) }}" alt="Card Image">
    @else
      <img
        class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
        src="https://placehold.co/600x400" alt="Card Image">
    @endif
  </div>
  <div class="p-4 md:p-5">

    <h3 class="text-xl font-bold text-secondary">
      {{ $product->name }}
    </h3>
    <div class="mt-3">
      {!! Str::limit($product->description, 100) !!}
      <div class="mt-5 flex items-center justify-between">
        <p class="text-xl font-bold text-black">
          Rp{{ number_format($product->price, 0, ',', '.') }}
        </p>
        <div class="flex gap-2">

          <a href="{{ route('products.show', $product->slug) }}"
            class="inline-block px-3 py-1.5 text-sm font-bold text-secondary rounded-md border border-gray-400 hover:border-secondary hover:bg-secondary hover:text-white transition duration-200">
            Lihat Produk
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
