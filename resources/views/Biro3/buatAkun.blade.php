@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
                
            <h2 class=" font-bold text-4xl text-gray-200 mb-5 bg-gray-800 rounded-lg p-1 flex justify-between items-center w-full">DAFTAR AKUN</h2>
            
            <!-- TABEL AKUN FAKULTAS -->
            <div class="flex flex-1">
                <h2 class="mt-5 font-bold text-3xl mb-3 bg-gray-400 rounded-lg p-1 flex justify-end items-center w-full">
                    <!-- <span>Fakultas</span> -->
                    <button type="button" id="tambahButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Tambah Akun
                        <svg class="h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </button>
                </h2>
            </div>
            
            <!-- ISI TABEL AKUN FAKULTAS -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fakultas
                            </th>
                        </tr>
                    </thead>
                    <tbody id="isiTabelFakultas"></tbody>

                </table>
            </div>
            <!-- TABEL FAKULTAS -->

            <!-- TABEL PRODI -->
            <!-- <h2 class="mt-5 font-bold text-3xl mb-3 bg-gray-300 rounded-lg">Program Studi</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Program Studi
                            </th>
                        </tr>
                    </thead>
                    
                    <!-- ISI TABEL PRODI -->
                    <tbody id="isiTabelProdi"></tbody>

                </table>
            </div> -->

            <!-- <h2 class="mt-5 font-bold text-3xl mb-3 bg-gray-300 rounded-lg">Lainnya</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Instansi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kepemilikan
                            </th>
                        </tr>
                    </thead>
                    
                    <!-- ISI TABEL PRODI -->
                    <tbody id="isiTabelLainnya"></tbody>

                </table>
            </div> -->

            </div>
        </div>

</div>

<script>

    const tambahButton = document.getElementById("tambahButton");
    tambahButton.addEventListener("click", function() {
        window.location.href = "http://127.0.0.1:8000/formAkun"; 
    });

    document.addEventListener('DOMContentLoaded', function() {
        fetch('http://127.0.0.1:8000/api/user')
            .then(response => response.json())
            .then(data => {
            const tbody = document.querySelector('#isiTabelFakultas');
            data.data.forEach((item) => {
            console.log(data)
                // if(item.role === 'Fakultas'){
                    const row = 
                    `
                        <tr class="bg-white border-b text-lg dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
                            <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
                                ${item.email}
                            </th>
                            <td class="px-6 py-4">
                                ${item.plain_pw}
                            </td>
                            <td class="px-6 py-4">
                                ${item.namaOrganisasi}
                            </td>
                            <td class="px-6 py-4">
                                0${item.no_telp}
                            </td>
                            <td class="px-6 py-2">
                                ${item.fakultas}
                            </td>
                        </tr>
                    `;
                    tbody.innerHTML += row;
                // }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     fetch('http://127.0.0.1:8000/api/user')
    //         .then(response => response.json())
    //         .then(data => {
    //         const tbody = document.querySelector('#isiTabelProdi');
    //         data.data.forEach((item) => {
    //         console.log(data)
    //             if(item.role === 'Prodi'){
    //                 const row = 
    //                 `
    //                     <tr class="bg-white border-b text-lg dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
    //                         <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
    //                             ${item.email}
    //                         </th>
    //                         <td class="px-6 py-4">
    //                             ${item.plain_pw}
    //                         </td>
    //                         <td class="px-6 py-4">
    //                             ${item.namaOrganisasi}
    //                         </td>
    //                         <td class="px-6 py-4">
    //                             0${item.no_telp}
    //                         </td>
    //                         <td class="px-6 py-2">
    //                             ${item.prodi}
    //                         </td>
    //                     </tr>
    //                 `;
    //                 tbody.innerHTML += row;
    //             }
    //         });
    //     })
    //     .catch(error => console.error('Error fetching data:', error));
    // });

    // document.addEventListener('DOMContentLoaded', function() {
    //     fetch('http://127.0.0.1:8000/api/user')
    //         .then(response => response.json())
    //         .then(data => {
    //         const tbody = document.querySelector('#isiTabelLainnya');
    //         data.data.forEach((item) => {
    //         console.log(data)
    //             if(item.role === 'Karyawan','Biro','Admin','Universitas','BNI' && item.fakultas === null && item.prodi === null){
    //                 const row = 
    //                 `
    //                     <tr class="bg-white border-b text-sm dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
    //                         <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
    //                             ${item.email}
    //                         </th>
    //                         <td class="px-6 py-4">
    //                             ${item.plain_pw}
    //                         </td>
    //                         <td class="px-6 py-4">
    //                             ${item.namaOrganisasi}
    //                         </td>
    //                         <td class="px-6 py-4">
    //                             0${item.no_telp}
    //                         </td>
    //                         <td class="px-6 py-2">
    //                             ${item.role}
    //                         </td>
    //                     </tr>
    //                 `;
    //                 tbody.innerHTML += row;
    //             }
    //         });
    //     })
    //     .catch(error => console.error('Error fetching data:', error));
    // });
    

</script>

@endsection