<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img
            src="/assets/img/logo.svg"></div>
    <div class="list-group list-group-flush my-3">
        <a href="/admin"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('admin') ? 'active' : '' }}"><i
                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="/admin/kelola-event"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('admin/kelola-event') ? 'active' : '' }}"><i
                class="fas fa-project-diagram me-2"></i>Kelola Event</a>
        <a href="/admin/kelola-user"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('admin/kelola-user') ? 'active' : '' }}"><i
                class="fas fa-project-diagram me-2"></i>Kelola User</a>
        <a href="/admin/pesan"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('admin/pesan') ? 'active' : '' }}"><i
                class="fas fa-chart-line me-2"></i>Pesan</a>
    </div>
</div>
