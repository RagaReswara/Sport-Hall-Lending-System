@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <div class="flex items-center h-10 rounded bg-gray-50 dark:bg-gray-800 mb-5">

                <!-- INDIKATOR -->
                <span class="flex items-center text-base font-medium text-gray-900 dark:text-white me-3 ml-5"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Disetujui</span>
                <span class="flex items-center text-base font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-yellow-300 rounded-full me-1.5 flex-shrink-0"></span>Menunggu Disetujui</span>
                <span class="flex items-center text-base font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Ditolak</span>
            
            </div>
            
            <h2 class="font-bold text-3xl mt-5 mb-2">Permintaan Harian</h2>
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggungjawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
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
                                Persetujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <!-- ISI TABEL FORM -->
                    <tbody id="isiTabel">

                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            <!-- TABEL RUTIN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    
                <table id="tabelRutin" class="hidden w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <h2 id="bookingRutin" class="hidden font-bold text-3xl mt-10 mb-2">Permintaan Rutin</h2>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Pertama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari Pertama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Kedua
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari Kedua
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Persetujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>

                    <!-- ISI TABEL FORM RUTIN -->
                    <tbody id="isiTabelRutin">

                    </tbody>
                </table>
            </div>
            <!-- TABEL RUTIN -->


            <!-- TABEL EVENT -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table id="tabelEvent" class="hidden w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <h2 id="bookingEvent" class="hidden font-bold text-3xl mt-5 mb-2">Permintaan Event</h2>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggaal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slot
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Persetujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <!-- ISI TABEL FORM EVENT -->
                    <tbody id="isiTabelEvent">

                    </tbody>
                </table>
            </div>
            <!-- TABEL EVENT -->

            </div>
        </div>

        <script>

            window.id_user = "{{ Auth::user()-> id_user }}";
            document.addEventListener("DOMContentLoaded", function() {
                const id_user = window.id_user;
                console.log("ini adalah " + id_user)

            });

            // HARIAN
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/getIsiTabel', {
                                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id_user: id_user})
                    })
                    .then(response => response.json())
                    .then(data => {
                        const tbody = document.querySelector('tbody');
                        data.data.forEach((item) => {
                            console.log(data)
                            
                            if(item.hariRutin === null && item.surat_peminjaman === null){
                            const row = 
                            `
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ${item.nama_organisasi}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${item.nama_pj}
                                    </td>
                                    <td class="px-6 py-4">
                                        0${item.no_telp}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.kat_kegiatan}
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
                                    <td class="flex px-6 py-4 items-center justify-center">
                                        ${tandaPersetujuan(item.status)}
                                    </td>
                                    <td class="px-2 py-4">
                                        ${item.special_status == 0 ? 'Belum Dimulai' : item.special_status == 1 ? 'Sedang Dimulai' : 'Selesai'}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="http://127.0.0.1:8000/detailPersetujuan/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                    </td>
                                </tr>
                            `;
                            tbody.innerHTML += row;
                            console.log(item.nama_organisasi);
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });
        
            // RUTIN
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/getIsiTabel', {
                                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id_user: id_user})
                    })
                    .then(response => response.json())
                    .then(data => {
                        const tbodyRutin = document.querySelector('#isiTabelRutin');
                        data.data.forEach((item) => {
                            console.log(data)

                            if(item.length != 0 && item.hariRutin != null) {
                                document.getElementById('tabelRutin').classList.remove('hidden')
                                document.getElementById('bookingRutin').classList.remove('hidden')
                                const row = 
                                `
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            ${item.nama_organisasi}
                                        </th>
                                        <td class="px-6 py-4">
                                            ${item.nama_pj}
                                        </td>
                                        <td class="px-6 py-4">
                                            0${item.no_telp}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.kat_kegiatan}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.tanggal}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.hari}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.tanggalRutin}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.hariRutin}
                                        </td>
                                        <td class="flex px-6 py-4 items-center justify-center">
                                            ${tandaPersetujuan(item.status)}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.special_status == 0 ? 'Belum Dimulai' : item.special_status == 1 ? 'Sedang Dimulai' : 'Selesai'}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="http://127.0.0.1:8000/detailPersetujuan/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                        </td>
                                    </tr>
                                `;
                                tbodyRutin.innerHTML += row;
                                console.log(item.nama_organisasi);
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });

            // EVENT
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/getIsiTabel', {
                                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id_user: id_user})
                    })
                    .then(response => response.json())
                    .then(data => {
                        const tbodyRutin = document.querySelector('#isiTabelEvent');
                        data.data.forEach((item) => {
                            console.log(data)

                            if(item.surat_peminjaman != null && item.tor != null) {
                                document.getElementById('tabelEvent').classList.remove('hidden')
                                document.getElementById('bookingEvent').classList.remove('hidden')
                                const row = 
                                `
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            ${item.nama_organisasi}
                                        </th>
                                        <td class="px-6 py-4">
                                            ${item.nama_pj}
                                        </td>
                                        <td class="px-6 py-4">
                                            0${item.no_telp}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.kat_kegiatan}
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
                                        <td class="px-6 py-4">
                                            ${tandaPersetujuan(item.status)}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.special_status == 0 ? 'Belum Dimulai' : item.special_status == 1 ? 'Sedang Dimulai' : 'Selesai'}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="http://127.0.0.1:8000/detailPersetujuanEvent/${item.id_form}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                        </td>
                                    </tr>
                                `;
                                tbodyRutin.innerHTML += row;
                                console.log(item.nama_organisasi);
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });

            function tandaPersetujuan(status){
                if (status == 0) {
                return `<span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-1">
                            <span class="flex w-16 h-8 bg-red-500 rounded-full flex-shrink-0"></span></span>`;
                } else if (status == 1) {
                    return `<span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-1">
                                <span class="flex w-16 h-8 bg-yellow-300 rounded-full flex-shrink-0"></span></span>`;
                }else if (status == 4) {
                    return `<span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-1">
                                <span class="flex w-16 h-8 bg-yellow-300 rounded-full flex-shrink-0"></span></span>`;
                }else{
                    return `<span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-1">
                                <span class="flex w-16 h-8 bg-green-600 rounded-full flex-shrink-0"></span></span>`;
                } 
            }

        </script>

</div>

@endsection