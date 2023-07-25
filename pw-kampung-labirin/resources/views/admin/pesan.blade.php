@extends('dashboard-admin-main')
@section('content')
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Domisili</th>
                        <th scope="col">Pesan</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-dark">
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->nama_lengkap }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->no_hp }}</td>
                            <td>{{ $message->domisili }}</td>
                            <td class="text-start">{{ $message->isi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
