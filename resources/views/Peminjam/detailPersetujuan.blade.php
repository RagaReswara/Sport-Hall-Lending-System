@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
    <div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
            
            <div class="border-b-4 border-gray-900/40 pb-6 mt-2 mb-10">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Permohonan</h2>
                <p class="mt-1 text-base leading-6 text-gray-600">Berhasil melakukan Booking silahkan tunggu untuk disetujui</p>
            </div>

                <!-- TABEL UNTUK PEMINJAMAN HARIAN -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10 mt">
                    <thead class="text-base text-gray-900 dark:text-gray-300">
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Organisasi
                            </th>
                            <td id="organisasi" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Nama Penanggung Jawab
                            </th>
                            <td id="nama_pj" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                namaKegiatan
                            </th>
                            <td id="namaKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <td id="noTelp" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                            <th scope="col" class="px-6 py-3 dark:bg-white">
                                
                            </th>
                            <!-- <td class="dark:bg-white px-6 py-4 text-gray-700 flex justify-end">
                                <button type="button" onclick="cetak()" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                                    Cetak Form
                                </button>
                                <div id="progressContainer" class="w-full bg-gray-200 rounded-full dark:bg-gray-700" style="display: none;">
                                    <div id="progressBar" class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 0%; height: 100%">0%</div>
                                    <div id="progressText" class="ml-3 text-sm font-medium text-gray-700 dark:text-gray-300" style="display: none; margin-top: 2px;">Mengunduh Form.....</div>
                                </div>
                            </td> -->
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <td id="tanggal" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <td id="hari" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Jam
                            </th>
                            <td id="jam" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Kategori Kegiatan
                            </th>
                            <td id="kategoriKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                lapangan
                            </th>
                            <td id="lapangan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white">
                        <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <td class="flex-1 dark:bg-white px-6 py-4 text-gray-700 flex justify-end">
                                <button type="button" onclick="cetak()" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                                    Cetak Form
                                </button>
                                <div id="progressContainer" class="w-full bg-gray-200 rounded-full dark:bg-gray-700" style="display: none;">
                                    <div id="progressBar" class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 0%; height: 100%">0%</div>
                                    <div id="progressText" class="ml-3 text-sm font-medium text-gray-700 dark:text-gray-300" style="display: none; margin-top: 2px;">Mengunduh Form.....</div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                </table>

                <div class="inline-flex rounded-md shadow-sm mb-10" role="group">
                    <!-- DOWNLOAD FILE SURAT PEMINJAMAN -->
                    <div class="mt-5 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-4">
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-900" for="surat_peminjaman">Surat Peminjaman</label>
                            <input class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="surat_peminjaman" name="surat_peminjaman" type="file">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-900" for="tor">ToR</label>
                            <input class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="tor" name="tor" type="file">
                        </div>
                        <button id="kirimSurat" onclick="inputForm(event)" type="submit" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-2 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kirim
                        </button>
                        
                    </div>
                </div>

                <table>
                        <tr class="bg-white dark:bg-white text-black">
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <td id="status" class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-white text-black">
                            <th scope="col" class="px-6 py-3">
                                Catatan
                            </th>
                            <td id="catatan" class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-white text-black">
                            <td class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                            </td>
                        </tr>
                </table>

                

                <div class="flex flex-1 justify-end">
                    <button id="btnMulaiPinjam" type="button" onclick="mulaiPinjam()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                        Mulai Peminjaman
                    </button>
                    <button id="btnSelesaiPinjam" type="button" onclick="selesaiPinjam()" class="hidden text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                        Selesai Peminjaman
                    </button>
                </div>         

            </div>
        </div>

        <script>

            const idForm = window.location.pathname.split('/').pop() 
            function getByid(){
                        fetch('http://127.0.0.1:8000/api/getByid', {
                            method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm})
                        })
                        .then(response=>response.json())
                        .then(data=>{
                            if(data.is_success){
                                document.getElementById('organisasi').textContent = `: ${data.data.nama_organisasi}`;
                                document.getElementById('noTelp').innerText = `: 0${data.data.no_telp}`;
                                document.getElementById('kategoriKegiatan').innerText = `: ${data.data.kat_kegiatan}`;
                                document.getElementById('nama_pj').innerText = `: ${data.data.nama_pj}`;
                                document.getElementById('lapangan').innerText = `: ${data.data.lapangan}`;
                                document.getElementById('namaKegiatan').innerText = `: ${data.data.nama_kegiatan}`;
                                document.getElementById('tanggal').innerText = `: ${data.data.tanggal}`;
                                document.getElementById('hari').innerText = `: ${data.data.hari}`;
                                document.getElementById('jam').innerText = `: ${data.data.slot}`;
                                console.log(data)
                                const cekTanggalRutin = document.getElementById('tanggal');
                                    if (data.data.tanggalRutin !== null) {
                                        cekTanggalRutin.innerText = `: ${data.data.tanggal} dan ${data.data.tanggalRutin}`;
                                    } else {
                                        cekTanggalRutin.innerText = `: ${data.data.tanggal}`;
                                    }
                                
                                const cekHariRutin = document.getElementById('hari');
                                    if (data.data.hariRutin !== null) {
                                        cekHariRutin.innerText = `: ${data.data.hari} dan ${data.data.hariRutin}`;
                                    } else {
                                        cekHariRutin.innerText = `: ${data.data.hari}`;
                                    }

                                const cekSlotRutin = document.getElementById('jam');
                                    if (data.data.slotRutin !== null) {
                                        cekSlotRutin.innerText = `: ${data.data.slot} dan ${data.data.slotRutin}`;
                                    } else {
                                        cekSlotRutin.innerText = `: ${data.data.slot}`;
                                    }
                                
                                const catatan = document.getElementById('catatan');
                                    if(data.data.catatan === null){
                                        catatan.innerText = `: Belum Ada`;
                                    }
                                    else{
                                        
                                        catatan.innerText = `: ${data.data.catatan}`;
                                    }
                                const status = document.getElementById('status');
                                    if(data.data.status === 0){
                                        status.innerText = `: Ditolak`;
                                    }
                                    else if(data.data.status === 1){
                                        status.innerText = `: Menunggu Disetujui`;
                                    }
                                    else{
                                        status.innerText = `: Diterima`;
                                    }
                                
                                    const btnMulaiPinjam = document.getElementById('btnMulaiPinjam');
                                    const btnSelesaiPinjam = document.getElementById('btnSelesaiPinjam');
                                    const statusBtn = data.data.status; 
                                    const specialStatus = data.data.special_status; 

                                    if (statusBtn === 0 || statusBtn === 1) {
                                        btnMulaiPinjam.classList.add('hidden');
                                    } else if (statusBtn === 2) {
                                        btnMulaiPinjam.classList.remove('hidden');
                                    }
                                    if (specialStatus === 1) {
                                        btnSelesaiPinjam.classList.remove('hidden');
                                        btnMulaiPinjam.classList.add('hidden');
                                    } else if (specialStatus === 2) {
                                        btnMulaiPinjam.classList.add('hidden');
                                    }
                            }
                        })
            }
            getByid()
            console.log(idForm)

            function mulaiPinjam(){
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, special_status:1})
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = "/persetujuan";
                })
                console.log('clicked')
            }

            function selesaiPinjam(){
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, special_status:2})
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = "/persetujuan";
                })
                console.log('clicked')
            }

            function cetak() {
                fetch('http://127.0.0.1:8000/api/cetak', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_form: idForm })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob(); 
                })
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'Nota_dan_Formulir_Peminjaman.pdf';
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                })
                .catch(error => {
                    console.error('There was an error with the fetch operation:', error);
                });

                console.log('clicked');
            }


        </script>

</div>

@endsection