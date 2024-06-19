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

  <div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header>RestoBoy Reservation</x-header>

    <main>
      <!-- Komponen -->
      <div class="flex items-center justify-center p-12">
        <!-- Penulis: Tim FormBold -->
        <!-- Pelajari Lebih Lanjut: https://formbold.com -->

        <div class="mx-auto w-full max-w-[550px]">
          @if (session('success'))
        <div>
        {{ session('success') }}
        </div>
      @endif
          <form action="#" method="POST">

            @csrf

            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                    Nama Depan
                  </label>
                  <input type="text" name="nama_depan" id="fName" placeholder="Nama Depan"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
              </div>
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                    Nama Belakang
                  </label>
                  <input type="text" name="nama_belakang" id="lName" placeholder="Nama Belakang"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
              </div>
            </div>


            <div class="mb-5">
              <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                Berapa banyak tamu yang akan Anda bawa?
              </label>
              <input type="number" name="jumlah_tamu" id="guest" placeholder="5" min="0"
                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                    Tanggal
                  </label>
                  <input type="date" name="tanggal" id="date"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
              </div>

              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                    Waktu
                  </label>
                  <input type="time" name="waktu" id="time"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
              </div>

              <form class="max-w-sm mx-auto">
                <label for="phone-input"
                  class="relative ml-3 block mb-2 ml-2 text-medium font-medium text-gray-900 dark:text-white">Nomor
                  Telepon: </label>

                <div class="relative ml-4">
                  <div class="absolute inset-y-0 start-0 top-0 flex items-center left-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                      <path
                        d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                    </svg>
                  </div>

                  <input type="text" id="no_telepon" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pl-8 pr-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="1234567890" required />

                </div>
                <br>
                <br>
                <p class="relative ml-3 text-xs" id="helper-text-explanation">Pilih nomor telepon yang sesuai dengan
                  format.</p>
                <br>
                <br>
              </form>



              <!-- Button pop up -->

              <button type="button" onclick="toggleModal('small-modal-id')" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900
               focus:ring-4 focus:outline-none focus:ring-gray-300
               font-medium rounded-lg text-sm px-20 py-5 text-center
               me-2 mb-2 dark:border-gray-600 dark:text-gray-400
               dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" style="margin-left: 280px;">
                Next
              </button>



              <div
                class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="small-modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-sm">
                  <!--content-->
                  <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div
                      class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                      <h3 class="text-3xl font-semibold">
                        Pilih meja yang di pesan
                      </h3>
                      <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('small-modal-id')">
                        <span
                          class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                          ×
                        </span>
                      </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">

                      <!-- combo box -->


                      <div class="w-64">
                        <label for="example-combobox" class="block text-sm font-medium text-gray-700">Pilih
                          opsi:</label>
                        <select id="example-combobox" name="meja"
                          class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          <option>Meja-2</option>
                          <option>Meja-4</option>
                          <option>Meja-6</option>

                        </select>
                      </div>

                      <div class="relative" data-hs-combo-box='{
                      "apiUrl": "https://freetestapi.com/api/v1/countries",
                      "outputItemTemplate": "<div class=\"cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 
                      rounded-lg focus:outline-none focus:bg-gray-100" data-hs-combo-box-output-item><div class=\"flex justify-between 
                      items-center w-full\"><div><div data-hs-combo-box-output-item-field=\"name\" data-hs-combo-box-search-text 
                      data-hs-combo-box-value></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600"
                       xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></div></div>"
}'>
                        <div class="relative">

                          <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                            <svg class="flex-shrink-0 size-3.5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="m7 15 5 5 5-5"></path>
                              <path d="m7 9 5-5 5 5"></path>
                            </svg>
                          </div>
                        </div>
                        <div
                          class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300"
                          style="display: none;" data-hs-combo-box-output=""></div>
                      </div>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                      <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('small-modal-id')">
                        Cancel
                      </button>
                      <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit" onclick="toggleModal('small-modal-id')">
                        Kirim
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="small-modal-id-backdrop"></div>
              <script type="text/javascript">
                function toggleModal(modalID) {
                  document.getElementById(modalID).classList.toggle("hidden");
                  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                  document.getElementById(modalID).classList.toggle("flex");
                  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                }
              </script>

              <!-- Modal -->


          </form>
        </div>
      </div>




    </main>

    <x-footer></x-footer>


  </div>

</body>

</html>