<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-calendar-check"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Appointments Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.appointments.index') }}">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Appointments</span>
        </a>
    </li>

    <!-- Services Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.services.index') }}">
            <i class="fas fa-fw fa-concierge-bell"></i>
            <span>Services</span>
        </a>
    </li>

    <!-- Service Providers -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.service-providers.index') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Service Providers</span>
        </a>
    </li>

    <!-- Clients / Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Categories</span>
        </a>
    </li>

    <!-- Availability & Working Hours -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.availabilities.index') }}">
            <i class="fas fa-fw fa-clock"></i>
            <span>Availability</span>
        </a>
    </li>

    <!-- Payments & Transactions -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.payments.index') }}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Payments</span>
        </a>
    </li>

    <!-- Coupons & Discounts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.coupons.index') }}">
            <i class="fas fa-fw fa-tag"></i>
            <span>Coupons & Discounts</span>
        </a>
    </li>

    <!-- Reviews & Feedback -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reviews.index') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Reviews</span>
        </a>
    </li>

    <!-- Waiting List -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.waiting-list.index') }}">
            <i class="fas fa-fw fa-hourglass-half"></i>
            <span>Waiting List</span>
        </a>
    </li>

    <!-- Notifications -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.notifications.index') }}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Notifications</span>
        </a>
    </li>

    <!-- Reports & Analytics -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reports.index') }}">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Reports & Analytics</span>
        </a>
    </li>

    <!-- Admin Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.admins.index') }}">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Admin Management</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
</ul>
