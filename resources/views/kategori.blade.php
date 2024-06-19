<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to RestBoy Restaurant</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="h-full">
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
  <div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header>RestoBoy kategori</x-header>


    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
        <div class="bg-white">

          <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">



            <a href="#" class="group" style="display: inline-block; width: 300px;">
              <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                style="width: 300px; height: 300px;">
                <img
                  src="https://images.pexels.com/photos/3926124/pexels-photo-3926124.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700" style="font-size: 20px; text-align: center;">Makanan</h3>
            </a>

            <a href="#" class="group" style="display: inline-block; width: 300px;">
              <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
                style="width: 300px; height: 300px;">
                <img src="https://cdn.pixabay.com/photo/2024/04/18/09/07/coffee-8703864_1280.png"
                  class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700" style="font-size: 20px; text-align: center;">Minuman</h3>
            </a>


            <!-- More products... -->
          </div>
        </div>
      </div>

  </div>
  <x-footer></x-footer>
  </main>
  </div>

</body>

</html>