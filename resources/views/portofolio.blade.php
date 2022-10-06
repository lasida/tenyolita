
@extends('layouts.home-layout')

@section('content')
    <section id="portfolio" class="bg-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="heading">
                        <h1>PROYEK KAMI</h1>
                    </div>
                    <div class="text-center">
                        <p class="fs-5 mb-4">
                            Portfolio Kami, Aplikasi Sasaran Kinerja Pegawai <b>(SKP)</b> Online, Sistem
                            Informasi Manajemen Kepegawaian <b>(SIMPEG)</b>, Aplikasi Arsip Pariwisata, Jasa
                            Pembuatan Aplikasi Sistem Informasi, Aplikasi E-Goverment, Pengarsipan, Sistem
                            Pendaftaran Online <b>(PMB)</b>.
                        </p>
                        <a href="#projects" class="btn btn-primary rounded-pill">Lihat Semua Proyek</a>
                    </div>
                </div>
            </div>
            <div id="projects" class="projects">
                <div class="project__item">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <img
                            src={{asset("img/projects/1.png")}} 
                            srcset={{asset("img/projects/1@2x.png")}}
                            alt="app lavon swancity"
                            />
                        </div>
                        <div class="col-md-6">
                            <div class="desc">
                                <h4>APP LAVON SWANCITY</h4>
                                <p>
                                    SIM Member, Transaksi Fasilitas, Transaksi Tenant, Tukar Poin, History
                                    Transaksi Poin
                                </p>
                                <!-- <a href="/" class="btn btn-outline-primary">Detail</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project__item">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <img
                            src={{asset("img/projects/2.png")}} 
                            srcset={{asset("img/projects/2@2x.png")}}
                            alt="app lavon swancity"
                            />
                        </div>
                        <div class="col-md-6">
                            <div class="desc">
                                <h4>APLIKASI KTB NEW FLAT RATE SYSTEM</h4>
                                <p>PT. Krama Yudha Tiga Berlian Motors</p>
                                <a href="#" class="btn btn-outline-primary detail-image">Detail</a>
                                <p class="imglist" style="display:none">
                                    <a href="{{asset("img/ktb/01.jpg")}}" id="aplikasi-ktb" data-fancybox="group" data-caption="Halaman Pendahuluan">
                                    <img src="{{asset("img/ktb/01.jpg")}}" />
                                    </a>
                                    
                                    <a href="{{asset("img/ktb/02.jpg")}}" data-fancybox="group" data-caption="Halaman Model dan Spesifikasi">
                                    <img src="{{asset("img/ktb/02.jpg")}}" />
                                    </a>
                                    
                                    <a href="{{asset("img/ktb/03.jpg")}}" data-fancybox="group" data-caption="Halaman Petunjuk Penggunaan Manual">
                                    <img src="{{asset("img/ktb/03.jpg")}}" />
                                    </a>
                                    
                                    <a href="{{asset("img/ktb/04.jpg")}}" data-fancybox="group" data-caption="Halaman Operasi">
                                    <img src="{{asset("img/ktb/04.jpg")}}" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div id="pagination-container"></div>
        </div>
    </section>
  

<script type="text/javascript">
    jQuery('[data-fancybox]').fancybox({
  // Options will go here
  buttons : [
    'close'
  ],
  wheel : false,
  transitionEffect: "slide",
   // thumbs          : false,
  // hash            : false,
  loop            : true,
  // keyboard        : true,
  toolbar         : false,
  // animationEffect : false,
  // arrows          : true,
  clickContent    : false
});

   jQuery('.detail-image').click(function ( e ) {
    e.preventDefault;
    jQuery("#aplikasi-ktb").trigger("click");
});
</script>

@endsection
