@extends('dashboard-admin-main')
@section('content')
<div class="row px-3">
    <div class="col-md-7">
    @if (session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    </div>
</div>
    <div class="row px-3">
        <div class="col-xl-12 shadow-sm border border-light-subtle p-3 rounded" style="background-color: #ffffff">
            <table class="table table-responsive-xl row-border hover mt-3" style="background-color: #ffffff" id="table">
                <thead>
                    <tr class="text-secondary">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Domisili</th>
                        <th scope="col">Nama Event Organizer</th>
                        <th scole="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-dark">
                    <?php $no = 1; ?>
                    @foreach ($users as $user)
                        <tr>
                            <td class="pt-3">{{ $no++ }}</td>
                            <td class="pt-3">{{ $user->nama_lengkap }}</td>
                            <td class="pt-3">{{ $user->username }}</td>
                            <td class="pt-3">{{ $user->email }}</td>
                            <td class="pt-3">{{ $user->no_hp }}</td>
                            <td class="pt-3">{{ $user->domisili }}</td>
                            <td class="pt-3">{{ $user->nama_event_organizer }}</td>
                            <td class="text-center"><a href="/admin/kelola-user/{{ $user->id }}"
                                    class="badge bg-warning m-1"><img src="/assets/img/write.png" width="20px"></a>
                                    <form action="/admin/kelola-user/{{ $user->id }}" method="POST" class="d-inline">
                                        @csrf
                                    <button class="badge bg-danger m-1 border-0" onclick="return confirm('Yakin?')" type="submit"><img
                                        src="/assets/img/trash.png" width="20px"></button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
