@extends('Peminjam/masterPeminjam')
@section('content')

<div class="p-4 sm:ml-64">

    <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

    <!-- component -->    
        <div class="flex flex-1 ">
            <h2 class="font-bold text-3xl">Profil Akun {{ Auth::user() -> namaOrganisasi }}</h2>
        </div>

        <div class="border-b-8 border-gray-950/40 pb-2"></div>

        <form>
            <!-- <label for="website-admin" class="block mb-2 mt-3 text-xl font-medium text-gray-900 dark:text-black">Email</label>
            <div class="flex max-w-96">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                </svg>
                </span>
                <input type="text" id="email" name="email" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
            </div> -->
            <!-- <div class="flex mt-1">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
                </span>
                <input type="text" id="password" name="password" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-md p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
            </div> -->
            <!-- <div class="border-b-8 border-gray-950/40 pb-2"></div> -->

            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="text" name="email" id="email" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">Nama Penanggung Jawab</label>
                    <div class="mt-2">
                        <input type="text" name="nama_pj" id="nama_pj" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                    </div>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-xl font-medium leading-6 text-gray-900">Nomor Telfon</label>
                    <div class="mt-2">
                        <input type="text" name="no_telp" id="no_telp" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-md sm:leading-6" placeholder="Nomor Telfon">
                        <p id="error-message" class="text-red-500 mt-2 hidden">Nomor telepon tidak boleh lebih dari 13 karakter</p>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">NIM</label>
                    <div class="mt-2">
                        <input type="text" name="nim" id="nim" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Kosongkan jika diperuntukan untuk instansi" readonly>
                    </div>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-xl font-medium leading-6 text-gray-900">Nama Singkat Organisasi</label>
                    <div class="mt-2">
                        <input type="text" name="singkatan_organisasi" id="singkatan_organisasi" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-md sm:leading-6" placeholder="Nama Singkat Organisasi">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">Fakultas</label>
                    <div class="mt-2">
                        <input type="text" name="fakultas" id="fakultas" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Kosongkan jika diperuntukan untuk instansi" readonly>
                    </div>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"> 
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-xl font-medium leading-6 text-gray-900">Nama Organisasi</label>
                    <div class="mt-2">
                        <input type="text" name="namaOrganisasi" id="namaOrganisasi" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-md sm:leading-6" placeholder="Isi nama instansi jika bukan organisasi" readonly>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">Program Studi</label>
                    <div class="mt-2">
                        <input type="text" name="prodi" id="prodi" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Kosongkan jika untuk organisasi fakultas & instansi" readonly>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="kembaliButton" type="button" class="flex items-center justify-center px-4 h-9 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Batal
                        </button>
                        <button id="ajukanButton" onclick="updateAkun(event)" data-modal-target="alertRekapPeminjaman" data-modal-toggle="popup-modal" type="submit" class="flex items-center justify-center px-4 h-9 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-600 dark:hover:text-white">
                            Ubah Akun
                        </button>
                    </div>
            </div>
        </form>
            
    </div>
</div>

<script>
        window.id_user = "{{ Auth::user()-> id_user }}";
        window.nama_pj = "{{ Auth::user()-> nama_pj }}";
        window.userEmail = "{{ Auth::user()-> email }}";
        window.userNamaOrganisasi = "{{ Auth::user()-> namaOrganisasi }}";
        window.userNo_telp = "{{ Auth::user()-> no_telp }}";
        window.userFakultas = "{{ Auth::user()-> fakultas }}";
        window.userProdi = "{{ Auth::user()-> prodi }}";
        window.role = "{{ Auth::user()-> role }}";

        const inputField = document.getElementById('nama_pj');
        const inputEmailField = document.getElementById('email');
        const inputNoTelp = document.getElementById('no_telp');
        const inputFakultas = document.getElementById('fakultas');
        const inputProdi = document.getElementById('prodi');
        const inputNamaOrganisasi = document.getElementById('namaOrganisasi');
        document.addEventListener("DOMContentLoaded", function() {

            if (inputField && nama_pj) {
                inputField.value = nama_pj;
            }
            inputEmailField.value = userEmail;
            inputNoTelp.value = '0'+userNo_telp;
            inputFakultas.value = userFakultas;
            inputProdi.value = userProdi;
            inputNamaOrganisasi.value = userNamaOrganisasi;

            function cekRoleFields() {
                const inputFakultas = document.getElementById('fakultas').parentNode.parentNode;
                const inputProdi = document.getElementById('prodi').parentNode.parentNode; 

                if (role === 'Universitas') {
                    inputFakultas.classList.add('hidden');
                    inputProdi.classList.add('hidden');
                } else {
                    inputFakultas.classList.remove('hidden');
                    inputProdi.classList.remove('hidden');
                }
            }
            cekRoleFields();
        });

        // inputEmailFieldUpdate = inputEmailField.value;
        // inputNoTelpUpdate = inputNoTelp.value;
        // inputNamaPjUpdate = inputField.value;

        const idUser = window.location.pathname.split('/').pop() 
        function updateAkun(event){
            event.preventDefault()
            const form = document.querySelector('form')
            const formData = new FormData(form)

            console.log(formData)
            formData.forEach(function(value,key){
            console.log(key+' : '+value)
            })

            formData.append("id_user", id_user);

            fetch('http://127.0.0.1:8000/api/updateUser', {
                method:'POST', body:formData
            })
            .then(response=>response.json())
            .then(data=>{
                if(data.is_success){
                    console.log('berhasil')
                    window.location.href = '/persetujuan'
                }
            })
        }

        document.addEventListener('DOMContentLoaded', function () {
            const noTelpInput = document.getElementById('no_telp');
            const errorMessage = document.getElementById('error-message');

            noTelpInput.addEventListener('input', function () {
                if (noTelpInput.value.length > 13) {
                    errorMessage.classList.remove('hidden');
                    noTelpInput.classList.add('ring-red-500', 'focus:ring-red-500');
                } else {
                    errorMessage.classList.add('hidden');
                    noTelpInput.classList.remove('ring-red-500', 'focus:ring-red-500');
                }
            });

            noTelpInput.addEventListener('blur', function () {
                if (noTelpInput.value.length > 13) {
                    noTelpInput.value = noTelpInput.value.slice(0, 13); // Trim the value to 13 characters
                    errorMessage.classList.remove('hidden');
                    noTelpInput.classList.add('ring-red-500', 'focus:ring-red-500');
                } else {
                    errorMessage.classList.add('hidden');
                    noTelpInput.classList.remove('ring-red-500', 'focus:ring-red-500');
                }
            });
        });

</script>

@endsection