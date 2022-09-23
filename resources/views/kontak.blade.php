@extends('layouts.home-layout')

@section('content')
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="{{ route('kontak.store') }}" id="contact-form"
                          class="contact-form needs-validation"
                          novalidate method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="label">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Nama Lengkap Anda"
                                required
                            />
                            <div class="invalid-feedback">Mohon isi Nama Lengkap Anda!</div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Email Anda"
                                required
                            />
                            <div class="invalid-feedback">Mohon isi Email Anda!</div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="label">Nomor Telepon</label>
                            <input
                                type="tel"
                                class="form-control"
                                name="whatsapp"
                                id="phone"
                                placeholder="Nomor Whatsapp"
                                required
                            />
                            <div class="invalid-feedback">Mohon isi Nomor Telepon Anda!</div>
                        </div>
                        <div class="form-group">
                            <label for="domicile" class="label">Domisili</label>
                            <input
                                type="text"
                                class="form-control"
                                name="city"
                                id="domicile"
                                placeholder="Domisili Anda"
                                required
                            />
                            <div class="invalid-feedback">Mohon isi Domisili Anda!</div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="label">Apa Yang Dapat Kami Bantu?</label>
                            <textarea
                                name="message"
                                id="message"
                                rows="5"
                                class="form-control"
                                placeholder="Tulis apa kebutuhan Anda"
                                required
                            ></textarea>
                            <div class="invalid-feedback">Mohon isi Pesan Anda!</div>
                        </div>
                        <button type="submit" class="btn btn-info w-100 mt-4" id="btn-submit">SUBMIT</button>
                        <small
                            id="form-message"
                            class="mt-5 form-text fs-6 text-center text-danger d-none"
                        >
                            <strong>*Data yang anda masukkan salah, tolong periksa kembali</strong>
                        </small>
                    </form>
                    <div id="form-succeed" class="message d-none">
                        <p>Terima kasih telah menghubungi kami, kami akan segera menghubungi Anda.</p>
                        <span class="message__icon">
                    <img
                        src={{asset("img/icons/check.png")}} 
                        width="128"
                        height="128"
                        alt="check icon"
                    />
                  </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const form = document.getElementById('contact-form');
        document.getElementById("btn-submit").addEventListener("click", function () {
            form.submit();
        });
    </script>
@endsection
