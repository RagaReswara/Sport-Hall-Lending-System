@extends('Biro3/masterBiro')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

            <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Formulir Peminjaman Gor Khusus Kegiatan Event</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p>

                    <div class="border-b-8 border-gray-950/40 pb-12"></div>

                    <div class="sm:col-span-4">
                            <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->
                            <form class="max-w-60 mx-auto">
                                    <select id="countries" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
                                        <option selected>Silahkan Pilih Organisasi</option>
                                        <option value="hmsi">Himpunan Mahasiswa Sistem Informasi (HMSI)</option>
                                        <option value="fti">Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)</option>
                                        <option value="ti">Himpunan Mahasiswa Teknologi Informasi (HMTI)</option>
                                        <option value="bni">Bank Nasional Indonesia (BNI)</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="kedokteran">Kedokteran</option>
                                    </select>
                            </form> 

                            <div class="sm:col-span-1 mt-4">
                                <!-- <label for="email" class="block text-base font-medium leading-6 text-gray-900">Nomor Telepon / WA</label> -->
                                <div class="mt-2">
                                    <input name="noTelp" type="text" autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
                                </div>
                            </div>
                        </div>
            </form>
                    

                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                        <!-- <label for="first-name" class="block text-base font-medium leading-6 text-gray-900">Nama Kegiatan</label> -->
                        <div class="mt-0">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Kegiatan">
                        </div>
                        </div>

                        <div class="sm:col-span-3">
                        <!-- <label for="last-name" class="block text-base font-medium leading-6 text-gray-900">Nama Penanggung Jawab</label> -->
                        <div class="mt-0">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                        </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Hari</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>
                    </div>

                </div>
            </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="backButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Cancel
                        </button>
                        <button id="submitButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-700 dark:hover:text-white">
                            Submit
                        </button>
                </div>

                <script>

                    const backButton = document.getElementById("backButton");
                    const submitButton = document.getElementById("submitButton");

                    backButton.addEventListener("click", function() {
                        window.location.href = "http://127.0.0.1:8000/isiJadwal"; 
                    });
                    submitButton.addEventListener("click", function() {
                        window.location.href = "http://127.0.0.1:8000/"; 
                    });

                </script>


            </div>
        
        </div>

@endsection