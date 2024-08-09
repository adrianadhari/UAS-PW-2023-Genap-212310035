@extends('main')
@section('content')
    <div class="container-fluid px-5 pb-5">
        {{-- Start Title --}}
        <div class="row text-center pt-5">
            <div class="col-md">
                <h1 class="fw-semibold main-palette">Kontak</h1>
            </div>
        </div>
        {{-- End Title --}}

        {{-- Start Description --}}
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <p class="fw-light fourth-palette">Kami sangat menghargai masukan dan saran dari pengunjung seperti
                    Anda.<br>Jika
                    Anda memiliki pertanyaan,
                    komentar, atau masukan mengenai Kampung
                    Labirin, jangan ragu untuk
                    menghubungi kami dibawah ini.</p>
            </div>
        </div>
        {{-- End Description --}}

        {{-- Start Form --}}
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/kontak" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="form-control @error('nama_lengkap') is-invalid @enderror" required autofocus
                                    id="nama_lengkap" value="{{ old('nama_lengkap') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" required id="email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No. HP</label>
                                <input type="text" name="no_hp"
                                    class="form-control @error('no_hp') is-invalid @enderror" required id="no_hp"
                                    value="{{ old('no_hp') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="domisili" class="form-label">Domisili</label>
                                <input type="text" name="domisili"
                                    class="form-control @error('domisili') is-invalid @enderror" required id="domisili"
                                    value="{{ old('domisili') }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Apa pesanmu?</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" required name="isi" id="pesan" rows="5"
                            value="{{ old('isi') }}" aria-describedby="pesan"></textarea>
                        <div id="pesan" class="form-text">Maksimal 100 kata</div>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success w-100 mb-4">KIRIM</button>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    {{-- End Form --}}
@endsection
