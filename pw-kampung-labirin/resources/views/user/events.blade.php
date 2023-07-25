@extends('main')
@section('content')
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/hero1.svg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/img/hero2.svg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/img/hero3.svg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4 pt-4">
        <div class="col-md-8">
            <p class="fw-medium third-palette" style="font-size: 24px">Akan Datang</p>
            @if (empty($events))
                    @foreach ($events as $event)

                    @endforeach
                @else
                    <h5 class="text-center">Belum ada event</h5>
                @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                @if (!empty($events) )
                    @foreach ($events as $event)
                        <div class="col-md-3">
                            <a href="/event/{{ $event->id }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="/assets/img/event.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">{{ $event->nama_event }}</p>
                                        <p class="fw-semibold" style="font-size: 14px">{{ $event->harga_tiket }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h5 class="text-center">Belum ada event</h5>
                @endif
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-4 pt-4">
        <div class="col-md-8">
            <p class="fw-medium third-palette" style="font-size: 24px">Telah Selesai</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                @if (empty($events))
                    @foreach ($events as $event)
                        <div class="col-md-3">
                            <a href="/event/{{ $event->id }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="/assets/img/event.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">{{ $event->nama_event }}</p>
                                        <p class="fw-semibold" style="font-size: 14px">{{ $event->harga_tiket }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h5 class="text-center">Belum ada event</h5>
                @endif
            </div>
        </div>
    </div>
@endsection
