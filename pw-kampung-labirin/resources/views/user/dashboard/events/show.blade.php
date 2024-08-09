@extends('dashboard-user-main')
@section('content')
    <a href="{{ route('user.events.index') }}" class="btn btn-success my-4">Kembali</a>
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-borderless">
                    <tr>
                        <td>Nama Event</td>
                        <td>:</td>
                        <td>{{ $event->event_name }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Event</td>
                        <td>:</td>
                        <td>{{ $event->event_description }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Event</td>
                        <td>:</td>
                        <td>{{ $event->event_date }}</td>
                    </tr>
                    <tr>
                        <td>Gambar Event</td>
                        <td>:</td>
                        <td><img src="/storage/events/{{ $event->event_image }}" alt="" width="300px"></td>
                    </tr>
                    <tr>
                        <td>Status Event</td>
                        <td>:</td>
                        <td>{{ $event->event_status }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembuatan</td>
                        <td>:</td>
                        <td>{{ $event->created_at }}</td>
                    </tr>
            </table>
        </div>
    </div>
@endsection
