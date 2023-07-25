@extends('dashboard-user-main')
@section('content')
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th>Nama Event</th>
                        <th>Tanggal Event</th>
                        <th>Jam Event</th>
                        <th>Harga Tiket</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-dark">
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->nama_event }}</td>
                            <td>{{ $event->tanggal_event }}</td>
                            <td>{{ $event->jam_event }}</td>
                            <td>{{ $event->harga_tiket }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
