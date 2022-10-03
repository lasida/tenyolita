@extends('layouts.home-layout')

@section('content')
    <section id="services" class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 col-xl-7">
                    <div class="heading text-start">
                        <h2>PELAYANAN<br/>KAMI</h1>
                    </div>
                    <p class="fs-5 text-justify">
                        Kami adalah penyedia solusi perangkat lunak pasar global, memberikan solusi bisnis
                        berteknologi tinggi berbasis layanan untuk para pelanggan yang tersebar di seluruh
                        Indonesia.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-5">
                <img 
                    src={{asset("img/insightful.png")}} 
                    srcset={{asset("img/insightful2x.png")}} 
                    class="w-100" 
                    alt="insightful"/>
                </div>
            </div>
        </div>
        <div id="service" class="service-wrapper">
            <a href="#service" class="more__service">SELENGKAPNYA</a>
            <div  class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="services row g-4 justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item"> 
                                    <img src={{asset("img/icons/information.png")}} alt="information icon"/>
                                    <h5>Teknologi Informasi</h5>
                                    <p>
                                        Rekayasa perangkat lunak, Rekayasa jaringan, Sistem transmisi dasar,
                                        sistem <b>CCTV</b>, Sistem keamanan gedung
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/audit.png")}} alt="audit icon"/>
                                    <h5>Audit TI</h5>
                                    <p>
                                        Tata kelola TI, Keamanan perusahaan, Kontrol dan efektivitas sistem,
                                        Rencana Kesinambungan Bisnis, Analisis Kerentanan Manajemen Proyek TI
                                        dengan melakukan pengujian kerentanan dan penetrasi untuk sistem klien
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/recovery.png")}} alt="recovery icon"/>
                                    <h5>Rencana Pemulihan TIK</h5>
                                    <p>
                                        Komunikasi darurat, rencana pemulihan bencana TI, pengujian berkala,
                                        latihan dan pelatihan
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/project.png")}} alt="project icon"/>
                                    <h5>Manajemen Proyek TI</h5>
                                    <p>
                                        Jaminan kualitas untuk pengembangan sistem, Seleksi Vendor yaitu
                                        <em>ERP, Core-Banking, IFRS,</em> dll, Pembersihan data, pemeriksaan
                                        integritas, dan migrasi Kontrol manajemen perubahan
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/system.png")}} alt="system icon"/>
                                    <h5>Manajemen Sistem TI</h5>
                                    <p>
                                        Memeriksa kontrol terhadap standar <b>ITSM</b> atau <b>ITIL</b>, Membantu
                                        persiapan sertifikasi dan audit ISO 20000
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/control.png")}} alt="control icon"/>
                                    <h5>Kontrol dan Efektivitas Sistem</h5>
                                    <p>
                                        Memeriksa kontrol di luar dan di dalam <b>"Kotak TI"</b>, Tujuan Kontrol
                                        untuk Teknologi Informasi dan terkait <em>(COBIT)</em>, Menyiapkan sistem
                                        pengawasan untuk segera mengurangi kelemahan kontrol
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/governance.png")}} alt="governance icon"/>
                                    <h5>Tata Kelola TI</h5>
                                    <p>
                                        Menetapkan kartu skor TI untuk mendukung tujuan/visi dan strategi bisnis
                                        Menetapkan atau merekayasa ulang proses klien terhadap standar/praktik
                                        terbaik internasional dan lokal.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/training.png")}} alt="training icon"/>
                                    <h5>Pelatihan dan Pengembangan Diri</h5>
                                    <p>
                                        Pengembang & Administrasi Basis Data
                                        <em>(MYSQL, ORACLE, SQL SERVER, POSTGRESS)</em>, Pengembangan Aplikasi
                                        <em>(PHP, JAVA SCRIPT, ASP, PYTHON, C++)</em>, Analis Sistem & Alat
                                        Desain, Sistem Operasi, Teknologi Jaringan Pengembang Web, Linux,
                                        Pelatihan Eksekutif, Mikro Controller
                                        <em>(MCS-51, AVR, ARDUINO, RASPBERRY Pi)</em> Bahasa Assembly, Bahasa C,
                                        Bahasa Basic Compiler
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/communication.png")}} alt="communication icon"/>
                                    <h5>Data Komunikasi</h5>
                                    <p>
                                        Menghubungkan kantor perusahaan dengan cabangnya termasuk koneksi ke
                                        Internet, Menyediakan komunikasi data dengan teknologi
                                        <em>Frame Relay / VPN</em>
                                        atau dengan DVB
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/lan.png")}} alt="lan icon"/>
                                    <h5>Instalasi LAN/WAN</h5>
                                    <p>
                                        Layanan ini mencakup pengkabelan dan konfigurasi perangkat keras aktif
                                        sebagai router dan switch <em>(CISCO)</em>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/robotic.png")}} alt="robotic icon"/>
                                    <h5>Robotika</h5>
                                    <p>
                                        Micro Controller <em>(MCS-51, AVR, ARDUINO, RASPBERRY Pi)</em> Bahasa
                                        Assembly, Bahasa C, Bahasa Basic Compiler
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/cart.png")}} alt="cart icon"/>
                                    <h5>Open-Source Shopping Cart</h5>
                                    <p>
                                        Layanan ini berguna sebagai platform e-niaga sumber terbuka yang
                                        memungkinkan penjualan dan pembelian produk <em>online</em>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/network.png")}} alt="network icon"/>
                                    <h5>Instalasi Jaringan</h5>
                                    <p>
                                        Penerapan & konfigurasi hardware seperti router and switch
                                        <em>(cisco, Mikrotik)</em>, Perencanaan dan Pengembangan infrastruktur
                                        jaringan dengan Kabel data berbasis Kabel Konvesional (Kabel Pair, Multi
                                        pair) maupun Kabel Serat <em>Optics</em>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service__item">
                                    <img src={{asset("img/icons/agent.png")}} alt="agent icon"/>
                                    <h5>Agen Properti</h5>
                                    <p>
                                        Membantu masyarakat dalam hal jual-beli-sewa properti
                                        <em>(problem solving)</em>
                                        dengan harga yang wajar dan waktu seefisien mungkin sehingga memuaskan
                                        kedua belah pihak (penjual serta pembeli atau penyewa), Mempercepat proses
                                        transaksi atau sebagai katalisator.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection