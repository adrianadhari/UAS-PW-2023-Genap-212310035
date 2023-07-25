@extends('main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-5 shadow-sm border border-light-subtle p-3 rounded mb-3 mx-3">
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
            <h5 class="mb-5 ps-4 pt-3">Informasi Profil</h5>
            <form action="/profil" method="POST">
                @csrf
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="text" name="nama_lengkap"
                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                            value="{{ auth()->user()->nama_lengkap }}" id="nama_lengkap">
                    </div>
                </div>
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="username">Username</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            value="{{ auth()->user()->username }}" id="username">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ auth()->user()->email }}" id="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="no_hp">No. HP</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                            value="{{ auth()->user()->no_hp }}" id="no_hp">
                    </div>
                </div>
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="domisili">Domisili</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="text" name="domisili" class="form-control @error('domisili') is-invalid @enderror"
                            value="{{ auth()->user()->domisili }}" id="domisili">
                    </div>
                </div>
                <div class="row justify-content-center mb-4 px-4">
                    <div class="col-xl-4">
                        <label class="form-label" for="nama_event_organizer">Nama Event Organizer</label>
                    </div>
                    <div class="col-xl-8">
                        <input type="text" name="nama_event_organizer"
                            class="form-control @error('nama_event_organizer') is-invalid @enderror"
                            value="{{ auth()->user()->nama_event_organizer }}" id="nama_event_organizer">
                    </div>
                </div>
                <div class="row justify-content-end pe-4">
                    <div class="col-xl-3">
                        <button type="submit" class="btn btn-primary w-100">Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-5 shadow-sm border border-light-subtle p-3 rounded mb-3 mx-3">
            <h5 class="mb-5 ps-4 pt-3">Password</h5>
            <div class="row justify-content-center mb-4 px-4">
                <div class="col-xl-4">
                    <label class="form-label" for="nama_lengkap">Password Saat Ini</label>
                </div>
                <div class="col-xl-8">
                    <input type="password" name="nama_lengkap" class="form-control" id="nama_lengkap">
                </div>
            </div>
            <div class="row justify-content-center mb-4 px-4">
                <div class="col-xl-4">
                    <label class="form-label" for="nama_lengkap">Password Baru</label>
                </div>
                <div class="col-xl-8">
                    <input type="password" class="form-control" id="nama_lengkap">
                </div>
            </div>
            <div class="row justify-content-center mb-4 px-4">
                <div class="col-xl-4">
                    <label class="form-label" for="nama_lengkap">Konfirmasi Password Baru</label>
                </div>
                <div class="col-xl-8">
                    <input type="password" class="form-control" id="nama_lengkap">
                </div>
            </div>
            <div class="row justify-content-end pe-4">
                <div class="col-xl-3">
                    <button type="submit" class="btn btn-primary w-100">Perbarui</button>
                </div>
            </div>
        </div>
    </div>
@endsection
