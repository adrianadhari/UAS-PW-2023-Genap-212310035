@extends('dashboard-admin-main')
@section('content')
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th>Nama Event Organizer</th>
                        <th>Nama Event</th>
                        <th>Tanggal Event</th>
                        <th>Jam Event</th>
                        <th>Harga Tiket</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-dark">
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->user->nama_event_organizer }}</td>
                            <td>{{ $event->nama_event }}</td>
                            <td>{{ $event->tanggal_event }}</td>
                            <td>{{ $event->jam_event }}</td>
                            <td>{{ $event->harga_tiket }}</td>
                            <td class="text-center"><a href="/admin/kelola-event/{{ $event->user->id }}"
                                    class="badge bg-warning m-1"><img src="/assets/img/eye.png" width="20px"></a>
                                <a href="/admin/kelola-event/{{ $event->user->id }}" class="badge bg-success m-1"><img
                                        src="/assets/img/checklist.png" width="20px"></a>
                                <a href="/admin/kelola-event/{{ $event->user->id }}" class="badge bg-danger m-1"><img
                                        src="/assets/img/trash.png" width="20px"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
