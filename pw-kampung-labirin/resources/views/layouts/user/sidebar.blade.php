<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img
            src="/assets/img/logo.svg"></div>
    <div class="list-group list-group-flush my-3">
        <a href="{{ route('user.dashboard') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ $title === 'Dashboard' ? 'active' : '' }}"><i
                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="{{ route('user.events.index') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ $title === 'Kelola Event' ? 'active' : '' }}"><i
                class="fas fa-chart-line me-2"></i>Kelola Event</a>
        <a href="{{ route('user.tickets.index') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ $title === 'Kelola Tiket' ? 'active' : '' }}"><i
                class="fas fa-chart-line me-2"></i>Kelola Tiket</a>
    </div>
</div>
