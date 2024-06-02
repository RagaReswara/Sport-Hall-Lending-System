

<!-- NAVBAR -->
      <nav class="bg-white border-gray-200 dark:bg-gray-900">
         <div class="flex flex-wrap items-center p-4 ml-64">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
               <img src="https://fbis.ukdw.ac.id/wp-content/uploads/2022/05/Logo-UKDW.png" class="h-14" alt="Flowbite Logo" />
               <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GEDUNG OLAHRAGA UNIVERSITAS KRISTEN DUTA WACANA</span>
            </a>

            <!-- USER AVATAR -->
            <button id="dropdownAvatarNameButton" type="button" data-dropdown-toggle="dropdownAvatarName" class="flex items-center ml-64 text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
               <span class="sr-only">Open user menu</span>
               <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
               </svg>

               {{ Auth::user() -> nama_pj }}
               <svg class="w-2.5 h-2.5 ms-3 mr-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
               </svg>
               </button>

               <!-- Dropdown menu -->
               <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                     <div class="font-medium ">Email</div>
                     <div class="truncate">{{ Auth::user() -> email }}</div>
                  </div>
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                     <li>
                     <a href="http://127.0.0.1:8000/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                     </li>
                     <li>
                  </ul>
                  <div class="py-2">
                     <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                  </div>
               </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border text-white border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            {{ Auth::user() -> namaOrganisasi }}
               <!-- <li>
                  <a href="/logout" class="ml-5 block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Logout</a>
               </li> -->
            </ul>
            </div>
         </div>

      </nav>

<!-- SIDEBAR -->
      <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
         <span class="sr-only">Open sidebar</span>
         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
         </svg>
      </button>

      <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
         <div class="h-full px-3 py-4 overflow-y-auto bg-blue-50 dark:bg-gray-900">
            <ul class="space-y-2 font-medium mt-20">
               <li>
                  <a href="http://127.0.0.1:8000/peminjam" class=" {{ Route::is('peminjam', 'peminjam.*', 'form') ? 'bg-blue-600 font-bold' : '' }} sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-[27] h-[27] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
                  </svg>

                     <span class="flex-1 ms-3 whitespace-nowrap">Jadwal</span>
                  </a>
               </li>
               <li>
                  <a href="http://127.0.0.1:8000/persetujuan" class="{{ Route::is('persetujuan') ? 'bg-blue-600 font-bold' : '' }} sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <!-- <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                     </svg> -->
                     <svg class="w-[27px] h-[27px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M3.559 4.544c.355-.35.834-.544 1.33-.544H19.11c.496 0 .975.194 1.33.544.356.35.559.829.559 1.331v9.25c0 .502-.203.981-.559 1.331-.355.35-.834.544-1.33.544H15.5l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.889c-.496 0-.975-.194-1.33-.544A1.868 1.868 0 0 1 3 15.125v-9.25c0-.502.203-.981.559-1.331ZM7.556 7.5a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.556Z" clip-rule="evenodd"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Persetujuan</span>
                     <span id="counterPermohonan" class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"></span>
                  </a>
               </li>
               <!-- <li>
                  <a href="http://127.0.0.1:8000/historyPeminjam" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-[27px] h-[27px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Riwayat</span>
                  </a>
               </li> -->
            </ul>
         </div>
      </aside>
      </div>

<script>

   

      document.addEventListener('DOMContentLoaded', function(){
         let counter = 0;
         window.user_id = "{{ Auth::user()-> id_user }}";
         const user_id = window.user_id;

         fetch('http://127.0.0.1:8000/api/form')
            .then(response=>response.json())
            .then(data=>{
               if(data.is_success){
                  let response = data.data;

                  response.forEach(data => {
                     if(data.status == 2 && data.id_user == user_id){
                        counter++
                        console.log('ini data ', data)
                     }
                  });
                  document.getElementById('counterPermohonan').textContent = counter;
                  console.log(counter)
               }    
            })
            
      });

      let btnAvatar = document.getElementById('dropdownAvatarNameButton');
      let dropdown = document.getElementById('dropdownAvatarNameButton');

      btnAvatar.addEventListener("click", function() {
         dropdown.classList.remove("hidden"); 
      });

      // document.addEventListener('DOMContentLoaded', function() {
      //    var sidebarItems = document.querySelectorAll('.sidebar-item');
      //    sidebarItems.forEach(function(item) {
      //       if (item.href === window.location.href) {
      //             item.classList.add('bg-blue-600', 'font-bold');
      //       }
      //    });
      // });

</script>


