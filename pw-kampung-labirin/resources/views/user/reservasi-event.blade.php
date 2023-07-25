@extends('dashboard-user-main')
@section('content')
    <div class="row">
        <div class="col-xl-8 shadow-sm border border-light-subtle p-4 rounded bg-white">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{--  --}}
            <div class="row">
                <form action="/dashboard/reservasi-event" method="POST">
                    @csrf
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="nama_event">Nama Event</label>
                        <input type="text" name="nama_event"
                            class="form-control @error('nama_event') is-invalid @enderror" id="nama_event">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="deskripsi_event">Deskripsi Event</label>
                        <textarea class="form-control @error('nama_event') is-invalid @enderror" id="deskripsi_event" rows="5"
                            name="deskripsi_event"></textarea>
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="gambar_event">Unggah Gambar Event</label>
                        <input type="file" name="gambar_event"
                            class="form-control @error('gambar_event') is-invalid @enderror" id="gambarInput">
                        <img id="gambarTampil" style="max-width: 300px; max-height: 300px;">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="tanggal_event">Tanggal Event</label>
                        <input type="date" name="tanggal_event"
                            class="form-control @error('tanggal_event') is-invalid @enderror" id="tanggal_event">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="jam_event">Jam Event</label>
                        <input type="time" name="jam_event" class="form-control @error('jam_event') is-invalid @enderror"
                            id="jam_event">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="harga_tiket">Harga Tiket</label>
                        <input type="text" name="harga_tiket"
                            class="form-control @error('harga_tiket') is-invalid @enderror" id="harga_tiket">
                    </div>
                    <div class="col-xl-8 mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Buat Reservasi Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Ambil elemen input file dan img
        // Event listener ketika input file berubah
        gambarInput.addEventListener('change', function() {
            // Ambil file yang dipilih
            var file = this.files[0];

            // Buat objek FileReader
            var reader = new FileReader();

            // Setelah file dibaca
            reader.onload = function(e) {
                // Ganti atribut src dari img dengan data URL gambar
                gambarTampil.src = e.target.result;

                // Tampilkan img
                gambarTampil.style.display = 'block';
                gambarInput.style.marginBottom = '15px';
                // Tambahkan class img-thumbnail pada img
                gambarTampil.classList.add('img-thumbnail');
            }

            // Baca file sebagai URL data gambar
            reader.readAsDataURL(file);
        });
    </script>
@endsection
