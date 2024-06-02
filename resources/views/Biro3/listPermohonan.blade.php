@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <h2 class="font-bold text-3xl text-gray-200 mb-5 bg-gray-800 rounded-lg p-1 flex justify-between items-center w-full">DAFTAR PERMOHONAN</h2>

            <!-- <h2 class="font-bold text-3xl">Permintaan Harian</h2> -->
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slot
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="permohonanHarian">

                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            <h2 class="hidden font-bold text-3xl mt-10">Permintaan Rutin</h2>
            
            <!-- TABEL RUTIN -->
            <div class="hidden relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slot
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="permohonanRutin">
                        
                    </tbody>
                </table>
            </div>
            <!-- TABEL RUTIN -->

            <h2 class="hidden font-bold text-3xl mt-10">Permintaan Event</h2>

            <!-- TABEL EVENT -->
            <div class="hidden relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="permohonanEvent">
                        
                    </tbody>
                </table>
            </div>
            <!-- TABEL EVENT -->

            </div>
        </div>

        <script>
            
            // HARIAN
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/form')
                    .then(response => response.json())
                    .then(data => {
                        const tbodyHarian = document.querySelector('#permohonanHarian');
                        data.data.forEach((item) => {
                            console.log(data)
                            if(item.status !== 3 && item.status !== 2){
                                if(item.special_status !== 3){
                                const row = 
                                `
                                    <tr class="bg-white border-b text-lg dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
                                        <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
                                            ${item.nama_organisasi}
                                        </th>
                                        <td class="px-6 py-4">
                                            0${item.no_telp}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.kat_kegiatan}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.nama_pj}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.tanggal}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.hari}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.slot}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="http://127.0.0.1:8000/detailPermohonan/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                        </td>
                                    </tr>
                                `;
                                tbodyHarian.innerHTML += row;
                                console.log(item.nama_organisasi);            
                            }
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });

            // RUTIN
            // document.addEventListener('DOMContentLoaded', function() {
            //     fetch('http://127.0.0.1:8000/api/form')
            //         .then(response => response.json())
            //         .then(data => {
            //             const tbodyHarian = document.querySelector('#permohonanRutin');
            //             data.data.forEach((item) => {
            //                 console.log(data)
            //                 if(item.hariRutin !== null && item.status !== 2){
            //                     if(item.surat_peminjaman === null && item.status !== 3){
            //                         const row = 
            //                         `
            //                             <tr class="bg-white border-b text-base dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
            //                                 <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
            //                                     ${item.nama_organisasi}
            //                                 </th>
            //                                 <td class="px-6 py-4">
            //                                     0${item.no_telp}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.kat_kegiatan}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.nama_pj}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.tanggal}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.hari} dan ${item.hariRutin}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.slot}
            //                                 </td>
            //                                 <td class="px-6 py-4 text-right">
            //                                     <a href="http://127.0.0.1:8000/detailPermohonan/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
            //                                 </td>
            //                             </tr>
            //                         `;
            //                         tbodyHarian.innerHTML += row;
            //                         console.log(item.nama_organisasi);
            //                         }
            //                 }
            //             });
            //         })
            //         .catch(error => console.error('Error fetching data:', error));
            // });

            // EVENT
            // document.addEventListener('DOMContentLoaded', function() {
            //     fetch('http://127.0.0.1:8000/api/form')
            //         .then(response => response.json())
            //         .then(data => {
            //             const tbodyHarian = document.querySelector('#permohonanEvent');
            //             data.data.forEach((item) => {
            //                 console.log(data)
            //                 if(item.hariRutin === null && item.status !== 2){
            //                     if(item.surat_peminjaman !== null && item.status !== 3){
            //                         const row = 
            //                         `
            //                             <tr class="bg-white border-b text-base dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
            //                                 <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
            //                                     ${item.nama_organisasi}
            //                                 </th>
            //                                 <td class="px-6 py-4">
            //                                     0${item.no_telp}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.kat_kegiatan}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.nama_pj}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.tanggal}
            //                                 </td>
            //                                 <td class="px-6 py-4">
            //                                     ${item.hari}
            //                                 </td>
            //                                 <td class="px-6 py-4 text-right">
            //                                     <a href="http://127.0.0.1:8000/detailPermohonanEvent/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
            //                                 </td>
            //                             </tr>
            //                         `;
            //                         tbodyHarian.innerHTML += row;
            //                         console.log(item.nama_organisasi);
            //                         }
            //                 }
            //             });
            //         })
            //         .catch(error => console.error('Error fetching data:', error));
            // });


        </script>

</div>

@endsection