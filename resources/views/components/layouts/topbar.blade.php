<div class="topbar d-flex align-items-center">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-menu">
            <i class='bx bx-menu'></i>
        </div>
        <div class="top-menu-left d-none d-lg-block">
            <ul class="nav">
                <li class="nav-item">
                </li>
            </ul>
        </div>
        <div class="top-menu ms-auto">
        </div>
        <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('assets/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
                <div class="user-info ps-3">
                    <p class="user-name mb-0">Pauline Seitz</p>
                    <p class="designattion mb-0">Web Designer</p>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('profile')}}">
                        <i class="bx bx-user"></i><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:void(0);"><i
                            class='bx bx-home-circle'></i><span>Dashboard</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:void(0);"><i
                            class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                </li>
                <li>
                    <div class="dropdown-divider mb-0"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('logout')}}"><i
                            class='bx bx-log-out-circle'></i><span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
