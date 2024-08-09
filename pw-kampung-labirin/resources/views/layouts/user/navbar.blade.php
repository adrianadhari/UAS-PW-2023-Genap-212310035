<nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #ffffff">
    <div class="container-fluid px-5">
        <a class="navbar-brand mb-2" href="/">
            <img src="/assets/img/logo.svg" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="margin-right: 20px">
                    <a class="nav-link {{ $title === 'Beranda' ? 'main-palette' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                    <a class="nav-link {{ $title === 'Kuliner' ? 'main-palette' : '' }}" href="/kuliner">Kuliner</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                    <a class="nav-link {{ $title === 'Atraksi' ? 'main-palette' : '' }}" href="/atraksi">Atraksi</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                    <a class="nav-link {{ $title === 'Event' ? 'main-palette' : '' }}" href="/event">Event</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                    <a class="nav-link {{ $title === 'Kontak' ? 'main-palette' : '' }}" href="/kontak">Kontak</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto fw-bold">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            id="navbarDropdown" aria-expanded="false">
                            <img src="/assets/img/profil.png" alt="Profil"
                                class="me-1">{{ auth()->user()->nama_lengkap }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">Edit Profil</a></li>
                            @if (!auth()->user()->is_admin)
                                <li><a class="dropdown-item" href="/dashboard-user">Dashboard</a></li>
                            @endif
                            @if (auth()->user()->is_admin)
                                <li><a class="dropdown-item" href="/dashboard-admin">Dashboard</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="post">
                                @csrf
                                <li><button type="submit" class="dropdown-item">Logout<img src="/assets/img/logout.png"
                                            width="25" alt="Logout" class="ms-2"></button></li>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-success mx-2 px-3">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-success mx-3 px-3">Daftar</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
