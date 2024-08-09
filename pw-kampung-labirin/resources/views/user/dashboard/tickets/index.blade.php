@extends('dashboard-user-main')
@section('content')
    <a href="{{ route('user.tickets.create') }}" class="btn btn-success my-4">Buat Tiket</a>
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th>Nama Event</th>
                        <th>Nama Tiket</th>
                        <th>Harga Tiket</th>
                        <th>Jumlah Tiket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->event->event_name }}</td>
                            <td>{{ $ticket->ticket_name }}</td>
                            <td>Rp. {{ $ticket->ticket_price }}</td>
                            <td>{{ $ticket->ticket_quantity }} Tiket</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <a href="{{ route('user.tickets.edit', $ticket->id) }}"
                                        class="bg-warning text-white badge text-decoration-none p-2"><i
                                            class="fa-regular fa-pen-to-square me-1"></i>
                                        Edit</a>
                                    <form action="{{ route('user.tickets.destroy', $ticket->id) }}" method="POST">
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
