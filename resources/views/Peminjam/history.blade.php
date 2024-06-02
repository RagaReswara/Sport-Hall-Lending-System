@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <h2 class="font-bold text-3xl">Riwayat Peminjaman</h2>
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telfon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kegiatan
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
                        </tr>
                    </thead>
                    <tbody id="history">
                        
                    </tbody>
                </table>    
            </div>
            <!-- TABEL HARIAN -->

            </div>
        </div>
</div>

<script>

    window.id_user = "{{ Auth::user()-> id_user }}";
        document.addEventListener("DOMContentLoaded", function() {
            const id_user = window.id_user;
            console.log("ini adalah " + id_user)

    });

    document.addEventListener('DOMContentLoaded', function() {
        fetch('http://127.0.0.1:8000/api/form')
            .then(response => response.json())
            .then(data => {
                const tbodyHarian = document.querySelector('#history');
                data.data.forEach((item) => {
                    console.log(data)
                    if(item.status === 3 && item.special_status === 2 ){
                    const row = 
                    `
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ${item.nama_organisasi}
                            </th>
                            <td class="px-6 py-4">
                                ${item.no_telp}
                            </td>
                            <td class="px-6 py-4">
                                ${item.nama_pj}
                            </td>
                            <td class="px-6 py-4">
                                ${item.nama_kegiatan}
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
                        </tr>
                    `;
                    tbodyHarian.innerHTML += row;
                    console.log(item.nama_organisasi);
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
        });

</script>

@endsection