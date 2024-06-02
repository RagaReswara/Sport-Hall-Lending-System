<!doctype html><html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('../resources/css/app.css')
  @yield('link')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>

    @include('Peminjam.navbar')
    @yield('content')

    <script>
    
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

    

    </script>

</body>


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

<!-- SCRIPT -->
    @yield('script')

</html>