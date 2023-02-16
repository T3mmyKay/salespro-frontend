<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Salespro</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}">
                <div class="parent-icon">
                    <i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('suppliers')}}">
                <div class="parent-icon">
                    <i class='bx bx-box'></i>
                </div>
                <div class="menu-title">Suppliers</div>
            </a>
        </li>
        <li>
            <a href="{{route('staffs')}}">
                <div class="parent-icon">
                    <i class='bx bx-dollar'></i>
                </div>
                <div class="menu-title">Staffs</div>
            </a>
        </li>
        <li>
            <a href="{{route('affiliates')}}">
                <div class="parent-icon"><i class='lni lni-graph'></i>
                </div>
                <div class="menu-title">Affiliates</div>
            </a>
        </li>
        <li>
            <a href="{{route('customers')}}">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Customers</div>
            </a>
        </li>
        <li>
            <a href="{{route('product-categories')}}">
                <div class="parent-icon"><i class='bx bx-sitemap'></i>
                </div>
                <div class="menu-title">Product Categories</div>
            </a>
        </li>
        <li>
            <a href="{{route('profile')}}">
                <div class="parent-icon"><i class='bx bxs-user-account'></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
