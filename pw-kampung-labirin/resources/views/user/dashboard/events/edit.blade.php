@extends('dashboard-user-main')
@section('content')
<a href="{{ route('user.events.index') }}" class="btn btn-success my-4">Kembali</a>
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
                <form action="{{ route('user.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="event_name">Nama Event</label>
                        <input type="text" name="event_name"
                            class="form-control @error('event_name') is-invalid @enderror" id="event_name" value="{{ $event->event_name }}">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="event_description">Deskripsi Event</label>
                        <textarea class="form-control @error('event_description') is-invalid @enderror" id="event_description" rows="5"
                            name="event_description">{{ $event->event_description }}</textarea>
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="event_date">Tanggal Event</label>
                        <input type="datetime-local" name="event_date"
                            class="form-control @error('event_date') is-invalid @enderror" id="event_date" value="{{ $event->event_date }}">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="event_image">Unggah Gambar Event</label>
                        <input type="file" name="event_image"
                            class="form-control @error('event_image') is-invalid @enderror" id="event_image">
                    </div>
                    <div class="col-xl-8 mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>''
@endsection
