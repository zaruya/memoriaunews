<!doctype html>
<html class="h-full class="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="./dist/output.css">
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  </head>
  <body class="h-full bg-gray-200"> 

<div class="min-h-full class="light"">
  <!-- Inisialisasi state: openMobile untuk menu hp, openProfile untuk dropdown profile -->
 <x-navbar></x-navbar>

  <x-header>{{$title }}</x-header>
  <main >
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     {{ $slot }}
  
    </div>
  </main>
</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script> --}}
<script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>