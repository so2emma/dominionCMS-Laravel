{{-- <label>
    <div class="slide">
        <ul class="slideul">
            <li><a href="{{ url('/home') }}"><i class="fas fa-tv"></i> Admins</a></li>
            <li><a href="{{ url('/admin/members') }}"><i class="fas fa-tv"></i> Members</a></li>
            <li><a href="{{ url('/admin/department') }}"><i class="fab fa-gripfire"></i> Department</a></li>
            <li><a href="{{ url('/admin/birthday') }}"><i class="fas fa-user"></i> birthday</a></li>
            <li><a href="{{ url('/admin/weddingAnniversary') }}"><i class="fas fa-user"></i> Wedding Anniversary</a></li>
            <li><a href="{{ url('/admin/dateJoined') }}"><i class="fas fa-comments"></i> Date Joined</a></li>
        </ul>
    </div>
</label> --}}

   <!-- offcanvas -->
<div class="offcanvas offcanvas-start sidebar-nav bg-dark pt-2" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 ">
                        CORE
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light"/>
                </li>

                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Interface
                    </div>
                </li>
                {{-- ###### --}}
                <li>
                    <a href="{{ url('/admin/members') }}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-people-fill"></i></span>
                        <span>Members</span>
                    </a>
                </li>
                {{-- ##### --}}
                <li>
                    <a href="{{ url('/admin/department') }}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-building"></i></span>
                        <span>Department</span>
                    </a>
                </li>
                {{-- ##### --}}
                <li>
                    <a href="{{ url('/admin/birthday') }}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-balloon-fill"></i></span>
                        <span>Birthday</span>
                    </a>
                </li>
                {{-- ##### --}}
                <li>
                    <a href="{{ url('/admin/weddingAnniversary') }}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-calendar2-week-fill"></i></span>
                        <span>Wedding Anniversary</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/dateJoined') }}" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-calendar2-plus"></i></span>
                        <span>Date Registered</span>
                    </a>
                </li>

                {{-- ###### --}}
                <li class="my-4">
                    <hr class="dropdown-divider bg-light" />
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Addons
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-graph-up"></i></span>
                        <span>Charts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-table"></i></span>
                        <span>Tables</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- offcanvas -->
<!-- OFFCANVAS MENU  -->
