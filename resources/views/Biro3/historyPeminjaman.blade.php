@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <h2 class="font-bold text-3xl text-gray-200 mb-5 bg-gray-800 rounded-lg p-1 flex justify-between items-center w-full">RIWAYAT PEMINJAMAN DAN REKAP</h2>
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-3">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telfon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>   
                        </tr>
                    </thead>
                    <tbody id="historyHarian">
                        
                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            <nav aria-label="Page navigation example" class="justify-end items-center">
                <ul class="flex items-center -space-x-px h-8 text-sm">
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                    <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </a>
                    </li>
                </ul>
            </nav>

            <h2 class="font-bold text-3xl mt-10">Rekap Peminjaman</h2>
            <div class="py-3 flex items-center">
                <!-- DATE PICKER AWAL -->
                <div class="relative max-w-sm">
                        <input id="tanggalAwal" name="tanggalAwal" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal Awal">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                </div>
                <span class="mx-4 text-gray-500">sampai</span>
                <!-- DATE PICKER AKHIR -->
                <div class="relative max-w-sm">
                        <input id="tanggalAkhir" name="tanggalAkhir" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal Akhir">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                </div>
                <div>
                    <button id="checkDatesButton" class="ml-5 bg-blue-500 text-white rounded-lg p-2 dark:hover:bg-blue-400">Cek</button>
                </div>
            </div>
            
            <!-- TABEL REKAP -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Banyaknya Permintaan Booking
                            </th>
                        </tr>
                    </thead>
                    <tbody id="rekap">
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>

<script>

        document.addEventListener('DOMContentLoaded', function(){
            const tanggalFlatpicker1 = flatpickr('input[name="tanggalAwal"]',{
                dateFormat: 'Y-m-d',
                enableTime: false,
            });
            const tanggalFlatpicker2 = flatpickr('input[name="tanggalAkhir"]',{
                dateFormat: 'Y-m-d',
                enableTime: false,
            });
            tanggalFlatpicker1.config.onChange.push(function(selectedDates, dateStr,instance){
                tanggalFlatpicker2.set('minDate',dateStr)
            })
        });

            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/form')
                    .then(response => response.json())
                    .then(data => {
                        const tbodyHarian = document.querySelector('#historyHarian');
                        data.data.forEach((item) => {
                            console.log(data)
                            if(item.status === 3 && item.special_status === 2 ){
                            const row = 
                            `
                                <tr class="bg-white border-b text-base dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
                                        ${item.nama_organisasi}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${item.nama_pj}
                                    </td>
                                    <td class="px-6 py-4">
                                        0${item.no_telp}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.nama_kegiatan}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.hari}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.tanggal}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.slot}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.status === 3 ? 'Selesai' : 'Dibatalkan'}
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

            // document.addEventListener('DOMContentLoaded', function() {

            //     let counter = 0;
            //     fetch('http://127.0.0.1:8000/api/form')
            //         .then(response => response.json())
            //         .then(data => {
            //             const tbodyHarian = document.querySelector('#historyPerorganisasi');
            //             data.data.forEach((item) => {
            //                 console.log(data)
            //                 if(item.status === 3 && item.special_status === 2 ){
            //                 counter++; 
            //                 const row = 
            //                 `
            //                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            //                         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            //                             ${item.nama_organisasi}
            //                         </th>
            //                         <td class="px-6 py-4">
            //                             ${counter}
            //                         </td>
            //                     </tr>
            //                 `;
            //                 tbodyHarian.innerHTML += row;
            //                 console.log(item.nama_organisasi);
            //                 }
            //             });
            //         })
            //         .catch(error => console.error('Error fetching data:', error));
            // });

            // document.addEventListener('DOMContentLoaded', function() {
            //     const tanggalAwalInput = document.getElementById('tanggalAwal');
            //     const tanggalAkhirInput = document.getElementById('tanggalAkhir');
            //     const checkDatesButton = document.getElementById('checkDatesButton');

            //     function formatDateString(dateString) {
            //         const parts = dateString.split('-');
            //         if (parts.length === 3) {
            //             const day = parts[0];
            //             const month = parts[1];
            //             const year = parts[2];
            //             return `${year}/${month}/${day}`;
            //         }
            //         return dateString;
            //     }

            //     function handleDateInput(event) {
            //         const inputField = event.target;
            //         const formattedDate = formatDateString(inputField.value);
            //         inputField.value = formattedDate;
            //         console.log(formattedDate);
            //     }

            //     checkDatesButton.addEventListener('click', function() {
            //         const tanggalAwalValue = tanggalAwalInput.value;
            //         const tanggalAkhirValue = tanggalAkhirInput.value;

            //         let counter = 0;
            //         fetch('http://127.0.0.1:8000/api/rekap', {
            //             method: 'post', headers:{'Content-Type':'application/json'}, body:JSON.stringify({tanggalAwal:tanggalAwalValue, tanggalAkhir:tanggalAkhirValue })
            //         })
            //             .then(response => response.json())
            //             .then(data => {
            //                 console.log('ini adalah rekap',data)
            //                 const tbodyHarian = document.querySelector('#rekap');
            //                 data.data.forEach((item) => {
                                
            //                     if(item.status === 3 && item.special_status === 2 ){
            //                     counter++; 
            //                     const row = 
            //                     `
            //                         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            //                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            //                                 ${item.nama_organisasi}
            //                             </th>
            //                             <td class="px-6 py-4">
            //                                 ${counter}
            //                             </td>
            //                         </tr>
            //                     `;
            //                     tbodyHarian.innerHTML += row;
            //                     console.log(item.nama_organisasi);
            //                     }
            //                 });
            //             })
            //             .catch(error => console.error('Error fetching data:', error));

            //         console.log('Tanggal Awal:', tanggalAwalValue);
            //         console.log('Tanggal Akhir:', tanggalAkhirValue);

            //     });
            // });

            document.addEventListener('DOMContentLoaded', function() {
                const tanggalAwalInput = document.getElementById('tanggalAwal');
                const tanggalAkhirInput = document.getElementById('tanggalAkhir');
                const checkDatesButton = document.getElementById('checkDatesButton');

                checkDatesButton.addEventListener('click', async function() {
                    const tanggalAwalValue = tanggalAwalInput.value;
                    const tanggalAkhirValue = tanggalAkhirInput.value;

                    
                    const partsAwal = tanggalAwalValue.split('-');
                    const dayAwal = partsAwal[2];
                    const monthAwal = partsAwal[1];
                    const yearAwal = partsAwal[0];
                    const tanggalAwalDisplay = dayAwal + `-` + monthAwal + `-` + yearAwal;
                    

                    const partsAkhir = tanggalAkhirValue.split('-');
                    const dayAkhir = partsAkhir[2];
                    const monthAkhir = partsAkhir[1];
                    const yearAkhir = partsAkhir[0];
                    const tanggalAkhirDisplay = dayAkhir + `-` + monthAkhir + `-` + yearAkhir;
                    

                    console.log('ini tanggal awal akhir', tanggalAwalDisplay, tanggalAkhirDisplay)
                

                    let counter = 0;
                    try {
                        const response = await fetch('http://127.0.0.1:8000/api/rekap', {
                            method: 'POST', 
                            headers: {'Content-Type': 'application/json'}, 
                            body: JSON.stringify({tanggalAwal: tanggalAwalValue, tanggalAkhir: tanggalAkhirValue})
                        });

                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }

                        const data = await response.json();
                        console.log('ini adalah rekap', data);

                        const tbodyHarian = document.querySelector('#rekap');
                        tbodyHarian.innerHTML = ''; // Clear previous rows

                        data.data.forEach((item) => {
                                counter++;
                                const row = 
                                `
                                    <tr class="bg-white border-b text-base dark:bg-gray-200 dark:border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300 dark:text-black">
                                        <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
                                            ${tanggalAwalDisplay} sampai ${tanggalAkhirDisplay}
                                        </th>
                                        <td class="px-6 py-4">
                                            ${counter}
                                        </td>
                                    </tr>
                                `;
                                tbodyHarian.innerHTML = row;
                                console.log(item.nama_organisasi);
                        });

                    } catch (error) {
                        console.error('Error fetching data:', error);
                    }

                    console.log('Tanggal Awal:', tanggalAwalValue);
                    console.log('Tanggal Akhir:', tanggalAkhirValue);
                });
        });

</script>

@endsection