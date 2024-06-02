@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
            
            <div class="border-b-4 border-gray-900/40 pb-6 mt-2 mb-10">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Permohonan Rutin</h2>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10 mt">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-300">
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Organisasi
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : UKM Basket
                        </td>
                        <th scope="col" class="px-6 py-3">
                            No Telp
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 08777213873
                        </td>
                    </tr>
                        
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Basket
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Lapangan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Full Lapangan
                        </td>
                    </tr>

                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Selasa dan Kamis
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 16.00 - 20.00
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 17 April 2024 - 17 Oktober 2024
                        </td>
                    </tr>
                </thead>
            </table>

            <div class="flex flex-1 mt-5">
                <textarea id="catatan" rows="4" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan Catatan Untuk Peminjam"></textarea>
            </div>

                <div class="flex flex-1 rounded-md shadow-sm mt-5 justify-end" role="group">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">              
                        Tolak                    
                    </button> 
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-green-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-gray-600 dark:focus:text-white">
                        Setujui
                    </button>
                </div>

            </div>
        </div>

</div>

@endsection