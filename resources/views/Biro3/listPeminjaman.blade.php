@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <h2 class="font-bold text-3xl text-gray-200 mb-5 bg-gray-800 rounded-lg p-1 flex justify-between items-center w-full">List Peminjaman Yang Sedang Berlangsung</h2>
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Instansi/Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggungjawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telfon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lapangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slot
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Koreksi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody id="listPeminjaman">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            </div>
        </div>
</div>

<script>
            
    document.addEventListener('DOMContentLoaded', function() {
        fetch('http://127.0.0.1:8000/api/form')
            .then(response => response.json())
            .then(data => {
                const tbodyHarian = document.querySelector('#listPeminjaman');
                data.data.forEach((item) => {
                    console.log(data)
                    if(item.status === 2 || item.status === 4){
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
                                ${item.kat_kegiatan}
                            </td>
                            <td class="px-6 py-4">
                                ${item.tanggal}
                            </td>
                            <td class="px-6 py-4">
                                ${item.hari}
                            </td>
                            <td class="px-6 py-4">
                                ${item.lapangan}
                            </td>
                            <td class="px-6 py-4">
                                ${item.slot}
                            </td>
                            <td class="px-6 py-4">
                                ${item.special_status == 0 ? 'Mendatang' : item.special_status == 1 ? 'Sedang Dimulai' : 'Selesai'}
                            </td>
                            <td class="px-6 py-4">
                                ${item.special_status === 2 ? `<button type="button" onclick="selesaiPinjam(${item.id_form})" class="text-white bg-gradient-to-r from-green-400 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">Selesai</button>` : ''}
                            </td>
                            <td class="px-6 py-4">
                            <button onclick="kirimGmail(${item.id_form})">
                                <svg class="w-[27px] h-[27px] text-red-500 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                                </svg>
                            </button>
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

    function selesaiPinjam(id){
        fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
            method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:id, status:3})
        })
        .then(response => response.json())
        .then(data => {
            window.location.href = "/historyPeminjaman";
        })
        console.log(id);
    }

    // function kirimGmail(idForm){
    //     fetch('http://127.0.0.1:8000/api/kirimEmail', {
    //         method: 'POST',
    //         headers: { 'Content-Type': 'application/json' },
    //         body: JSON.stringify({ id_form: idForm})
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         fetch('http://127.0.0.1:8000/api/hapusForm', {
    //             method: 'POST',
    //             headers: { 'Content-Type': 'application/json' },
    //             body: JSON.stringify({ id_form: idForm})
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             console.log('clicked')
    //         })
    //     })
    // }

    // async function kirimGmail(idForm){
    //     const url1 = 'http://127.0.0.1:8000/api/kirimEmail';
    //     const url2 = 'http://127.0.0.1:8000/api/hapusForm';
    //     const option = {
    //                     method: 'POST',
    //                     headers: { 'Content-Type': 'application/json' },
    //                     body: JSON.stringify({id_form: idForm})
    //                 };
    //     const responseData = await fetch(url1,option);
    //     const responseData2 = await fetch(url2, option);

    //     console.log(responseData,responseData2)
    //     console.log('clicked')
    // }

    async function kirimGmail(idForm) {
        const url1 = 'http://127.0.0.1:8000/api/kirimEmail';
        const url2 = 'http://127.0.0.1:8000/api/hapusForm';
        const options = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id_form: idForm })
        };

        try {
            const response1 = await fetch(url1, options);
            const response2 = await fetch(url2, options);

            const data1 = await response1.json();
            const data2 = await response2.json();

            console.log(data1, data2);

            if (data1.is_success === true && data2.is_success === true) {
                window.location.reload();  // Reload the page
            } else {
                console.error('One or both requests failed.');
            }
        } catch (error) {
            console.error('Error:', error);
        }
        console.log('clicked');
    }

</script>

@endsection