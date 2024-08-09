@extends('dashboard-user-main')
@section('content')
    <a href="{{ route('user.tickets.index') }}" class="btn btn-success my-4">Kembali</a>
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
                <form action="{{ route('user.tickets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="event_id">Pilih Event</label>
                        <select class="form-select @error('event_id') is-invalid @enderror" id="event_id"
                            name="event_id">
                            @foreach ($events as $event)
                            <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="ticket_name">Nama Tiket</label>
                        <input type="text" name="ticket_name"
                            class="form-control @error('ticket_name') is-invalid @enderror" id="ticket_name">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="ticket_price">Harga Tiket</label>
                        <input type="number" name="ticket_price"
                            class="form-control @error('ticket_price') is-invalid @enderror" id="ticket_price">
                    </div>
                    <div class="col-xl-8 mb-3">
                        <label class="form-label" for="ticket_quantity">Jumlah Tiket</label>
                        <input type="number" name="ticket_quantity"
                            class="form-control @error('ticket_quantity') is-invalid @enderror" id="ticket_quantity">
                    </div>
                    <div class="col-xl-8 mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Buat Tiket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
