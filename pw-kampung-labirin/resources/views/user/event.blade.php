@extends('main')
@section('content')
    <a href="/event" class="text-decoration-none text-white btn btn-primary mb-3" style="margin-left: 160px">Kembali</a>
    <div class="row p-3 justify-content-center">
        <div class="col-md-10">
            <h1 style="color: #44494C" class="fw-semibold">{{ $event->nama_event }}</h1>
            <p>oleh <span style="color: #A4BE7B">{{ $event->user->nama_event_organizer }}</span></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <img src="https://picsum.photos/743/450" class="img-thumbnail rounded-5">
        </div>
        <div class="col-md-5">
            <p>Tanggal : {{ $event->tanggal_event }}</p>
            <p>Jam : {{ $event->jam_event }}</p>
            <p>Deskripsi Event : {{ $event->deskripsi_event }}</p>
            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
@endsection
