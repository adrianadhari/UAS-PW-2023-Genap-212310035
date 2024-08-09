@extends('dashboard-user-main')
@section('content')
    <a href="{{ route('user.events.create') }}" class="btn btn-success my-4">Reservasi Event</a>
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th>Nama Event</th>
                        <th>Tanggal Event</th>
                        <th>Gambar Event</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->event_name }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td><img src="/storage/events/{{ $event->event_image }}" alt="Gambar Event"
                                    class="img-thumbnail" width="200px">
                            </td>
                            <td>{{ $event->event_status }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <a href="{{ route('user.events.show', $event->id) }}"
                                        class="bg-primary text-white badge text-decoration-none p-2"><i
                                            class="fa-regular fa-eye me-1"></i> View</a>
                                    <a href="{{ route('user.events.edit', $event->id) }}"
                                        class="bg-warning text-white badge text-decoration-none p-2"><i
                                            class="fa-regular fa-pen-to-square me-1"></i>
                                        Edit</a>
                                    <form action="{{ route('user.events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger border-0 p-2 text-white"><i
                                                class="fa-regular fa-trash-can me-2"></i>Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
