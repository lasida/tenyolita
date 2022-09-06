@extends('layouts.home-layout')

@section('content')
    <section id="hero" class="bg-gradient--2">
        <div class="container">
            <div class="hero row align-items-center">
                <div class="col-md-6">
                    <div class="hero__caption">
                        <h2><strong>PT. SINTECH BERKAH ABADI</strong></h2>
                        <p><b>IT MAKES EASIER YOUR WORKS</b></p>
                        <a href="/" class="btn btn-primary">Layanan Kami</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero__image">
                        <img src={{asset("img/team.png")}} srcset={{asset("img/team@2x.png")}} alt="team"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
