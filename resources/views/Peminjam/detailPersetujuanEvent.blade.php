@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

        <div class="border-b-4 border-gray-900/40 pb-6">
            <h2 class="text-2xl font-bold leading-7 text-gray-900">Detail Pemohonan Kegiatan Event</h2>
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
                <!-- <h2 class="text-2xl font-semibold leading-7 text-gray-900">Surat dan Tor yang diajukan</h2> -->

                <form>
                <div class="inline-flex rounded-md shadow-sm" role="group">
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
                </form>

            </div>
            
            <table>
                <tr class="bg-white dark:bg-white text-black">
                    <th scope="col" class="px-2 text-start py-3">
                        Status
                    </th>
                    <td id="status" class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                        : 
                    </td>
                </tr>
                <tr class="bg-white dark:bg-white text-black">
                    <th scope="col" class="px-2 text-start py-3">
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

            <div class="mt-6 flex content-between gap-x-6">
                
            <div class="flex flex-1 place-content-between">
                <button type="button" onclick="cetak()" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Cetak Form
                </button>
                <button id="btnMulaiPinjam" type="button" onclick="mulaiPinjam()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Mulai Peminjaman
                </button>
                <button id="btnSelesaiPinjam" type="button" onclick="selesaiPinjam()" class="hidden text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Selesai Peminjaman
                </button>
            </div>

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
                    document.getElementById('organisasi').textContent = `${data.data.nama_organisasi}`;
                    document.getElementById('noTelp').innerText = `0${data.data.no_telp}`;
                    document.getElementById('nama_pj').innerText = `${data.data.nama_pj}`;
                    document.getElementById('namaKegiatan').innerText = `${data.data.nama_kegiatan}`;
                    document.getElementById('tanggal').innerText = `${data.data.tanggal}`;
                    document.getElementById('hari').innerText = `${data.data.hari}`;
                    document.getElementById('jam').innerText = `${data.data.slot}`;
                    console.log(data)

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
                        else if(data.data.status === 1 || data.data.status === 4){
                            status.innerText = `: Menunggu Disetujui`;
                        }
                        else{
                            status.innerText = `: Diterima`;
                        }
                    
                        const btnMulaiPinjam = document.getElementById('btnMulaiPinjam');
                        const btnSelesaiPinjam = document.getElementById('btnSelesaiPinjam');
                        const statusBtn = data.data.status; 
                        const specialStatus = data.data.special_status; 

                        if (statusBtn === 4 || statusBtn === 1) {
                            btnMulaiPinjam.classList.add('hidden');
                        } else if (statusBtn === 2 && statusBtn === 4) {
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

        function inputForm(event){

            event.preventDefault()
                const form = document.querySelector('form')
                const formData = new FormData(form)

                const surat = document.getElementById('surat_peminjaman');
                const tor = document.getElementById('tor');

                let berkasSurat = '';
                berkasSurat = surat.value;

                let berkasTor = '';
                berkasTor = tor.value;

                // console.log(formData)
                formData.forEach(function(value,key){
                    console.log(key+' : '+value)
                })

                formData.append('surat_peminjaman', berkasSurat);
                formData.append('tor', berkasTor);

                // console.log('ini surat surat', berkasSurat, berkasTor)

                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, surat_peminjaman:berkasSurat, tor:berkasTor})
                })
                .then(response=>response.json())
                .then(data=>{
                    if(data.is_success){
                        console.log('berhasil')
                        showSuccessAlert();
                    }
                })
        }

        function showSuccessAlert() {
            const alertContainer = document.createElement('div');
            alertContainer.className = "p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400";
            alertContainer.setAttribute('role', 'alert');

            const alertContent = `
                <span class="font-medium">Berhasil Upload!</span>
            `;
            alertContainer.innerHTML = alertContent;

            // Insert the alert at the top of the form
            const form = document.querySelector('form');
            form.insertAdjacentElement('beforebegin', alertContainer);

            // Scroll to the top to make the alert visible
            window.scrollTo({ top: 0, behavior: 'smooth' });

            // Optionally, remove the alert after a few seconds
            setTimeout(() => {
                alertContainer.remove();
            }, 4000); // 5 seconds
        }

        // Assuming you have an event listener for form submission
        document.querySelector('form').addEventListener('submit', inputForm);

        // function inputFormEvent(event){
        //     event.preventDefault()
        //         const form = document.querySelector('form')
        //         const formData = new FormData(form)

        //         console.log(formData)
        //         formData.forEach(function(value,key){
        //             console.log(key+' : '+value)
        //         })

        //         fetch('http://127.0.0.1:8000/api/inputForm', {
        //             method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, surat_peminjaman:})
        //         })
        //         .then(response=>response.json())
        //         .then(data=>{
        //             if(data.is_success){
        //                 console.log('berhasil')
        //                 // window.location.href = '/persetujuan'
        //             }
        //         })
        // }
        
        const formPeminjam = document.querySelector('form')
        formPeminjam.addEventListener('submit',inputForm)

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

@endsection