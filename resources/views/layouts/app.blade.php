<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>@yield('title', 'Default Title') | {{ config('app.name') }}</title>
</head>

<body>
  <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-3 shadow">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold focus:outline-hidden focus:opacity-80" href="#"
          aria-label="Brand">
          Brand
        </a>
        <div class="sm:hidden">
          <button type="button"
            class="hs-collapse-toggle relative size-9 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
            aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
      </div>
      <div id="hs-navbar-example"
        class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block"
        aria-labelledby="hs-navbar-example-collapse">
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
          <a class="font-medium text-blue-500 focus:outline-hidden" href="#" aria-current="page">Landing</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
            href="#">Account</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
            href="#">Work</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
            href="#">Blog</a>
          <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] ">
            <button id="hs-navbar-example-dropdown" type="button"
              class="hs-dropdown-toggle flex items-center w-full text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400 font-medium"
              aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
              Dropdown
              <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:rotate-0 duration-300 ms-1 shrink-0 size-4"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
              </svg>
            </button>

            <div
              class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-1 space-y-1 sm: before:absolute top-full sm:border border-gray-200 before:-top-5 before:start-0 before:w-full before:h-5 hidden"
              role="menu" aria-orientation="vertical" aria-labelledby="hs-navbar-example-dropdown">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                About
              </a>
              <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] relative">
                <button id="hs-navbar-example-dropdown-sub" type="button"
                  class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg py-2 px-3 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                  Sub Menu
                  <svg
                    class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:-rotate-90 sm:-rotate-90 duration-300 ms-2 shrink-0 size-4"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                  </svg>
                </button>

                <div
                  class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg sm: before:absolute sm:border border-gray-200 before:-end-5 before:top-0 before:h-full before:w-5 sm:mx-2.5! top-0 end-full"
                  role="menu" aria-orientation="vertical" aria-labelledby="hs-navbar-example-dropdown-sub">
                  <div class="p-1 space-y-1">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                      href="#">
                      About
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                      href="#">
                      Downloads
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                      href="#">
                      Team Account
                    </a>
                  </div>
                </div>
              </div>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Downloads
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                href="#">
                Team Account
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>

  {{-- <script src="./assets/vendor/preline/dist/preline.js"></script> --}}
</body>

</html>
