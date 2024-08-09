@extends('main')
@section('content')
<div class="container-fluid px-5">
    <div class="row justify-content-between align-items-center" style="min-height: 80vh">
        <div class="col-md-5">
            <p class="fw-semibold main-palette mb-3 fs-4">SELAMAT DATANG DI INKARIN (Informasi Kampung Labirin)
            </p>
            <h1 class="fw-bold third-palette mb-3 fs-1 text-capitalize lh-base">Temukan beragam kuliner dan<br>atraksi khas budaya
                Sunda di Kampung Labirin</h1>
            <p class="fw-light lh-base fourth-palette mb-4">Inkarin membantu kamu untuk pemesanan tiket event, reservasi event
                serta menyediakan beragam informasi mengenai kampung wisata di Kampung Labirin.</p>
            <div class="row justify-content-start">
                <div class="col-md-5">
                    <a href="/event" class="btn btn-success px-5 py-2 fw-semibold d-inline-block">Pesan Tiket Event</a>
                </div>
                <div class="col-md-5">
                    <a href="/dashboard/reservasi-event" class="btn btn-outline-success px-5 py-2 fw-semibold">Reservasi Event</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/assets/img/item1.svg" alt="item1" class="w-100">
        </div>
    </div>

    <div class="row justify-content-center text-center mb-5" style="margin-top: 280px">
        <div class="col-md-8">
            <p class="main-palette fw-semibold fs-4">KEINDAHAN KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold fs-1">Keberagaman & Budaya Kampung Labirin</p>
            <p class="fourth-palette fw-light">Nikmati berbagai macam kuliner, dan atraksi khas
                budaya Sunda yang membuat mu<br>jatuh cinta dan menjadikan Kampung Labirin sebagai destinasi kampung wisata.
            </p>
        </div>
    </div>

    <div class="row py-5 justify-content-around align-items-center mb-5">
        <div class="col-md-5">
            <img src="/assets/img/item2.svg" alt="item2" class="w-100">
        </div>
        <div class="col-md-5">
            <p class="main-palette fw-semibold fs-4">KULINER KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold fs-1">Kelezatan kuliner Kampung Labirin<br>yang memanjakan
                lidahmu<br>dan lezat!</p>
            <p class="fourth-palette fw-light">Kampung Labirin memiliki banyak ragam kuliner yang bisa kalian coba mulai dari minuman, makanan ataupun makanan khas budaya Sunda yang siap mewarnai liburanmu dengan kelezatan yang nikmat hanya di Kampung Labirin.</p>
            <a href="/kuliner" class="main-palette fw-semibold text-decoration-none fs-4">Selengkapnya
                <img src="/assets/img/arrow-right.png" width="30px"></a>
        </div>
    </div>


    <div class="row py-5 mb-5 justify-content-around align-items-center">
        <div class="col-md-5">
            <p class="main-palette fw-semibold fs-4">ATRAKSI WISATA KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold fs-1">Siap-siap untuk mengalami petualangan tak terlupakan di tengah labirin yang mempesona.</p>
            <p class="fourth-palette fw-light">Kampung Labirin merupakan atraksi wisata yang menawarkan pengalaman unik bagi pengunjungnya. Dengan jaringan jalan yang rumit dan berliku-liku, Anda akan merasakan sensasi petualangan seru sambil mengeksplorasi keindahan dan keunikan kampung ini.</p>
            <a href="/atraksi" class="main-palette fw-semibold text-decoration-none fs-4">Selengkapnya
                <img src="/assets/img/arrow-right.png" width="30px"></a>
        </div>
        <div class="col-md-5 text-center">
            <img src="/assets/img/item3.svg" alt="item3" class="w-100">
        </div>
    </div>

    <div class="row justify-content-center text-center py-5 mb-5">
        <div class="col-md-10">
            <p class="main-palette fw-semibold fs-4">LOKASI KAMPUNG LABIRIN</p>
            <p class="fourth-palette fw-light">Berikut dibawah ini merupakan lokasi Kampung Labirin
                yang bisa anda kunjungi</p>
                <div class="w-100 overflow-hidden">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3126156628687!2d106.8040126758094!3d-6.60802186459824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58537bfad33%3A0x4de11d57679ee5a4!2sKampung%20Labirin!5e0!3m2!1sid!2sid!4v1686960608399!5m2!1sid!2sid"
                    width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
    </div>
</div>
@endsection
