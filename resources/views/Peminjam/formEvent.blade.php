@extends('Peminjam/masterPeminjam')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

            <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-2">
                        <h2 class="text-2xl font-semibold leading-7 text-gray-900">Formulir Peminjaman Gor Khusus Kegiatan Event</h2>
                        <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p>

                        <div class="border-b-8 border-gray-950/40 pb-2"></div>

                        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->
                                <!-- <select name="nama_organisasi" id="nama_organisasi" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                                    <option selected>Silahkan Pilih Organisasi</option>
                                    <option value="Himpunan Mahasiswa Sistem Informasi (HMSI)">Himpunan Mahasiswa Sistem Informasi (HMSI)</option>
                                    <option value="Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)">Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)</option>
                                    <option value="Himpunan Mahasiswa Teknologi Informasi (HMTI)">Himpunan Mahasiswa Teknologi Informasi (HMTI)</option>
                                    <option value="kedokteran">Kedokteran</option>
                                </select> -->
                                <legend class="ml-2 text-base font-semibold leading-6 text-gray-900 mt-5">Nama Organisasi</legend>
                                <div class="sm:col-span-2">
                                    <input name="nama_organisasi" id="nama_organisasi" readonly type="text" value="" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Organisasi">
                                </div>
                                <legend class="ml-2 text-base font-semibold leading-6 text-gray-900 mt-3">Nama Penanggung Jawab</legend>
                                <div class="mt-0">
                                    <input type="text" name="nama_pj" id="nama_pj" autocomplete="family-name" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-3">
                                <legend class="ml-2 text-base font-semibold leading-6 text-gray-900">Nomor Telfon</legend>
                                <div class="mt-0">
                                    <input id="noTelp" name="no_telp" type="text" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <legend class="ml-2 text-base font-semibold leading-6 text-gray-900">Nama Kegiatan</legend>
                                <div class="mt-0">
                                    <input type="text" name="nama_kegiatan" id="nama_kegiatan" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Kegiatan">
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Hari</label>
                            <div class="mt-2">
                                <input type="text" name="hari" id="textfieldhariEvent" readonly autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                            <div class="mt-2">
                                <input type="text" name="tanggal" id="textfieldTanggalEvent" readonly autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                            <div class="mt-2">
                                <input type="text" name="slot" id="textfieldSlotEvent" readonly autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="border-b border-gray-700 pb-12">

                        
                    </div> -->

                    <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-800 dark:bg-gray-500">
                        <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">Silahkan download dan isi Surat Peminjaman kemudian di upload beserta ToR mengenai acara yang akan diselenggarakan</p>
                    </blockquote>

                    <!-- DOWNLOAD FILE -->
                        <div class="flex items-start max-w-[270px] bg-gray-50 dark:bg-gray-600 rounded-xl p-2 mt-5">
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
                                    Template Surat Peminjaman
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
                        <!-- DOWNLOAD FILE -->
            
                        <div class="mt-5 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-4">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-900" for="surat_peminjaman">Surat Peminjaman</label>
                                <input class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="surat_peminjaman" name="surat_peminjaman" type="file">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-900" for="tor">ToR</label>
                                <input class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="tor" name="tor" type="file">
                            </div>
                        </div>

                    </div>

                </div>

                <!-- HIDDEN -->
                <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="hidden" name="lapangan" id="lapanganEvent" value="Full Lapangan" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                        </div>
                        </div>
                        <div class="sm:col-span-2">
                        <div class="mt-2">
                            <input type="hidden" name="kat_kegiatan" id="kat_kegiatanEvent" value="Event" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="hidden" name="email" id="getEmailyglogin" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="hidden" name="id_user" id="idUserForm" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="hidden" name="status" id="" value="4" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <input type="hidden" name="special_status" id="" value="0" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                        </div>
                </div>

                

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <div class="flex items-center px-4 h-9 ">
                            <input id="termCheck" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="termCheck" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-500">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
                        </div>
                        <button id="kembaliButton" type="button" class="flex items-center justify-center px-4 h-9 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Kembali
                        </button>
                        <button id="ajukanButtonEvent" onclick="inputFormEvent(event)" data-modal-target="alertRekapPeminjaman" data-modal-toggle="popup-modal" type="button" class="flex items-center justify-center pointer-events-none opacity-50 px-4 h-9 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-600 dark:hover:text-white">
                            Ajukan Peminjaman
                        </button>
                </div>
            </form>

                <script>

                    const kembaliButton = document.getElementById("kembaliButton");
                    const ajukanButtonEvent = document.getElementById("ajukanButtonEvent");
                    const termCheck = document.getElementById('termCheck');

                    kembaliButton.addEventListener("click", function() {
                        window.location.href = "http://127.0.0.1:8000/form"; 
                    });

                    // ajukanButton.addEventListener("click", function(){
                    //     window.location.href = "http://127.0.0.1:8000/peminjam";
                    // });
                    termCheck.addEventListener('change', function() {
                        if (this.checked) {
                            ajukanButtonEvent.classList.remove('pointer-events-none', 'opacity-50');
                        } else {
                            ajukanButtonEvent.classList.add('pointer-events-none', 'opacity-50');
                        }
                    });

                    buttonDownload.addEventListener("click", function(){
                        window.location.href = "https://drive.usercontent.google.com/u/0/uc?id=1iwLf8M1MsdgsxJdaj-0zhrDdCkfBLVrz&export=download";
                    });

                    const urlParams = new URLSearchParams(window.location.search);
                    const tanggalEvent = urlParams.get('tanggalEvent');
                    const slotEvent = urlParams.get('slotEvent');
                    const hariEvent = urlParams.get('hariEvent');

                    document.getElementById("textfieldTanggalEvent").value = tanggalEvent;
                    document.getElementById("textfieldSlotEvent").value = slotEvent;
                    document.getElementById("textfieldhariEvent").value = hariEvent;

                    function inputFormEvent(event){
                        event.preventDefault()
                            const form = document.querySelector('form')
                            const formData = new FormData(form)

                            console.log(formData)
                            formData.forEach(function(value,key){
                                console.log(key+' : '+value)
                            })

                            fetch('http://127.0.0.1:8000/api/formInput', {
                                method:'post', body:formData
                            })
                            .then(response=>response.json())
                            .then(data=>{
                                if(data.is_success){
                                    console.log('berhasil')
                                    window.location.href = '/persetujuan'
                                }
                            })
                    }
                
                const formPeminjam = document.querySelector('form')
                formPeminjam.addEventListener('submit',inputFormEvent)


                window.userOrganizationName = "{{ Auth::user()-> namaOrganisasi }}";
                window.userEmail = "{{ Auth::user()-> email }}";
                window.userPj = "{{ Auth::user()-> nama_pj }}";
                window.userNoTelp = "{{ Auth::user()-> no_telp }}";
                document.addEventListener("DOMContentLoaded", function() {

                    const userOrganizationName = window.userOrganizationName;
                    const userEmail = window.userEmail;
                    console.log("ini adalah " + userOrganizationName)
                    const inputField = document.getElementById('nama_organisasi');
                    const inputEmailField = document.getElementById('getEmailyglogin');
                    const inputPj = document.getElementById('nama_pj');
                    const inputNoTelp = document.getElementById('noTelp');

                    if (inputField && userOrganizationName) {
                        inputField.value = userOrganizationName;
                    }
                    inputEmailField.value = userEmail;
                    inputPj.value = userPj;
                    inputNoTelp.value = '0'+userNoTelp;
                });

                window.user_id = "{{ Auth::user()-> id_user }}";
                document.addEventListener("DOMContentLoaded", function() {

                    const user_id = window.user_id;
                    console.log("ini adalah " + user_id)
                    const inputField = document.getElementById('idUserForm');

                    if (inputField && user_id) {
                        inputField.value = user_id;
                    }
                });

                </script>


            </div>
        
        </div>

@endsection