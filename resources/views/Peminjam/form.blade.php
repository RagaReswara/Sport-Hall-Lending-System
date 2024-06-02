@extends('Peminjam/masterPeminjam')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/40 pb-6">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Formulir Peminjaman Gor</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p>

                    <div class="border-b-8 border-gray-950/40 pb-2"></div>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                        <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->

                            <!-- DROPDOWN SELECT -->
                                    <!-- <select name="nama_organisasi" id="nama_organisasi" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
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
                            
                            <legend class="ml-2 text-base font-semibold leading-6 text-gray-900 mt-5">Nama Penanggung Jawab</legend>
                            <div class="sm:col-span-2 mt-2">
                                <input type="text" name="nama_pj" id="nama_pj" readonly autocomplete="family-name" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                            </div>
                    
                            <legend class="ml-2 text-base font-semibold leading-6 text-gray-900 mt-5">Nomor Telfon</legend>
                            <div class="sm:col-span-2">
                                <input name="no_telp" id="no_telp" type="text" readonly autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon/WA Penanggung Jawab">
                                <p id="error-message" class="text-red-500 mt-2 hidden">Nomor telepon tidak boleh lebih dari 13 karakter</p>
                            </div>
                            
                        
                        </div>
                    </div>

                    <!-- CHECKBOX KATEGORI KEGIATAN-->
                    <div class="space-y-10">
                        <fieldset>
                        
                        <div class="space-y-2">

                        <legend class="ml-2 mt-5 text-base font-semibold leading-6 text-gray-900">Kategori Kegiatan</legend>
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
                            

                            <!-- <h2 class="text-base font-semibold leading-7 text-gray-900">Perhatian</h2> -->
                            <!-- <p class="text-gray-600">Khusus untuk kegiatan event silahkan untuk mengisikan form
                                <a id="tanggalEvent" href="" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">disini</a>
                            </p> -->
                        </fieldset>
                    </div>
                    <!-- CHECKBOX KATEGORI KEGIATAN -->

                </div>
                    <!-- CHECKBOX LAPANGAN-->
                    <div class="space-y-10">
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
                                <input id="1lapangan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="1lapangan" class="font-medium text-gray-900">Full Lapangan</label>
                            </div>
                        </div>

                    <!-- HIDDEN -->
                            <div class="sm:col-span-2">
                                <div class="mt-2">
                                    <input type="hidden" name="status" id="" value="1" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
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

                            <div class="border-b border-gray-900/10 pb-6"></div>
                            
                        </div>
                        
                        </fieldset>
                    </div>
                    <!-- CHECKBOX LAPANGAN -->

                </div>

                    <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                        <!-- <label for="first-name" class="block text-base font-medium leading-6 text-gray-900">Nama Kegiatan</label> -->
                        <legend class="ml-2 text-base font-semibold leading-6 text-gray-900 mt-5">Nama Kegiatan</legend>
                        <div class="sm:col-span-2 mt-2">
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Kegiatan">
                        </div>
                        </div>

                        <div class="sm:col-span-3">
                        <!-- <label for="last-name" class="block text-base font-medium leading-6 text-gray-900">Nama Penanggung Jawab</label> -->
                        <!-- <div class="mt-2">
                            <input type="text" name="nama_pj" id="nama_pj" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                        </div> -->
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

                    <!-- HIDDEN RUTIN -->
                    <div class="hidden flex-col" id="hiddenRutin">
                            <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-md font-medium leading-6 text-gray-900">Hari ke 2</label>
                            <div class="mt-2">
                                <input type="text" name="hariRutin" id="textfieldHariRutin" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                            <div class="mt-2">
                                <input type="text" name="tanggalRutin" id="textfieldTanggalRutin" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                            <div class="mt-2">
                                <input type="text" name="slotRutin" id="textfieldSlotRutin" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                            </div>
                            </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12 mt-5">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Perhatian</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Setelah mengisi form silahkan untuk mendownloadnya lalu di print bersamaan invoice yang akan di kirimkan melalui email kemudian diberikan kepada biro 3 sebagai tiket dalam meminjam gor</p>
                    </div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="buttonRutin" type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-10">
                            Ajukan Peminjaman Rutin
                        </button>
                        <div class="flex items-center px-4 h-9 ">
                            <input id="termCheck" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="termCheck" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-500">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
                        </div>
                        <button id="kembaliButton" type="button" class="flex items-center justify-center px-4 h-9 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Kembali
                        </button>
                        <button id="ajukanButton" onclick="inputForm(event)" data-modal-target="alertRekapPeminjaman" data-modal-toggle="popup-modal" type="submit" class="flex items-center justify-center pointer-events-none opacity-50 px-4 h-9 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-600 dark:hover:text-white">
                            Ajukan Peminjaman
                        </button>
                    </div>
                </div>
            </div>

            <!-- RUTIN -->
            <!-- Modal toggle -->
            

            <!-- Main modal -->
            <div id="popup" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-screen md:inset-0 h-[calc(100%-1rem)] max-h-screen bg-black bg-opacity-70">
                <div class="flex flex-1 p-4 w-full max-w-7xl max-h-full my-auto py-52 mx-96">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Silahkan pilih tanggal dan slot hari ke 2
                            </h3>
                            <button id="closePopup" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                            <div class="flex gap-4 mb-4 flex-col">
                                <div class="col-span-2">
                            <!-- DATEPICKER RUTIN-->
                                    <div class="relative max-w-sm mr-10">
                                    <input name="tanggal2" id="popupPilihTanggal" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">

                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex text-center items-center justify-center">
                                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white mt-5">Silahkan pilih slot yang tersedia</label>
                                    </div>
                                </div> 
                                <div class="flex-1 gap-4 mb-4">
                            <!-- SLOT/JADWAL 1 -->
                                    <div class="flex gap-2" id="radioSlot">

                                    </div>

                                <div class="mt-6 flex justify-end gap-x-6">
                                    <div class="inline-flex mt-2 xs:mt-0">
                                        <button id="buttonSubmitRutin" type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                    </form>
                    
                        </div>
                </div>
            </div>
            </div> 
            <!-- RUTIN -->

            <script>

                // POP UP
                const buttonRutin = document.getElementById("buttonRutin");
                const popup = document.getElementById("popup");
                const closePopup = document.getElementById("closePopup");              
                const buttonSubmitRutin = document.getElementById("buttonSubmitRutin");

                // TERMS CHECK BUTTON
                const kembaliButton = document.getElementById("kembaliButton");
                const ajukanButton = document.getElementById("ajukanButton");
                const termCheck = document.getElementById('termCheck');
                kembaliButton.addEventListener("click", function() {
                    window.location.href = "http://127.0.0.1:8000/peminjam"; 
                });

                // ajukanButton.addEventListener("click", function(){
                //     window.location.href = "http://127.0.0.1:8000/peminjam";
                // });

                termCheck.addEventListener('change', function() {
                    if (this.checked) {
                        ajukanButton.classList.remove('pointer-events-none', 'opacity-50');
                    } else {
                        ajukanButton.classList.add('pointer-events-none', 'opacity-50');
                    }
                });

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

                const basketCheckbox = document.getElementById('kat_kegiatan');
                const checkboxes = document.querySelectorAll('input[name="line[]"]');
                const fullLapanganCheckbox = document.getElementById('1lapangan').parentElement;

                function getNextSunday() {
                    const today = new Date();
                    const nextSunday = new Date(today.setDate(today.getDate() + (7 - today.getDay())));
                    return nextSunday;
                }
                const nextSunday = getNextSunday();

                // DATE PICKER flatpickr
                document.addEventListener('DOMContentLoaded', function(){
                    let tanggal2 = flatpickr('input[name="tanggal2"]',{
                        dateFormat: 'd-D-m-Y',
                        minDate: nextSunday,
                        enableTime: false,
                    });

                    // Ambil nilai tanggal1 dari URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const tanggal1 = urlParams.get('tanggal');
                    const slot = urlParams.get('slot');

                    console.log(tanggal1)
                    console.log('slot',slot)

                    const parts = tanggal1.split('-');
                    const day = parts[1];
                    const tanggal = parts[3]+'-'+parts[2]+'-'+parts[0];

                    basketCheckbox.addEventListener('change', function(){
                        const selectedValue = basketCheckbox.value;

                    if(selectedValue == "Basket" || selectedValue == "Rutin"){
                            checkboxes.forEach(function(checkbox) {
                            const label = document.querySelector(`label[for="${checkbox.id}"]`);
                            if (checkbox.id !== '1lapangan' ) {
                                checkbox.classList.add("hidden");
                                if (label) {
                                    label.classList.add("hidden");
                                }
                            }
                        });
                    }
                    else if(selectedValue == "Event"){
                        window.location.href = `http://127.0.0.1:8000/formEvent?tanggalEvent=${tanggal}&slotEvent=${start + '-' + end}&hariEvent=${dayIndonesian}`;
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
                        console.log('abcsajdka',data);

                        if (data.lapangan) {
                            // Pisahkan string lapangan menjadi array menggunakan koma sebagai pemisah
                            const lapanganArray = data.lapangan.split(', ');

                            // Ambil semua input dan label dengan nama line[]
                            const checkboxes = document.querySelectorAll('input[name="line[]"]');
                            const labels = document.querySelectorAll('label[for^="line"]');

                            // Proses setiap lapangan dalam array lapangan
                            lapanganArray.forEach(lapangan => {
                                // Iterasi semua input dan label
                                checkboxes.forEach(checkbox => {
                                    // Periksa apakah id lapangan sama dengan id input
                                    if (checkbox.id === lapangan) {
                                        // Tambahkan kelas hidden ke input
                                        checkbox.classList.add('hidden');
                                    }
                                });

                                labels.forEach(label => {
                                    // Periksa apakah id lapangan sama dengan id label
                                    if (label.getAttribute('for') === lapangan) {
                                        // Tambahkan kelas hidden ke label
                                        label.classList.add('hidden');
                                    }
                                });
                            });

                            // Sembunyikan "Full Lapangan" jika lapangan lebih dari satu
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
                    

                    // Pisahkan jam mulai dan jam selesai
                    const [start, end] = slot.split('-');

                    textFieldHari.value = dayIndonesian;
                    document.getElementById("textFieldTanggal").value = tanggal;
                    document.getElementById("textFieldSlot").value = slot;
                    // document.getElementById("textfieldTanggalRutin").value = tanggal;
                    document.getElementById("getStart").value = start;


                    // document.getElementById('tanggalEvent').href = `http://127.0.0.1:8000/formEvent?tanggalEvent=${tanggal}&slotEvent=${start + '-' + end}&hariEvent=${dayIndonesian}`;

                    // Jika tanggal1 ada dalam URL, set nilai tanggal1 ke dalam date picker tanggal2
                    if (tanggal1) {
                        tanggal2 = flatpickr('input[name="tanggal2"]', {
                            dateFormat: 'd-D-m-Y',
                            defaultDate: tanggal1, // Set tanggal1 sebagai default date pada tanggal2
                            enableTime: false,
                            minDate: tanggal1 // Tetapkan tanggal minimal untuk tanggal2 agar setidaknya satu hari setelah tanggal1
                        });
                    }
                    console.log('ini tanggal 1: '+document.getElementById('textFieldTanggal').value)
                    console.log('ini tanggal 2: '+document.getElementById('textfieldTanggalRutin').value)
                });

                // function cekLapangan(){
                //     fetch('http://127.0.0.1:8000/api/cekLapangan', {
                //         method: 'post', headers:{'Content-Type':'application/json'}, body:JSON.stringify({hari:dayIndonesian, slot:slot})
                //     })
                //     .then(response=>response.json())
                //     .then(data=>{
                //         console.log(data)
                //     })
                // }
                // cekLapangan();

                function inputForm(event){
                    const getHari = document.getElementById('textFieldHari').value;
                    const getStart = document.getElementById('getStart').value;
                    const getHariRutin = document.getElementById('textfieldHariRutin').value;
                    const getSlotRutin = document.getElementById('getSlotRutin').value;

                    event.preventDefault()
                        const form = document.querySelector('form')
                        const formData = new FormData(form)

                        console.log(formData)
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
                        formData.append('lapangan', selectedLines);
                        console.log("Nilai-nilai yang dicentang:", selectedLines);

                        fetch('http://127.0.0.1:8000/api/formInput', {
                            method:'post', body:formData
                        })
                        .then(response=>response.json())
                        .then(data=>{
                            if(data.is_success){
                                console.log('berhasil')
                                fetch('http://127.0.0.1:8000/api/updateSlot', {
                                    method: 'post', headers:{'Content-Type':'application/json'}, body:JSON.stringify({hari:getHari, jam_mulai:getStart, hariRutin:getHariRutin, jam_mulaiRutin:getSlotRutin})
                                })
                                .then(response=>response.json())
                                .then(data=>{
                                    window.location.href = '/persetujuan';
                                })
                                
                            }
                        })
                }
                
                const formPeminjam = document.querySelector('form')
                formPeminjam.addEventListener('submit',inputForm)

                // SLOT / JADWAL
                let popupPilihTanggal = document.getElementById("popupPilihTanggal")
                let textfieldTanggalRutin = document.getElementById("textfieldTanggalRutin")
                let textfieldHariRutin = document.getElementById("textfieldHariRutin")
                let textfieldSlotRutin = document.getElementById("textfieldSlotRutin")

                let counter = 1;
                
                const slotRutin = document.getElementById('radioSlot');

                document.addEventListener('DOMContentLoaded', function(){
                const urlParams = new URLSearchParams(window.location.search);
                const ambilTanggal = urlParams.get('tanggal');

                const tanggalRutin = flatpickr('input[id="popupPilihTanggal"]', {
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
                        const dayIndonesian = hari[day];
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
                                        <input id="slotRutin${counter}" type="radio" value="${jamMulai}-${jamSelesai}" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="slotRutin${counter}" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> ${jamMulai} - ${jamSelesai} </label>
                                    </div>

                                    `
                                }
                                })
                            })
                            console.log(popupPilihTanggal)

                        }
                    })
                });
                
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
                    const inputNoTelp = document.getElementById('no_telp');

                    if (inputField && userOrganizationName) {
                        inputField.value = userOrganizationName;
                    }
                    inputEmailField.value = userEmail;
                    inputPj.value = userPj;
                    inputNoTelp.value = userNoTelp;

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

                window.role = "{{ Auth::user()-> role }}";
                document.addEventListener("DOMContentLoaded", function() {
                    const role = window.role;
                    console.log("ini adalah " + role)
                    const kegiatanRutin = document.getElementById('kat_kegiatan');
                    const rutinOption = kegiatanRutin.querySelector('option[value="Rutin"]');

                    function cekRoleRutin(){
                        const buttonUntukRutin = document.getElementById('buttonRutin');
                        const kegiatanRutin = document.getElementById('kat_kegiatan');

                        if (role === 'Universitas' || role === 'UKM') {
                            buttonUntukRutin.classList.remove('hidden');
                            kegiatanRutin.classList.remove('hidden');
                        } else {
                            buttonUntukRutin.classList.add('hidden');
                            rutinOption.classList.add('hidden');
                        }
                    }
                    cekRoleRutin()
                });

                buttonSubmitRutin.addEventListener('click', function(){
                    popup.classList.add("hidden");
                    document.getElementById("labelHari").classList.add("hidden");
                    document.getElementById("labelHariPertama").classList.remove("hidden");
                    document.getElementById("hiddenRutin").classList.remove("hidden");

                    let selectedValue;
                    
                    const radioButtonRutin = document.querySelectorAll('input[name="bordered-radio"]');
                    radioButtonRutin.forEach(radioButton => {
                        // Periksa apakah radio button ini yang dipilih
                        if (radioButton.checked) {
                            // Jika dipilih, ambil nilai dari radio button yang dipilih
                            selectedValue = radioButton.value;
                            console.log("Nilai yang dipilih:", selectedValue);
                            // Lakukan apa pun yang ingin Anda lakukan dengan nilai yang dipilih di sini
                            // Contoh: Simpan nilai ini ke variabel atau kirim ke server
                        }
                    });
                    const parts = popupPilihTanggal.value.split('-');
                    const day = parts[1];
                    const tanggalRutin = parts[3]+'-'+parts[2]+"-"+parts[0];
                    const [startRutin, end] = selectedValue.split('-');
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
                    textfieldTanggalRutin.value = tanggalRutin;
                    textfieldHariRutin.value = dayIndonesian;
                    textfieldSlotRutin.value = startRutin + '-' + end;
                    document.getElementById("getSlotRutin").value = startRutin;
                    console.log(dayIndonesian);
                });

                buttonRutin.addEventListener("click", function() {
                    popup.classList.remove("hidden"); 
                });
                closePopup.addEventListener("click", function() {
                    popup.classList.add("hidden"); 
                });
                

            </script>
        
        

@endsection

@section('script')
@endsection
@section('link')
@endsection