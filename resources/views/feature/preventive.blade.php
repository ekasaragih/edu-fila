@extends('layout')
@include('utils.layout.navbar')

@section('content')
<style>
    .booklet-container {
        width: 1100px;
        margin: 20px auto;
        overflow: hidden;
        border: 2px solid #ddd;
        border-radius: 8px;
        background-color: #f4f4f4;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        height: 600px;
    }

    /* Adjust for smaller screen sizes */
    @media (max-width: 768px) {
        .booklet-container {
            width: 100%;
            height: auto;
            padding: 10px;
            box-sizing: border-box;
        }
    }

    .booklet-content {
        width: 100%;
        height: 100%;
        overflow-y: auto;
        padding: 20px;
        box-sizing: border-box;
    }

    .leaflet-container {
        width: 1100px;
        margin: 20px auto;
        overflow: hidden;
        /* Hide overflow outside of container */
        border: 2px solid #ddd;
        border-radius: 8px;
        background-color: #f4f4f4;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        height: 600px;
    }

    @media (max-width: 768px) {
        .leaflet-container {
            width: 100%;
            height: auto;
            padding: 10px;
            box-sizing: border-box;
        }
    }

    .leaflet-content {
        width: 100%;
        height: 100%;
        overflow-y: auto;
        padding: 20px;
        box-sizing: border-box;
    }

    .page {
        width: 100%;
        background-color: white;
        margin: 20px 0;
        /* Add space between pages */
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-sizing: border-box;
    }

    .header,
    .footer {
        text-align: center;
        font-size: 14px;
        color: #666;
    }

    .content {
        font-size: 16px;
        line-height: 1.6;
        overflow-wrap: break-word;
        /* Prevent text overflow */
    }

    .table-of-contents {
        padding: 20px;
        background-color: #e1e1e1;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    .toc-item {
        margin: 5px 0;
    }
</style>

<div style="margin-top: 5em;">

    <div class="container py-2">
        <h2 class="display-5 fw-bold text-dark">Preventive</h2>
    </div>

    <main>

        <div class="container mt-4">

            <ul class="nav nav-tabs" id="preventTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="bookletTabLink" data-toggle="tab"
                        href="#bookletTabContent">Booklet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="leafletTabLink" data-toggle="tab" href="#leafletTabContent">Leaflet</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content mt-3" id="preventTabsContent">

                <!-- Booklet -->
                <div class="tab-pane fade show active" id="bookletTabContent">
                    <div class="booklet-container mt-4">
                        <div class="booklet-content">

                            <!-- Title -->
                            <div class="page">
                                <div class="content">
                                    <center>
                                        <h2><b>PENYAKIT FILARIASIS</b></h2>
                                        <h3>(KAKI GAJAH)</h3>
                                    </center>
                                </div>
                            </div>

                            <!-- Table of Contents -->
                            <div class="table-of-contents">
                                <h2>Pembahasan</h2>
                                <div class="toc-item"><a href="#page1">Defisini</a></div>
                                <div class="toc-item"><a href="#page2">Tanda dan Gejala</a></div>
                                <div class="toc-item"><a href="#page3">Penyebab</a></div>
                                <div class="toc-item"><a href="#page4">Proses Penyakit</a></div>
                                <div class="toc-item"><a href="#page5">Komplikasi</a></div>
                                <div class="toc-item"><a href="#page6">Pencegahan</a></div>
                                <div class="toc-item"><a href="#page7">Fasilitas Pelayan Kesehatan</a></div>
                                <div class="toc-item"><a href="#page8">Manfaat Fasilitas Kesehatan</a></div>
                            </div>

                            <!-- Page 1 -->
                            <div id="page1" class="page">
                                <div class="content">
                                    <h3>Definisi</h3>
                                    <p>
                                        Filariasis merupakan infeksi
                                        menular yang disebabkan oleh
                                        cacing filaria. Penyakit ini
                                        dapat tertular melalui
                                        perantara berbagai jenis
                                        nyamuk yang bersifat
                                        menahun dan bila tidak
                                        ditangani dengan baik dapat
                                        menyebabkan kecacatan
                                    </p>
                                </div>
                            </div>

                            <!-- Page 2 -->
                            <div id="page2" class="page">
                                <div class="content">
                                    <h3>Tanda dan Gejala</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/demam.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Demam</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/pusing.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Sakit Kepala</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/dingin.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Kedinginan</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/bengkak.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Pembengkakan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page 3 -->
                            <div id="page3" class="page">
                                <div class="content">
                                    <h3>Penyebab</h3>
                                    <p>Penyakit kaki gajah
                                        atau filariasis disebabkan
                                        oleh infeksi
                                        cacing jenis filaria pada
                                        pembuluh getah bening.
                                        Cacing ini dapat menular dari
                                        satu orang ke orang lain
                                        melalui gigitan nyamuk.
                                        disebabkan oleh tiga spesies
                                        cacing Filaria, yaitu Wucheria
                                        bancrofti, Brugia malayi, dan
                                        Brugia timori, yang ditularkan
                                        dengan perantaraan nyamuk
                                        sebagai vektornya.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/nyamuk.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/penyebabfil_2.png') }}"
                                                    class="mx-auto d-block" width="100" height="100" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/penyebabfil_3.png') }}"
                                                    class="mx-auto d-block" width="100" height="100" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page 4 -->
                            <div id="page4" class="page">
                                <div class="content">
                                    <h3>Proses Penyakit</h3>
                                    <p>Penularan filariasis dapat terjadi
                                        bila ada tiga unsur yaitu : adanya
                                        sumber penular seperti manusia yang
                                        mengandung mikrofilaria dalam
                                        darahnya, adanya vektor penularan
                                        filariasis, dan manusia yang rentan
                                        filariasis.

                                        Seseorang dapat tertular filariasis
                                        apabila telah mendapatkan gigitan
                                        nyamuk infektif yang mengandung
                                        larva infektif yang akan masuk melalui
                                        luka bekas gigitan nyamuk dan
                                        bergerak menuju sistem limfe tumbuh
                                        menjadi cacing dewasa, dan
                                        berkembangbiak menghasilkan
                                        mikrofilaria baru sehingga bertambah
                                        banyak.

                                        Kumpulan cacing filaria dewasa
                                        ini menjadi penyebab penyumbatan
                                        pembuluh limfe. Aliran sekresi kelenjar
                                        limfe menjadi terhambat dan
                                        menumpuk di suatu lokasi. Akibatnya
                                    </p>

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Filariasis_01.png"
                                        class="mx-auto d-block" width="300" height="240" />

                                </div>
                            </div>

                            <!-- Page 5 -->
                            <div id="page5" class="page">
                                <div class="content">
                                    <h3>Kompilkasi</h3>
                                    <p>Komplikasi yang paling umum dari
                                        kaki gajah adalah
                                        ketidakmampuan untuk
                                        melakukan aktivitas, seperti
                                        biasanya karena pembengkakan
                                        yang ekstrem. Contohnya, rasa
                                        sakit dan bengkak ini akan
                                        membuat pengidapnya sulit
                                        melakukan pekerjaan sehari-hari.
                                    </p>
                                </div>
                            </div>

                            <!-- Page 6 -->
                            <div id="page6" class="page">
                                <div class="content">
                                    <h3>Pencegahan</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/kelambu.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai Kelambu</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menyemprot.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menggunakan racun nyamuk</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/ventilasi.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menggunakan penutup ventilasi</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/lotionnyamuk.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai lotion anti nyamuk</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/baju_panjang.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai pakaian panjang</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/baju_gelap.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Tidak memakai pakaian berwarna gelap</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <p><b>Dari semua cara diatas,
                                            pencegahan yang paling efektif
                                            tentu saja dengan
                                            memberantas nyamuk itu
                                            sendiri dengan cara 5M yaitu :
                                        </b>
                                    </p>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menguras.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menguras</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menutup.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menutup</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menabur.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menaburkan abate</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/ikancupang.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memelihara ikan cupang</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/mengubur.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Mengubur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page 7 -->
                            <div id="page7" class="page">
                                <div class="content">
                                    <h3>Fasilitas Pelayanan Kesehatan</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/rumahsakit.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Rumah Sakit</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/dokter.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Dokter Praktek/Klinik</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/puskesmas.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Puskesmas</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/perawat.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Perawat/Petugas Kes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page 8 -->
                            <div id="page8" class="page">
                                <div class="content">
                                    <h3>Manfaat Fasilitas Kesehatan</h3>
                                    <ul>
                                        <li>Tempat Berobat</li>
                                        <li>Tempat Konsultasi</li>
                                        <li>Tempat Periksa Kesehatan</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Leaflet -->
                <div class="tab-pane fade" id="leafletTabContent">
                    <div class="leaflet-container mt-4">
                        <div class="leaflet-content">

                            <!-- Title -->
                            <div class="page">
                                <div class="content">
                                    <center>
                                        <h2><b>PENCEGAHAN PENULARAN FILARIASIS</b></h2>
                                    </center>
                                </div>
                            </div>

                            <div class="page">
                                <div class="content">
                                    <h3>APA ITU FILARIASIS?</h3>
                                    <p>
                                        Penyakit infeksi yang disebabkan oleh cacing
                                        filaria yang hidup di kelenjar getah bening dan
                                        ditularkan oleh semua jenis Nyamuk.
                                    </p>
                                </div>
                            </div>

                            <div class="page">
                                <div class="content">
                                    <h3>APA PENYEBAB FILARIASIS?</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/penyebabfil_4.png') }}"
                                                    class="mx-auto d-block" width="100" height="100" />
                                                <p class="mt-2">Cacing Wucheria Bancrofti</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/penyebabfil_2.png') }}"
                                                    class="mx-auto d-block" width="100" height="100" />
                                                <p class="mt-2">Cacing Vrugia Timori</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/penyebabfil_3.png') }}"
                                                    class="mx-auto d-block" width="100" height="100" />
                                                <p class="mt-2">Cacing Brugia Malayi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page">
                                <div class="content">
                                    <h3>GEJALA FILARIASIS</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div>
                                                <img src="{{ asset('asset/demam.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Gejala Akut:</p>
                                                <ul>
                                                    <li>Demam, dalam 3-4 hari</li>
                                                    <li>Meriang tubuh terasa menggigil</li>
                                                    <li>Sakit Kepala</li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <img src="{{ asset('asset/bengkak.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Gejala Kronis:</p>
                                                <ul>
                                                    <li>Pembengkakan Kelenjar Getah Bening</li>
                                                    <li>Rasa Panas yang menjalas dari pangkal paha ke ujung kaki</li>
                                                    <li>Kelenjar getah bening bengkak dan pecah</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page">
                                <div class="content">
                                    <h3>PENCEGAHAN</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/kelambu.jpg') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai Kelambu</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menyemprot.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menggunakan racun nyamuk</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menutup.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menggunakan penutup ventilasi</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/lotionnyamuk.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai lotion anti nyamuk</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/baju_panjang.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memakai pakaian panjang</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/baju_gelap.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Tidak memakai pakaian berwarna gelap</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <p><b>5M yaitu :
                                        </b>
                                    </p>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menguras.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menguras</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menutup.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menutup</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/menabur.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Menaburkan abate</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/ikancupang.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Memelihara ikan cupang</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/mengubur.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Mengubur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page">
                                <div class="content">
                                    <h3>FASILITAS PELAYANAN KESEHATAN</h3>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/rumahsakit.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Rumah Sakit</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/dokter.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Dokter Praktet/Klinik</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                <img src="{{ asset('asset/puskesmas.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Puskesmas</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('asset/perawat.png') }}" class="mx-auto d-block"
                                                    width="100" height="100" />
                                                <p class="mt-2">Perawat/Petugas Kes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Button Section: Display based on admin status -->
    <div class="container mb-4 text-left">
        @if (Auth::guard('admin')->check())
        <!-- Check if admin is logged in -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger px-4 py-2" style="font-size: 14px;">
                Keluar dari Akun Admin
            </button>
        </form>
        @else
        <a href="{{ route('admin.login') }}" class="btn btn-outline-warning px-4 py-2" style="font-size: 14px;">
            Masuk sebagai Admin
        </a>
        @endif
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
            // Get all the tab links and tab panes with unique selectors
            const tabLinks = document.querySelectorAll('#preventTabs .nav-link');
            const tabPanes = document.querySelectorAll('#preventTabsContent .tab-pane');

            // Function to handle tab switching
            function switchTab(event) {
                event.preventDefault(); // Prevent default link behavior

                // Remove 'active' class from all tab links and tab panes
                tabLinks.forEach(link => link.classList.remove('active'));
                tabPanes.forEach(pane => pane.classList.remove('show', 'active'));

                // Add 'active' class to the clicked tab link and corresponding tab pane
                const targetTab = document.querySelector(event.target.getAttribute('href'));
                event.target.classList.add('active');
                targetTab.classList.add('show', 'active');
            }

            // Attach event listeners to each tab link
            tabLinks.forEach(link => {
                link.addEventListener('click', switchTab);
            });
        });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection