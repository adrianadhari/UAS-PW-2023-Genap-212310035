@extends('main')
@section('content')
    <div class="row m-5 py-5">
        <div class="col-md-6">
            <p class="fw-semibold main-palette" style="font-size: 24px">SELAMAT DATANG DI INKARIN (Informasi Kampung Labirin)
            </p>
            <p class="fw-bold third-palette mt-2" style="font-size: 46px">Temukan beragam kuliner dan<br>atraksi khas budaya
                Sunda di<br>Kampung Labirin</p>
            <p class="fw-light fourth-palette mt-2">Inkarin membantu kamu untuk pemesanan tiket event, reservasi event
                serta<br>menyediakan beragam informasi mengenai kampung wisata di Kampung Labirin.</p>
            <div class="row justify-content-start">
                <div class="col-md-5">
                    <a href="/event" class="btn btn-success" style="width: 280px; height: 45px; padding: 10px 0;">
                        <p class="fw-semibold" style="font-size: 18px">Pesan Tiket Event</p>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="/dashboard/reservasi-event" class="btn btn-outline-success"
                        style="width: 280px; height: 45px; padding: 10px 0;">
                        <p class="fw-semibold" style="font-size: 18px">Reservasi Event</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src="/assets/img/item1.svg" alt="item1">
        </div>
    </div>


    <div class="row justify-content-center text-center" style="margin-top: 280px">
        <div class="col-md-8">
            <p class="main-palette fw-semibold" style="font-size: 24px">KEINDAHAN KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold" style="font-size: 46px">Keberagaman & Budaya Kampung Labirin</p>
            <p class="fourth-palette fw-light" style="font-size: 16px">Nikmati berbagai macam kuliner, dan atraksi khas
                budaya Sunda yang membuat mu<br>jatuh cinta dan menjadikan Kampung Labirin sebagai destinasi kampung wisata.
            </p>
        </div>
    </div>


    <div class="row m-5 py-5">
        <div class="col-md-6 text-center">
            <img src="/assets/img/item2.svg" alt="item2">
        </div>
        <div class="col-md-6">
            <p class="main-palette fw-semibold" style="font-size: 24px">KULINER KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold" style="font-size: 46px">Kelezatan kuliner Kampung Labirin<br>yang memanjakan
                lidahmu<br>dan lezat!</p>
            <p class="fourth-palette fw-light" style="font-size: 16px">Kampung Labirin memiliki banyak ragam kuliner yang
                bisa kalian coba mulai dari minuman,<br>makanan ataupun makanan khas budaya Sunda yang siap mewarnai liburan
                mu dengan kelezatan<br>yang nikmat hanya di Kampung Labirin.</p>
            <a href="/kuliner" class="main-palette fw-semibold text-decoration-none" style="font-size: 24px">Selengkapnya
                <img src="/assets/img/arrow-right.png" width="30px"></a>
        </div>
    </div>


    <div class="row m-5 py-5">
        <div class="col-md-6">
            <p class="main-palette fw-semibold" style="font-size: 24px">ATRAKSI WISATA KAMPUNG LABIRIN</p>
            <p class="third-palette fw-bold" style="font-size: 46px">Siap-siap untuk mengalami<br>petualangan tak terlupakan
                di<br>tengah labirin yang mempesona.</p>
            <p class="fourth-palette fw-light" style="font-size: 16px">Kampung Labirin merupakan atraksi wisata yang
                menawarkan pengalaman unik bagi<br>pengunjungnya. Dengan jaringan jalan yang rumit dan berliku-liku, Anda
                akan merasakan sensasi<br>petualangan seru sambil mengeksplorasi keindahan dan keunikan kampung ini.</p>
            <a href="/atraksi" class="main-palette fw-semibold text-decoration-none" style="font-size: 24px">Selengkapnya
                <img src="/assets/img/arrow-right.png" width="30px"></a>
        </div>
        <div class="col-md-6 text-center">
            <img src="/assets/img/item3.svg" alt="item3">
        </div>
    </div>

    <div class="row justify-content-center text-center" style="margin-top: 280px">
        <div class="col-md-10">
            <p class="main-palette fw-semibold" style="font-size: 24px">LOKASI KAMPUNG LABIRIN</p>
            <p class="fourth-palette fw-light" style="font-size: 16px">Berikut dibawah ini merupakan lokasi Kampung Labirin
                yang bisa anda kunjungi</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3126156628687!2d106.8040126758094!3d-6.60802186459824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58537bfad33%3A0x4de11d57679ee5a4!2sKampung%20Labirin!5e0!3m2!1sid!2sid!4v1686960608399!5m2!1sid!2sid"
                width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
