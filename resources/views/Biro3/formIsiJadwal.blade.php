@extends('Biro3/masterBiro')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/40 pb-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Form Isi Jadwal</h2>
                    <!-- <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p> -->

                    <div class="border-b-8 border-gray-950/40 pb-3"></div>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->
                            <legend class="ml-2 mt-10 text-base font-semibold leading-6 text-gray-900">Nama Penganggung jawab</legend>
                            <select name="nama_organisasi" id="nama_organisasi" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Silahkan Pilih Organisasi / Instansi</option>
                                <option value="Himpunan Mahasiswa Sistem Informasi (HMSI)">Himpunan Mahasiswa Sistem Informasi (HMSI)</option>
                                <option value="Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)">Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)</option>
                                <option value="Himpunan Mahasiswa Teknologi Informasi (HMTI)">Himpunan Mahasiswa Teknologi Informasi (HMTI)</option>
                                <option value="Badan Eksekutif Mahasiswa Universitas Kristen Duta Wacana (BMMU)">Badan Eksekutif Mahasiswa Universitas Kristen Duta Wacana (BMMU)</option>
                                <option value="Badan Eksekutif Mahasiswa Fakultas Kedokteran (BMFTK)">Badan Eksekutif Mahasiswa Fakultas Kedokteran (BMFTK)</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>  

                            <div class="sm:col-span-1 mt-4">
                                <legend class="ml-2 text-base font-semibold leading-6 text-gray-900">Nama Penganggung jawab</legend>
                                <div class="mt-2">
                                    <input type="text" name="nama_pj" id="nama_pj" autocomplete="family-name" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                                </div>
                                <legend class="ml-2 mt-3 text-base font-semibold leading-6 text-gray-900">No Telfon</legend>
                                <div class="mt-2">
                                    <input id="noTelp" name="no_telp" type="text" autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
                                    <p id="error-message" class="text-red-500 mt-2 hidden">Nomor telepon tidak boleh lebih dari 13 karakter</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- CHECKBOX KATEGORI KEGIATAN-->
                    <div class="space-y-10">
                        <fieldset>
                        <!-- <legend class="text-base font-semibold leading-6 text-gray-900">Kategori Kegiatan</legend> -->
                        <div class="space-y-2">
                            <select name="kat_kegiatan" id="kat_kegiatan" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
                                <option disabled selected hidden>Silahkan Pilih Kategori Kegiatan</option>
                                <option value="Basket">Basket</option>
                                <option value="Bulu Tangkis">Bulu Tangkis</option>
                                <option value="Taekwondo">Taekwondo</option>
                                <option value="Tenis Meja">Tenis Meja</option>
                                <option value="Event">Event</option>
                                <option value="Rutin">Rutin</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            
                        </fieldset>
                    </div>
                    <!-- CHECKBOX KATEGORI KEGIATAN -->

                </div>
                    <!-- CHECKBOX LAPANGAN-->
                    <div class="mt-5 space-y-10">
                        <fieldset>
                        <legend id="labelPilihLapangan" class="ml-28 text-base font-semibold leading-6 text-gray-900">Silahkan Pilih Lapangan</legend>
                        <div class="mt-4 space-y-6">
                        <!-- LINE -->
                        <div class="relative flex flex-wrap gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="lineA" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"> 
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="lineA" class="font-medium text-gray-900">Line A</label>
                                </div>
                                <div class="flex h-6 items-center ml-1">
                                    <input id="lineB" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="lineB" class="font-medium text-gray-900">Line B</label>
                                </div>
                                <div class="flex h-6 items-center ml-1">
                                    <input id="lineC" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="lineC" class="font-medium text-gray-900">Line C</label>
                                </div>
                                <div class="flex h-6 items-center ml-1">
                                    <input id="lineD" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="lineD" class="font-medium text-gray-900">Line D</label>
                                </div>
                                <!-- TRIBUN -->
                                <div class="flex h-6 items-center ml-1">
                                    <input id="tribun" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="tribun" class="font-medium text-gray-900">Tribun</label>
                                </div>
                            </div>
                            
                            <!-- FULL LAPANGAN -->
                            <div class="relative flex flex-wrap gap-x-3 mt-4">
                                <div class="flex h-6 items-center">
                                    <input id="1lapangan" name="line[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="1lapangan" class="font-medium text-gray-900">Full Lapangan</label>
                                </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-12"></div>
                            
                        </div>
                        
                        </fieldset>
                    </div>
                    <!-- CHECKBOX LAPANGAN -->

                </div>

                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                        <!-- <label for="first-name" class="block text-base font-medium leading-6 text-gray-900">Nama Kegiatan</label> -->
                        <legend class="ml-2 text-base font-semibold leading-6 text-gray-900">Nama Kegiatan</legend>
                        <div class="mt-2">
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" autocomplete="given-name" class="block w-8/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Kegiatan">
                        </div>
                        </div>

                        <div class="sm:col-span-3">
                        <!-- <label for="last-name" class="block text-base font-medium leading-6 text-gray-900">Nama Penanggung Jawab</label> -->
                        
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                        <label for="hari" id="labelHari" class="block text-md font-medium leading-6 text-gray-900">Hari</label>
                        
                        <label for="hari" id="labelHariPertama" class="hidden text-md font-medium leading-6 text-gray-900">Hari Pertama</label>
                        <div class="mt-2">
                            <input type="text" name="hari" id="textFieldHari" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input type="text" name="tanggal" id="textFieldTanggal" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input type="text" name="slot" id="textFieldSlot" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly >
                        </div>
                        </div>

                    </div>
                </div>

                    <div class="flex items-center mt-5 mb-5">
                        <input id="toggleDatepicker" name="lapangan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="toggleDatepicker" class="ml-2 text-gray-700">Centang untuk Kegiatan Rutin</label>
                    </div>
                    
                <!-- DATEPICKER AKHIR RUTIN -->
                    <div id="datePickerAkhirRutin" class="mt-4 hidden">
                        <div class="relative max-w-sm mr-10">
                            <input id="isiTanggalRutin" name="tanggal2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                        </div>

                        </div>

                        <div id="radioSlot" class="flex gap-2 mt-5">

                        </div>
                        
                    </div>
                <!-- DATEPICKER AKHIR RUTIN -->

                    <div class="border-b border-gray-900/10 pb-12"></div>

                </div>

                <div class="sm:col-span-2">
                <div class="mt-2">
                    <input type="hidden" name="status" id="" value="2" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="mt-2">
                        <input type="hidden" name="special_status" id="" value="0" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="mt-2">
                        <input type="hidden" id="getStart" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="mt-2">
                        <input type="hidden" id="getSlotRutin" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                    </div>
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

                <div class="mb-6 mr-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="cancelButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Cancel
                        </button>
                        <button id="" onclick="inputForm(event)" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-700 dark:hover:text-white">
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <script>

            // const submitButton = document.getElementById("submitButton");
            // const submitButton = document.getElementById("submitButton");

            // submitButton.addEventListener("click", function() {
            //     window.location.href = "http://127.0.0.1:8000/rekapIsiJadwal"; 
            // });


            window.userOrganizationName = "{{ Auth::user()-> namaOrganisasi }}";
            window.userEmail = "{{ Auth::user()-> email }}";
            document.addEventListener("DOMContentLoaded", function() {

            const userEmail = window.userEmail;
            const inputEmailField = document.getElementById('getEmailyglogin');
            inputEmailField.value = userEmail;

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
            

            // DATE PICKER flatpickr
            document.addEventListener('DOMContentLoaded', function(){
                let tanggal2 = flatpickr('input[name="tanggal2"]',{
                    dateFormat: 'd-D-m-Y',
                    enableTime: false,
                });

                // Ambil nilai tanggal1 dari URL
                const urlParams = new URLSearchParams(window.location.search);
                const tanggal1 = urlParams.get('tanggal');
                const slot = urlParams.get('slot');

                console.log(tanggal1)
                console.log(slot)

                const parts = tanggal1.split('-');
                const day = parts[0];
                const tanggal = parts[3]+'-'+parts[2]+'-'+parts[1];

                const hari = {
                    'Sun': 'Minggu',
                    'Mon': 'Senin',
                    'Tue': 'Selasa',
                    'Wed': 'Rabu',
                    'Thu': 'Kamis',
                    'Fri': 'Jumat',
                    'Sat': 'Sabtu'
                };
                const dayIndonesian = hari[day];

                fetch('http://127.0.0.1:8000/api/cekLapangan', {
                    method: 'post', 
                    headers: {'Content-Type': 'application/json'}, 
                    body: JSON.stringify({hari: dayIndonesian, slot: slot})
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);

                    if (data.lapangan) {
                        const lapanganArray = data.lapangan.split(', ');

                        const checkboxes = document.querySelectorAll('input[name="line[]"]');
                        const labels = document.querySelectorAll('label[for^="line"]');

                        lapanganArray.forEach(lapangan => {

                            checkboxes.forEach(checkbox => {
                                if (checkbox.id === lapangan) {
                                    checkbox.classList.add('hidden');
                                }
                            });

                            labels.forEach(label => {
                                if (label.getAttribute('for') === lapangan) {
                                    label.classList.add('hidden');
                                }
                            });
                        });

                        if (lapanganArray.length > 1) {
                            document.getElementById('1lapangan').classList.add('hidden');
                            document.querySelector('label[for="1lapangan"]').classList.add('hidden');
                            document.getElementById('labelPilihLapangan').textContent = 'Silahkan pilih Lapangan Yang tersisa';
                            document.getElementById('labelPilihLapangan').classList.add('ml-10')
                        }
                    } else {
                        console.log('No lapangan data found');
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
                

                const [start, end] = slot.split(' - ');

                textFieldHari.value = dayIndonesian;
                document.getElementById("getStart").value = start;
                document.getElementById("textFieldTanggal").value = tanggal;
                document.getElementById("textFieldSlot").value = slot;
                

                if (tanggal1) {
                    tanggal2 = flatpickr('input[name="tanggal2"]', {
                        dateFormat: 'd-D-m-Y',
                        defaultDate: tanggal1, 
                        enableTime: false,
                        minDate: tanggal1 
                    });
                }
                console.log('ini tanggal 1: '+ document.getElementById('textFieldTanggal').value)
                // console.log('ini tanggal 2: '+document.getElementById('textfieldTanggalRutin').value)
            });

            let dayIndonesian = '';

            // SLOT PERTANGGAL
            let isiTanggalRutin = document.getElementById("isiTanggalRutin")
            let counter = 1;    
            const slotRutin = document.getElementById('radioSlot');
            document.addEventListener('DOMContentLoaded', function(){
                const urlParams = new URLSearchParams(window.location.search);
                const ambilTanggal = urlParams.get('tanggal');

                const tanggalRutin = flatpickr('input[id="isiTanggalRutin"]', {
                        dateFormat: 'd-D-m-Y',
                        minDate: 'today', // Mengatur tanggal minimum ke hari ini
                        enableTime: false,
                        onChange: function(selectedDates, newDateStr, instance) {
                            slotRutin.innerHTML = '';  
                            dateStr = newDateStr;
                            console.log(dateStr)
                            
                            const parts = newDateStr.split('-');
                            const day = parts[1];
                            const hari = {
                                'Sun': 'Minggu',
                                'Mon': 'Senin',
                                'Tue': 'Selasa',
                                'Wed': 'Rabu',
                                'Thu': 'Kamis',
                                'Fri': 'Jumat',
                                'Sat': 'Sabtu'
                        };
                        dayIndonesian = hari[day];
                        console.log(dayIndonesian);

                        fetch('http://127.0.0.1:8000/api/slotPertanggal', {
                                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({hari:dayIndonesian})
                            }) 
                            .then(response=>response.json())
                            .then(data=>{
                                console.log(data)
                                data.data.forEach((item)=>{
                                    let jamMulai = item.jam_mulai.slice(0, -3);
                                    let jamSelesai = item.jam_selesai.slice(0, -3);
                                if(item.status === 0){
                                    slotRutin.innerHTML +=
                                    `
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="slotRutin${counter}" type="radio" value="${jamMulai} - ${jamSelesai}" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="slotRutin${counter}" class="mr-3 w-full py-4 ms-2 text-sm font-medium text-black dark:text-black"> ${jamMulai} - ${jamSelesai} </label>
                                    </div>

                                    `
                                }
                                })
                            })
                            console.log(isiTanggalRutin)

                        }
                    })
                });

        const basketCheckbox = document.getElementById('kat_kegiatan');
        const checkboxes = document.querySelectorAll('input[name="line[]"]');
        const fullLapanganCheckbox = document.getElementById('1lapangan').parentElement;

        basketCheckbox.addEventListener('change', function(){
            const selectedValue = basketCheckbox.value;

            if(selectedValue == "Basket" || selectedValue == "Rutin" || selectedValue == "Event"){
                checkboxes.forEach(function(checkbox) {
                const label = document.querySelector(`label[for="${checkbox.id}"]`);
                if (checkbox.id !== '1lapangan') {
                    checkbox.classList.add("hidden");
                    if (label) {
                        label.classList.add("hidden");
                    }
                }
            });
        }
        else{
            checkboxes.forEach(function(checkbox) {
                const label = document.querySelector(`label[for="${checkbox.id}"]`);
                checkbox.classList.remove("hidden");
                if (label) {
                    label.classList.remove("hidden");
                }
            });
        }
    })

        function inputForm(event){
            const getHari = document.getElementById('textFieldHari').value;
            const getStart = document.getElementById('getStart').value;
            const getSlotRutin = document.getElementById('getSlotRutin').value;

            const karyawanInput = document.getElementById('nama_organisasi').value;
            
            let simpanSlot = '';

            const radioButtonRutin = document.querySelectorAll('input[name="bordered-radio"]');
            let selectedValue;

            radioButtonRutin.forEach(radioButton => {
                if (radioButton.checked) {
                    selectedValue = radioButton.value;
                    simpanSlot = radioButton.value;
                    console.log("Nilai yang dipilih:", selectedValue);
                }
            });
            // const [startRutin, end] = selectedValue.split('-');
            const parts = isiTanggalRutin.value.split('-');
            const tanggalRutin = parts[3]+'-'+parts[2]+"-"+parts[0];

            event.preventDefault()
                const form = document.querySelector('form')
                const formData = new FormData(form)
                formData.forEach(function(value,key){
                    console.log(key+' : '+value)
                })

                const checkbox = document.querySelectorAll('input[name="line[]"]');
                // Membuat array kosong untuk menyimpan nilai yang dicentang
                let selectedLines = '';
                let counter = 0;
                checkbox.forEach((checkbox, index) => {
                    if (checkbox.checked) {
                        if (selectedLines !== '') {
                            selectedLines += ', ';
                        }
                        counter++;
                        selectedLines += checkbox.id;
                    }
                }); 
                // if(counter == 6){
                //     formData.append("lapangan", 'Full Lapangan');
                // }
                // else{
                //     formData.append('lapangan', selectedLines);
                // }
                // console.log("Nilai-nilai yang dicentang:", selectedLines);

                formData.append('lapangan', selectedLines);
                // formData.append("hariRutin", dayIndonesian);
                // formData.append("slotRutin", simpanSlot);
                // formData.append("tanggalRutin", tanggalRutin);

                if(karyawanInput == 'Karyawan' || 'Lainnya'){
                    formData.append('special_status', 2);
                }

                fetch('http://127.0.0.1:8000/api/formInput', {
                    method:'post', body:formData
                })
                .then(response=>response.json())
                .then(data=>{
                    if(data.is_success){
                        console.log('berhasil')
                        // fetch('http://127.0.0.1:8000/api/updateSlot', {
                        //     method: 'post', headers:{'Content-Type':'application/json'}, body:JSON.stringify({hari:getHari, jam_mulai:getStart, hariRutin:dayIndonesian, jam_mulaiRutin:startRutin })
                        // })
                        fetch('http://127.0.0.1:8000/api/updateSlot', {
                            method: 'post', headers:{'Content-Type':'application/json'}, body:JSON.stringify({hari:getHari, jam_mulai:getStart })
                        })
                        .then(response=>response.json())
                        .then(data=>{
                            window.location.href = '/listPermohonan';
                        })
                    }
                    // document.getElementById("getSlotRutin").value = startRutin;
                })
        }

        const formPeminjam = document.querySelector('form')
        formPeminjam.addEventListener('submit',inputForm)

        document.addEventListener('DOMContentLoaded', function () {
            const noTelpInput = document.getElementById('noTelp');
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