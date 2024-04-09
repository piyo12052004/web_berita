<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detik | {{ $maintitle }}</title>
    {{-- file css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- boostrap v5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- icon boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="body" >
    <div class="destop">
    @include('partials.navbar')
        <div class="container">
            @yield('content')
        </div>
    @include('partials.footer')
</div>

<div class="app-mobile">
    @include('partials.mobile_navbar')
        <div class="content-app-mobole-main">
            @yield('mobile')
        </div>
    @include('partials.mobile_footer')
</div>

    {{-- file js --}}
    <script src="js/javascript.js"></script>
    {{-- feather icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    {{-- boostrap js v5.3 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- untuk tanggal hari ini --}}
        <script>
            var elemenHari = document.getElementById("hari-ini");
            var elemenTanggal = document.getElementById("tanggal-hari-ini");
            
            var namaHari = [
                "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"
            ];
            var namaBulan = [
                "Jan", "Feb", "Mart", "Apr", "Mei", "Jun",
                "Jul", "Agust", "Sep", "Okt", "Nov", "Des"
            ];

            var tanggalHariIni = new Date();
            var hariIndex = tanggalHariIni.getDay(); // Mendapatkan indeks hari
            var tanggal = tanggalHariIni.getDate();
            var bulanIndex = tanggalHariIni.getMonth(); // Mendapatkan indeks bulan
            var tahun = tanggalHariIni.getFullYear();

            // Menampilkan nama hari dan tanggal dengan nama bulan dalam format "Hari, dd NamaBulan yyyy"
            elemenHari.textContent = namaHari[hariIndex];
            elemenTanggal.textContent = tanggal + " " + namaBulan[bulanIndex] + " " + tahun;
        </script>

        
      
</body>
</html>
