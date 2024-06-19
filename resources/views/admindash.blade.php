<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome To RestoBoy || Admin</title>
   @vite('resources/css/app.css')
   <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="h-full">


   <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
      type="button"
      class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
         xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
         </path>
      </svg>
   </button>



   <aside id="default-sidebar"
      class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
      aria-label="Sidebar">

      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
         <br>
         <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-20 h-20 mr-15" src="img/logo.png" alt="logo">
            RestoBoy
         </a>
         <p>Welcome Admin</p>

         <br>

         <!--Reservasi  -->

         <li>
            <a href="adminreservasi"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg
                  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                  <path
                     d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                  <path
                     d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Reservasi</span>
            </a>
         </li>

         <li>
            <a href="#"
               class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg
                  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
            </a>
         </li>
         </ul>
      </div>


      <!-- Conten isi kanan side bar  -->


   </aside>



   <div class="w-full mx-auto bg-white p-4 shadow rounded">
      <div class="flex justify-end mb-4">



         <x-popupbtn>

            <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">

               <div class="mb-4">
                  <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                  <input type="text" id="name"
                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                     placeholder="Enter name">
               </div>
               <div class="mb-4">
                  <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                  <input type="file" id="image"
                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-4">
                  <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                  <textarea id="description"
                     class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                     placeholder="Enter description"></textarea>
               </div>
               <div class="flex items-center justify-between">
                  <button
                     class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                     type="button">
                     Store
                  </button>
               </div>

            </div>

         </x-popupbtn>

      </div>
      <div class="overflow-x-auto">

         @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
       @endif




         <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
               <tr>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                  </th>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                     Jumlah Tamu</th>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                     Tanggal</th>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu
                  </th>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No
                     telepon</th>
                  <th scope="col"
                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Meja
                  </th>
               </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->nama_depan }}</td>
                        <td>{{ $reservation->nama_belakang }}</td>
                        <td>{{ $reservation->jumlah_tamu }}</td>
                        <td>{{ $reservation->tanggal }}</td>
                        <td>{{ $reservation->waktu }}</td>
                        <td>{{ $reservation->no_telepon }}</td>
                        <td>{{ $reservation->meja }}</td>
                        <td>

                        <button class="btn-edit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-id="{{ $reservation->id }}">Edit</button>
                            <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
         </table>
      </div>
      

      <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="editModal">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="editModalLabel">Edit Reservation</h3>
                        <div class="mt-2">
                            <form id="editForm" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="nama_depan" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                                    <input type="text" id="nama_depan" name="nama_depan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="nama_belakang" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                                    <input type="text" id="nama_belakang" name="nama_belakang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="jumlah_tamu" class="block text-sm font-medium text-gray-700">Jumlah Tamu</label>
                                    <input type="number" id="jumlah_tamu" name="jumlah_tamu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu</label>
                                    <input type="time" id="waktu" name="waktu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="no_telepon" class="block text-sm font-medium text-gray-700">No Telepon</label>
                                    <input type="text" id="no_telepon" name="no_telepon" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mb-4">
                                    <label for="meja" class="block text-sm font-medium text-gray-700">Meja</label>
                                    <input type="text" id="meja" name="meja" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div class="mt-5 sm:mt-6">
                                    <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admindash/reservations/' + id + '/edit',
                method: 'GET',
                success: function(data) {
                    $('#editForm').attr('action', '/admindash/reservations/' + id + '/update');
                    $('#nama_depan').val(data.nama_depan);
                    $('#nama_belakang').val(data.nama_belakang);
                    $('#jumlah_tamu').val(data.jumlah_tamu);
                    $('#tanggal').val(data.tanggal);
                    $('#waktu').val(data.waktu);
                    $('#no_telepon').val(data.no_telepon);
                    $('#meja').val(data.meja);
                    $('#editModal').removeClass('hidden');
                }
            });
        });

        // Close modal
        $('[data-dismiss="modal"]').on('click', function() {
            $('#editModal').addClass('hidden');
        });
    });
</script>

</body>

</html>