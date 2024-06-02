<!doctype html><html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('../resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
</head>
<body>

    @include('Biro3.navbar')
    @yield('content')


</body>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

<!-- SCRIPT -->
    <script>
        //BUTTON 
        const cancelButton = document.getElementById("cancelButton");
        // const submitButton = document.getElementById("submitButton");

        cancelButton.addEventListener("click", function() {
            window.location.href = "http://127.0.0.1:8000/jadwalBiro3"; 
        });
        // submitButton.addEventListener("click", function() {
        //     window.location.href = "http://127.0.0.1:8000/rekap"; 
        // });
    
        // CHECKBOX
        const lapanganCheckbox = document.getElementById('1lapangan');
        const tribunCheckbox = document.getElementById('tribun');
        const lineCheckboxes = document.querySelectorAll('input[name="line[]"]');

        lapanganCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    lineCheckboxes.forEach(checkbox => {
                    checkbox.checked = true;
                    checkbox.disabled = false;
                    });
                tribunCheckbox.checked = true;
                } else {
                    lineCheckboxes.forEach(checkbox => {
                        checkbox.checked = false; // Batalkan centang pada checkbox "line"
                        checkbox.disabled = false; // Aktifkan kembali checkbox "line"
                    });
                    tribunCheckbox.checked = false; // Batalkan centang pada checkbox "Tribun"
                    lapanganCheckbox.checked = false;
                }
            });

        let checkedCount = 0;

        lineCheckboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    checkedCount++;
                if (checkedCount === 4) {
                    lapanganCheckbox.checked = true;
                    tribunCheckbox.checked = true;
                    }
                } else {
                    checkedCount--;
                    lapanganCheckbox.checked = false;
                    tribunCheckbox.checked = false;
                    }
            });
        });

        // NGECEK CHEKBOX BISA APA ENGGA
        lineCheckboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
            console.log(checkbox.checked);
            });
        });
        lapanganCheckbox => {
            checkbox.addEventListener('change', function() {
            console.log(checkbox.checked);
            });
        };

                    // document.querySelectorAll('input[name="lapangan"]').forEach((checkbox) => {
                    //     checkbox.addEventListener('change', function() {
                    //         document.querySelectorAll('input[name="lapangan"]').forEach((checkbox) => {
                    //             checkbox.checked = false;
                    //         });
                    //         this.checked = true;
                    //     });
                    // });

        document.querySelectorAll('input[name="kegiatan"]').forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    document.querySelectorAll('input[name="kegiatan"]').forEach((checkbox) => {
                        checkbox.checked = false;
                    });
                    this.checked = true;
                    }
            });
        });

        const toggleDatepicker = document.getElementById('toggleDatepicker');
        const datePickerAkhirRutin = document.getElementById('datePickerAkhirRutin');
        const headerTanggalDipilih = document.getElementById('headerTanggalDipilih');

            toggleDatepicker.addEventListener('change', function() {
            // Jika checkbox dicentang, tampilkan datepicker
            if (this.checked) {
                datePickerAkhirRutin.classList.remove('hidden');
                headerTanggalDipilih.classList.remove('hidden');
                // Di sini Anda dapat memanggil fungsi untuk menampilkan datepicker, misalnya menggunakan Flatpickr atau datepicker lainnya
            } else {
                // Jika checkbox tidak dicentang, sembunyikan datepicker
                datePickerAkhirRutin.classList.add('hidden');
                headerTanggalDipilih.classList.add('hidden');
            }
            });

    </script>

</html>