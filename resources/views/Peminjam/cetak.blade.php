<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        padding: 16px;
        margin: 32px auto;
        max-width: 800px;
    }
    .card {
        padding: 16px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        margin-bottom: 16px;
    }
    .form-header {
        border-bottom: 8px solid rgba(0, 0, 0, 0.4);
        padding-bottom: 8px;
        margin-bottom: 16px;
    }
    .form-header h2 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1a202c;
        text-align: center;
    }
    table {
        width: 100%;
        margin-bottom: 16px;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px 16px;
        border: 1px solid #e2e8f0;
        font-weight: bold;
        color: #4a5568;
        text-align: left;
    }
    th {
        width: 30%;
    }
    td {
        background-color: #edf2f7;
        width: 70%;
    }
    .attention {
        border-top: 2px solid rgba(0, 0, 0, 0.1);
        padding-top: 24px;
        margin-top: 24px;
    }
    .attention h2 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 8px;
    }
    .attention p {
        font-size: 1rem;
        color: #4a5568;
    }
    .signature-container {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
    }
    .signature {
        text-align: center;
        width: 35%;
    }
    .signature .signature-line {
        border-top: 1px solid #000;
        margin-top: 60px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="form-header">
            <h2>FORMULIR PEMINJAMAN GOR SAMAPTA</h2>
        </div>

        @isset($dataFormCetak)
        <table>
            <tr>
                <th>Organisasi</th>
                <td>: {{ $dataFormCetak -> nama_organisasi }}</td>
            </tr>
            <tr>
                <th>Penanggung Jawab</th>
                <td>: {{ $dataFormCetak -> nama_pj }}</td>
            </tr>
            <tr>
                <th>No Telp/WA</th>
                <td>: 0{{ $dataFormCetak -> no_telp }}</td>
            </tr>
            <tr>
                <th>Kategori Kegiatan</th>
                <td>: {{ $dataFormCetak -> kat_kegiatan }}</td>
            </tr>
            <tr>
                <th>Nama Kegiatan</th>
                <td>: {{ $dataFormCetak -> nama_kegiatan }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>: {{ $dataFormCetak -> tanggal }} {{ $dataFormCetak -> tanggalRutin ? ' dan ' . $dataFormCetak -> tanggalRutin : '' }}</td>
            </tr>
            <tr>
                <th>Hari</th>
                <td>: {{ $dataFormCetak -> hari }} {{ $dataFormCetak -> hariRutin ? ' dan ' . $dataFormCetak -> hariRutin : '' }}</td>
            </tr>
            <tr>
                <th>Jam</th>
                <td>: {{ $dataFormCetak -> slot }} {{ $dataFormCetak -> slotRutin ? ' dan ' . $dataFormCetak -> slotRutin : '' }}</td>
            </tr>
            <tr>
                <th>Lapangan</th>
                <td>: {{ $dataFormCetak -> lapangan }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>: 
                @if( $dataFormCetak -> status == 1)
                Menunggu Disetujui
                @elseif($dataFormCetak -> status == 2)
                Disetujui
                @else
                Ditolak
                @endif
                </td>
            </tr>
            <tr>
                <th>Catatan</th>
                <td>: {{ $dataFormCetak -> catatan }}</td>
            </tr>
        </table>

        <div class="signature-container">
            <!-- <div class="signature">
                <div>Tanda Tangan Penanggung Jawab</div>
                <div class="signature-line"> {{ $dataFormCetak -> nama_pj }} </div>
            </div> -->
            <div class="signature">
                <div>TTD Biro 3</div>
                <div class="signature-line"></div>
            </div>
        </div>
        
        <div class="attention">
            <h2>Perhatian</h2>
            <p>Jika Sudah Disetujui silahkan print kemudian berikan kepada biro 3 sebagai tiket dalam meminjam gor.</p>
        </div>
        @endisset
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</body>
</html>