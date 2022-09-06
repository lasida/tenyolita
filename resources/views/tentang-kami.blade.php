@extends('layouts.home-layout')

@section('content')
   
<section id="about-us" class="pb-0">
        <div class="container">
            <div class="goals row g-0">
                <div class="col-md-3">
                    <div class="goal__desc">
                        <h3>Misi Kami</h3>
                        <p>
                            “Menghasilkan produk dan jasa Teknologi Informasi yang memudahkan pekerjaan dan
                            aktivitas Anda”
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="goal__image">
                        <img src={{asset("img/goal.png")}} srcset={{asset("img/goal@2x.png")}} alt="goal"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="goal__desc">
                        <h3>Visi Kami</h3>
                        <p>
                            “Kami Menghasilkan Produk dan Jasa Teknologi Informasi yang memudahkan pekerjaan
                            dan aktivitas Anda”
                        </p>
                    </div>
                </div>
            </div>
            <div class="heading bottom--line">
                <h3>KELEBIHAN KAMI</h3>
            </div>
            <div class="advantage row">
                <div class="col-md-6">
                    <div class="advantage__item">
                        <img
                            src={{asset("img/advantages/1.png")}} 
                            srcset={{asset("img/advantages/1@2x.png")}}
                            alt="integrasi tinggi"
                        />
                        <h4>Integrasi Tinggi</h4>
                        <p>
                            kami mudah bekerjasama dan memahami keinginan klien. Dukungan Team Yang
                            Profesional, serta layanan klien 24/7.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="advantage__item">
                        <img
                            src={{asset("img/advantages/2.png")}} 
                            srcset={{asset("img/advantages/2@2x.png")}}
                                alt="respon cepat"
                        />
                        <h4>Respon Cepat</h4>
                        <p>
                            Sangat cepat untuk memberikan respon kebutuhan klien kami. Tentu anda akan di
                            layani oleh team yang profesional dan berpegalaman pada bidangnya.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="advantage__item">
                        <img
                            src={{asset("img/advantages/3.png")}} 
                            srcset={{asset("img/advantages/3@2x.png")}}
                            alt="efisien dan murah"
                        />
                        <h4>Efisien dan Murah</h4>
                        <p>
                            Memberikan kemudahan anda secara personal ataupun perusahaan untuk mengelola
                            bisnis anda, dengan teknologi yang akan kami berikan, tentunya dengan harga yang
                            murah.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="advantage__item">
                        <img
                            src={{asset("img/advantages/4.png")}} 
                            srcset={{asset("img/advantages/4@2x.png")}}
                            alt="pengetahuan lengkap"
                        />
                        <h4>Pengetahuan Lengkap</h4>
                        <p>
                            Memberkan konsultansi kepada kebutuhan IT perusahaan anda, sehingga anda dapat
                            membrikan keputusan yang tepat mengenai kebutuhan teknologi perusahaan anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="cta-contact">
                <h2>
                    Komitmen Kami Memberikan Yang Terbaik
                    <span>Kami Perusahaan Pertama Yang Memberikan Layanan Terpadu Pada Teknologi</span>
                </h2>
                <a href="/" class="btn btn-outline-light">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <section id="teams" class="p-0">
        <div class="container">
            <div class="team-wrapper">
                <div class="team row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-8 align-self-center">
                        <div class="heading mb-0">
                            <h1>TIM KAMI</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                                src={{asset("img/teams/1.png")}}
                                srcset={{asset("img/teams/1@2x.png")}}
                                alt="yasin"
                            />
                            <div class="desc">
                                <h4>Yasin, S.Kom, M.kom / Direktur, System Analyst</h4>
                                <p>
                                    Fluent in Bussiness Analys / System Analys and Network Management, MYSQL,
                                    SQL Server, Postgress SQL, Mongo DB, Maria DB, Oracle
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                                src={{asset("img/teams/2.png")}}
                                srcset={{asset("img/teams/2@2x.png")}}
                                alt="eka rahmat"
                            />
                            <div class="desc">
                                <h4>Eka Rahmat Hidayat, S.Kom / Engineering technical Support</h4>
                                <p>
                                    Troubleshooting IT, Preventive Maintenance User,Monitoring server CCTV,
                                    Setting Router, Trobleshoting Jaringan, Seting Mikrotik wireless Outdor
                                    sebagai PTP client
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/3.png")}}
                                srcset={{asset("img/teams/3@2x.png")}}
                                alt="firmansyah"
                            />
                            <div class="desc">
                                <h4>Moch. Firmansyah, S.Kom / Programmer, Engineering</h4>
                                <p>
                                    Controlling Automation Consultant for Student which was done Final Years
                                    Project, especially using Microcontroller and computer base Interfacing.
                                    Electronics Designer ( Embedded System, Data Acquisi)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/4.png")}}
                                srcset={{asset("img/teams/4@2x.png")}}
                                alt="dandi"
                            />
                            <div class="desc">
                                <h4>Dandi Kurnadi / Network Engineer</h4>
                                <p>
                                    Network Instalation, Network Planning, Instalation FO, Instalation Wireless,
                                    OSP, Survey, Mechanical Electrical, SITAC, Project Manajement, Material
                                    Manajement, Project
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                                src={{asset("img/teams/5.png")}}
                                srcset={{asset("img/teams/5@2x.png")}}
                                alt="musthofa"
                            />
                            <div class="desc">
                                <h4>Musthofa, S.HI, M.Hum / Komisaris / Lawyer</h4>
                                <p>Lawyer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/6.png")}}
                                srcset={{asset("img/teams/6@2x.png")}}
                                alt="arief"
                            />
                            <div class="desc">
                                <h4>Arief Rantau, S.Kom / Programmer</h4>
                                <p>PHP Native, Framework Code Igniter, Database Mysq</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/7.png")}}
                                srcset={{asset("img/teams/7@2x.png")}}
                                alt="mradipto"
                            />
                            <div class="desc">
                                <h4>Mradipto Notosapoetro / Development Assistant Manager</h4>
                                <p>Development Assistant Manager, Manage and monitor the daily operation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                                src={{asset("img/teams/8.png")}}
                                srcset={{asset("img/teams/8@2x.png")}}
                                alt="jeffry"
                            />
                            <div class="desc">
                                <h4>Jeffry Alexander / Digital Marketing</h4>
                                <p>Merketing Plan Online, Konten Website, Promosi via Sosial Media</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/9.png")}}
                                srcset={{asset("img/teams/9@2x.png")}}
                                alt="yunus"
                            />
                            <div class="desc">
                                <h4>Yunus Taufan / Executive Marketing</h4>
                                <p>
                                    Executive Marketing, Cisco Networking Academy · COBIT · Drupal · Phalcon
                                    PHP, Mobile Project for E-payment, Coal Information System
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team__item">
                            <img
                            src={{asset("img/teams/10.png")}}
                                srcset={{asset("img/teams/10@2x.png")}}
                                alt="fathur"
                            />
                            <div class="desc">
                                <h4>Fathur Rohman / Administration Keuangan</h4>
                                <p>Administrasi Keuangan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="heading bottom--line">
                <h3>KLIEN KAMI</h3>
            </div>
            <div class="client">
                <img src={{asset("img/clients.png")}} 
                srcset={{asset("img/clients@2x.png")}} 
                alt="clients"/>
            </div>
        </div>
    </section>
@endsection
