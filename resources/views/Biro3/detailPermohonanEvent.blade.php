@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
    <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

            <div class="border-b-4 border-gray-900/40 pb-6">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Pemohonan Kegiatan Event</h2>
            </div>

            <!-- TABEL -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10">
                    <thead class="text-base text-gray-900 uppercase font-semibold dark:text-white">
                        <tr class="bg-gray-600">
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Penanggungjawab
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
                                Jam / Slot
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:bg-gray-200 text-gray-800">
                            <td id="organisasi" class="px-6 py-4">
                                
                            </td>
                            <td id="nama_pj" class="px-6 py-4">
                                
                            </td>
                            <td id="noTelp" class="px-6 py-4">
                                
                            </td>
                            <td id="namaKegiatan" class="px-6 py-4">
                                
                            </td>
                            <td id="hari" class="px-6 py-4">
                                
                            </td>
                            <td id="tanggal" class="px-6 py-4">
                                
                            </td>
                            <td id="jam" class="px-6 py-4">
                                
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="border-b-4 border-gray-900/40 pb-6 mt-3"></div>

                <div class="border-b-4 border-gray-900/40 pb-6 mt-2">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Surat dan Tor yang diajukan</h2>

                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <!-- DOWNLOAD FILE SURAT PEMINJAMAN -->
                        <div class="flex items-start max-w-[200px] bg-gray-50 dark:bg-gray-600 rounded-xl p-2 mt-5 mr-5">
                                    <div class="me-2">
                                        <span class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                            <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 21">
                                                <g clip-path="url(#clip0_3173_1381)">
                                                    <path fill="#E2E5E7" d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z"/>
                                                    <path fill="#B0B7BD" d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z"/>
                                                    <path fill="#CAD1D8" d="M18.774 9.25l-3.75-3.75h3.75v3.75z"/>
                                                    <path fill="#F15642" d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z"/>
                                                    <path fill="#fff" d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z"/>
                                                    <path fill="#CAD1D8" d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3173_1381">
                                                    <path fill="#fff" d="M0 0h20v20H0z" transform="translate(0 .5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Surat Peminjaman
                                        </span>
                                        <span class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                            2 Pages 
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                                <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                            </svg>
                                            500 kb 
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                                <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                            </svg>
                                            PDF
                                        </span>
                                        </div>
                                        <div class="inline-flex self-center items-center">
                                        <button id="buttonDownload" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-600" type="button">
                                            <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                                <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                            </svg>
                                        </button>
                                    </div>
                        </div>
                        <!-- DOWNLOAD FILE SURAT PEMINJAMAN -->

                        <!-- DOWNLOAD FILE TOR -->
                        <div class="flex items-start max-w-[200px] bg-gray-50 dark:bg-gray-600 rounded-xl p-2 mt-5">
                                    <div class="me-2">
                                        <span class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                            <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 21">
                                                <g clip-path="url(#clip0_3173_1381)">
                                                    <path fill="#E2E5E7" d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z"/>
                                                    <path fill="#B0B7BD" d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z"/>
                                                    <path fill="#CAD1D8" d="M18.774 9.25l-3.75-3.75h3.75v3.75z"/>
                                                    <path fill="#F15642" d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z"/>
                                                    <path fill="#fff" d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z"/>
                                                    <path fill="#CAD1D8" d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3173_1381">
                                                    <path fill="#fff" d="M0 0h20v20H0z" transform="translate(0 .5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            TOR
                                        </span>
                                        <span class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                            2 Pages 
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                                <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                            </svg>
                                            500 kb 
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                                <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                            </svg>
                                            PDF
                                        </span>
                                        </div>
                                        <div class="inline-flex self-center items-center">
                                        <button id="buttonDownload" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-600" type="button">
                                            <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                                <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                            </svg>
                                        </button>
                                    </div>
                        </div>
                        <!-- DOWNLOAD FILE TOR -->
                    </div>

                </div>

                <div  class="flex flex-1 mt-5 mb-3">
                    <textarea id="catatan" name="catatan" rows="4" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan Catatan Untuk Peminjam"></textarea>
                    <button id="kirimPesanBtn" type="button" onclick="kirimGmail()" class="ml-2 max-h-[45px] mt-[62px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Kirim Pesan
                    </button>        
                </div> 

                <div class="mt-6 flex items-center justify-end gap-x-6">
                        <!-- <div class="inline-flex mt-2 xs:mt-0">
                            <button id="kembaliButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                                Kembali
                            </button>
                        </div> -->
                    
                <div class="inline-flex rounded-md shadow-sm" role="">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">
                        Tolak
                    </button>
                    <!-- <button type="button" onclick="tolak()" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">
                        Tolak
                    </button> -->
                    <button type="button" onclick="setujui()" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-green-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-gray-600 dark:focus:text-white">
                        Setujui
                    </button>
                </div>

            </div>


            </div>
        </div>
    </div>

    <script>
        // const kembaliButton = document.getElementById("kembaliButton");
        
        // kembaliButton.addEventListener("click", function() {
        //     window.location.href = "http://127.0.0.1:8000/listPermohonan"; 
        // }); 


        const idForm = window.location.pathname.split('/').pop() 
        function getByid(){
            fetch('http://127.0.0.1:8000/api/getByid', {
                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm})
            })
            .then(response=>response.json())
            .then(data=>{
                if(data.is_success){
                    document.getElementById('organisasi').textContent = `${data.data.nama_organisasi}`;
                    document.getElementById('noTelp').innerText = `0${data.data.no_telp}`;
                    document.getElementById('nama_pj').innerText = `${data.data.nama_pj}`;
                    document.getElementById('namaKegiatan').innerText = `${data.data.nama_kegiatan}`;
                    document.getElementById('tanggal').innerText = `${data.data.tanggal}`;
                    document.getElementById('hari').innerText = `${data.data.hari}`;
                    document.getElementById('jam').innerText = `${data.data.slot}`;
                    console.log(data)
                    
                }
            })
        }
        getByid()
        console.log(idForm)

        function kirimGmail() {
                let simpanCatatan = document.getElementById('catatan').value;
                let progressBar = document.getElementById('progressBar');
                let progressContainer = document.getElementById('progressContainer');
                let progressText = document.getElementById('progressText');
                let kirimPesanBtn = document.getElementById('kirimPesanBtn');

                progressContainer.style.display = 'block';
                progressText.style.display = 'block';
                progressBar.style.width = '0%';
                progressBar.textContent = '0%';

                kirimPesanBtn.disabled = true;
                kirimPesanBtn.innerHTML = `
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                    </svg>
                    Loading...
                `;

                let progress = 0;
                let interval = setInterval(() => {
                    if (progress < 90) {
                        progress += 10;
                        progressBar.style.width = progress + '%';
                        progressBar.textContent = progress + '%';
                    }
                }, 500);

                fetch('http://127.0.0.1:8000/api/kirimEmail', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_form: idForm, catatan: simpanCatatan })
                })
                .then(response => response.json())
                .then(data => {
                    fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ id: idForm, catatan: simpanCatatan })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Complete progress bar
                        clearInterval(interval);
                        progressBar.style.width = '100%';
                        progressBar.textContent = '100%';

                        // Show success alert
                        document.getElementById('alertContainer').innerHTML = `
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <span class="font-medium">Success alert!</span> Berhasil Kirim Catatan ke peminjam.
                            </div>
                        `;
                        setTimeout(() => {
                            document.getElementById('alertContainer').innerHTML = '';
                            progressContainer.style.display = 'none';
                            progressText.style.display = 'none';
                            progressBar.style.width = '0%';
                            progressBar.textContent = '0%';
                        }, 3000);

                        // Re-enable the button
                        kirimPesanBtn.disabled = false;
                        kirimPesanBtn.innerHTML = 'Kirim Pesan';
                    });
                })
                .catch(error => {
                    clearInterval(interval);
                    alert("Error: " + error);
                    progressContainer.style.display = 'none';
                    progressText.style.display = 'none';
                    progressBar.style.width = '0%';
                    progressBar.textContent = '0%';

                    // Re-enable the button
                    kirimPesanBtn.disabled = false;
                    kirimPesanBtn.innerHTML = 'Kirim Pesan';
                });

                console.log(idForm);
                console.log(document.getElementById('catatan').value);
            }

        function setujui(){
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, status:2})
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = "/listPermohonan";
                })
                console.log('clicked')
        }

        function tolak(){
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, status:0})
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = "/listPermohonan";
                })
                console.log('clicked')
        }
        

    </script>

@endsection