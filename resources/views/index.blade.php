@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <main>
    <section
      class="relative flex flex-col justify-center items-center h-screen bg-gray-900 text-red-500 text-center overflow-hidden">
      <!-- Decorative circles outside the text -->
      <div class="absolute top-10 left-10 w-40 h-40 bg-blue-500 rounded-full blur-lg opacity-30"></div>
      <div class="absolute bottom-20 right-20 w-40 h-40 bg-green-500 rounded-full blur-lg opacity-30"></div>
      <div class="absolute top-1/3 right-1/4 w-32 h-32 bg-red-500 rounded-full blur-lg opacity-30"></div>

      <!-- Main content -->
      <h1 class="relative text-7xl font-bold mb-4">
        ErdeJilbab
        <!-- Decorative circle inside the text -->
        <span class="absolute -top-4 -left-6 w-14 h-14 bg-red-700 rounded-full blur-md opacity-50"></span>
        <span class="absolute -bottom-16 -right-6 w-20 h-20 bg-purple-500 rounded-full blur-md opacity-50"></span>
      </h1>
      <p class="relative text-3xl font-semibold mb-3">
        Akan segera hadir!
        <!-- Decorative circle inside the text -->
        <span class="absolute -top-2 -right-4 w-14 h-14 bg-orange-500 rounded-full blur-md opacity-50"></span>
      </p>
      <p class="mt-2 text-base text-gray-200">
        Masih dalam tahap pengembangan, silahkan tunggu informasi selanjutnya.
      </p>
    </section>
  </main>
@endsection
