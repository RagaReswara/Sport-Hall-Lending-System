@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

        <div class="border-b-4 border-gray-900/40 pb-6">
            <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Booking</h2>
            <p class="mt-1 text-base leading-6 text-gray-600">Pastikan Booking yang dilakukan sudah benar</p>
        </div>

        <!-- TABEL -->
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam / Slot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lapangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4">
                            Selasa
                        </td>
                        <td class="px-6 py-4">
                            17-04-2024
                        </td>
                        <td class="px-6 py-4">
                            08.00 - 10.00
                        </td>
                        <td class="px-6 py-4">
                            Basket
                        </td>
                        <td class="px-6 py-4">
                            Full Lapangan
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <div class="flex items-center px-4 h-9 ">
                    <input id="termCheck" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="termCheck" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-500">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
                </div>
                <div class="inline-flex mt-2 xs:mt-0">
                    <button id="kembaliButton" type="button" class="flex items-center justify-center px-4 h-9 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        Kembali
                    </button>
                    <button id="ajukanButton" data-modal-target="alertRekapPeminjaman" data-modal-toggle="popup-modal" type="button" class="flex items-center justify-center pointer-events-none opacity-50 px-4 h-9 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-600 dark:hover:text-white">
                        Ajukan Peminjaman
                    </button>
                </div>
            </div>


        </div>
    </div>

    <script>
        const kembaliButton = document.getElementById("kembaliButton");
        const ajukanButton = document.getElementById("ajukanButton");
        const termCheck = document.getElementById('termCheck');

        kembaliButton.addEventListener("click", function() {
            window.location.href = "http://127.0.0.1:8000/form"; 
        });

        // ajukanButton.addEventListener("click", function(){
        //     window.location.href = "http://127.0.0.1:8000/peminjam";
        // });

        termCheck.addEventListener('change', function() {
            if (this.checked) {
                ajukanButton.classList.remove('pointer-events-none', 'opacity-50');
            } else {
                ajukanButton.classList.add('pointer-events-none', 'opacity-50');
            }
        });


    </script>

@endsection