<x-layouts.layout>
    <x-slot:title>
        dashboard
    </x-slot:title>


    <x-layouts.content-layout>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Orders</p>
                                        <h5 class="mb-0">867</h5>
                                    </div>
                                    <div class="ms-auto"><i class='bx bx-cart font-30'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="chart1"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Income</p>
                                        <h5 class="mb-0">$52,945</h5>
                                    </div>
                                    <div class="ms-auto"><i class='bx bx-wallet font-30'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="chart2"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Users</p>
                                        <h5 class="mb-0">24.5K</h5>
                                    </div>
                                    <div class="ms-auto"><i class='bx bx-group font-30'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="chart3"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Comments</p>
                                        <h5 class="mb-0">869</h5>
                                    </div>
                                    <div class="ms-auto"><i class='bx bx-chat font-30'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="chart4"></div>
                        </div>
                    </div>
                </div><!--end row-->


                <div class="row">
                    <div class="col-12 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="" id="chart5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Sales Target</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                                <div class="mt-4" id="chart6"></div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="mb-0">2248</h2>
                                        <p class="mb-0">/2,800 target</p>
                                    </div>
                                    <div class="ms-auto d-flex align-items-center border radius-10 px-2">
                                        <i class='bx bxs-checkbox font-22 me-1 text-primary'></i><span>Marketing Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->


                <div class="row row-cols-1 row-cols-xl-2">
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="" id="chart7"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Sales Report</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                                <div class="" id="chart8"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 col-xl-4 col-xxl-3 d-flex">
                        <div class="card radius-10 w-100 overflow-hidden">
                            <div class="card-body">
                                <p class="mb-1">Overall Sales Performance</p>
                                <div class="">
                                    <h2 class="mb-0">$84,126.5</h2>
                                    <p class="mb-0 text-success">+2.5% vs last month</p>
                                </div>
                            </div>
                            <div class="" id="chart9"></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8 col-xxl-9 d-flex">
                        <div class="card w-100 radius-10">
                            <div class="row g-0">
                                <div class="col-md-4 border-end">
                                    <div class="card-body">
                                        <h5 class="card-title">Top Sales Locations</h5>
                                        <h2 class="mt-4 mb-1">25.860 <i class="flag-icon flag-icon-us rounded"></i></h2>
                                        <p class="mb-0 text-secondary">Our Most Customers in US</p>
                                    </div>
                                    <ul class="list-group mt-4 list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class='bx bxs-circle me-1 text-success'></i>
                                            <span>Massive</span>
                                            <strong class="ms-auto">18.4k</strong>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class='bx bxs-circle me-1 text-danger'></i>
                                            <span>Large</span>
                                            <strong class="ms-auto">6.9k</strong>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class='bx bxs-circle me-1 text-primary'></i>
                                            <span>Medium</span>
                                            <strong class="ms-auto">5.4k</strong>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class='bx bxs-circle me-1 text-warning'></i>
                                            <span>Small</span>
                                            <strong class="ms-auto">875</strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8">
                                    <div class="p-3">
                                        <div class="" id="geographic-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 col-xl-4 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">New Customers</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">
                                <div
                                    class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Emy Jackson</h6>
                                        <p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Martin Hughes</h6>
                                        <p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Laura Madison</h6>
                                        <p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Shoan Stephen</h6>
                                        <p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-5.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Keate Medona</h6>
                                        <p class="mb-0 font-13 text-secondary">Keate@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-6.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Paul Benn</h6>
                                        <p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Winslet Maya</h6>
                                        <p class="mb-0 font-13 text-secondary">winslet_02@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Bruno Bernard</h6>
                                        <p class="mb-0 font-13 text-secondary">bruno.b@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Merlyn Dona</h6>
                                        <p class="mb-0 font-13 text-secondary">merlyn.d@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                                <div
                                    class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                    <div class="">
                                        <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46"
                                             height="46" alt=""/>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Alister Campel</h6>
                                        <p class="mb-0 font-13 text-secondary">alister_42@xyz.com</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto"><a href="javascript:;"
                                                                                                  class="list-inline-item"><i
                                                class='bx bxs-envelope'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i
                                                class='bx bx-dots-vertical-rounded'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 d-flex">
                        <div class="card radius-10 w-100 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Store Metrics</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                            </div>

                            <div class="store-metrics p-3 mb-3">

                                <div class="card mt-3 radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Products</p>
                                                <h4 class="mb-0">856</h4>
                                            </div>
                                            <div class="widgets-icons bg-light-primary text-primary ms-auto"><i
                                                    class='bx bxs-shopping-bag'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Customers</p>
                                                <h4 class="mb-0">45,241</h4>
                                            </div>
                                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                                    class='bx bxs-group'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Categories</p>
                                                <h4 class="mb-0">98</h4>
                                            </div>
                                            <div class="widgets-icons bg-light-success text-success ms-auto"><i
                                                    class='bx bxs-category'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 border shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Orders</p>
                                                <h4 class="mb-0">124</h4>
                                            </div>
                                            <div class="widgets-icons bg-light-info text-info ms-auto"><i
                                                    class='bx bxs-cart-add'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card radius-10 border shadow-none mb-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Total Vendors</p>
                                                <h4 class="mb-0">55</h4>
                                            </div>
                                            <div class="widgets-icons bg-light-warning text-warning ms-auto"><i
                                                    class='bx bxs-user-account'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4 d-flex">
                        <div class="card radius-10 w-100 ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Top Products</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product-list p-3 mb-3">

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/01.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Black Boost Chair</h6>
                                        <p class="mb-0">148 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$246.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/03.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Red Single Sofa</h6>
                                        <p class="mb-0">122 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$328.14</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/04.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Pink Rounded Sofa</h6>
                                        <p class="mb-0">105 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$124.35</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/05.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Brown Single Table</h6>
                                        <p class="mb-0">201 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$158.34</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/06.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Grey Long Chair</h6>
                                        <p class="mb-0">146 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">158.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/07.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Beautiful Sofa</h6>
                                        <p class="mb-0">210 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$520.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/08.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Grey Stand Table</h6>
                                        <p class="mb-0">115 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$345.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/09.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Brown Single Table</h6>
                                        <p class="mb-0">116 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$126.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/10.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Four Leg Chair</h6>
                                        <p class="mb-0">154 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$425.24</h6>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                                    <div class="product-img me-2">
                                        <img src="assets/images/products/11.png" alt="product img">
                                    </div>
                                    <div class="">
                                        <h6 class="mb-0 font-14">Blue Light T-Shirt</h6>
                                        <p class="mb-0">186 Sales</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h6 class="mb-0">$149.34</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--end row-->


                <div class="row">
                    <div class="col">
                        <div class="card radius-10 mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Recent Orders</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All
                                            Products</a>
                                    </div>
                                </div>

                                <div class="table-responsive mt-3">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Tracking ID</th>
                                            <th>Products Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#55879</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/15.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Light Red T-Shirt</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span class="badge bg-light-success text-success w-100">Completed</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#88379</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/16.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Grey Headphone</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span
                                                    class="badge bg-light-danger text-danger w-100">Cancelled</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#68823</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/19.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Grey Hand Watch</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span
                                                    class="badge bg-light-warning text-warning w-100">Pending</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#54869</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/07.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Brown Sofa</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span class="badge bg-light-success text-success w-100">Completed</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#22536</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/17.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Black iPhone 11</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span class="badge bg-light-success text-success w-100">Completed</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#25796</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/14.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span
                                                    class="badge bg-light-warning text-warning w-100">Pending</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#98754</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="recent-product-img">
                                                        <img src="assets/images/products/08.png" alt="">
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-1 font-14">Grey Stand Table</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jun, 2020</td>
                                            <td class=""><span
                                                    class="badge bg-light-danger text-danger w-100">Cancelled</span>
                                            </td>
                                            <td>#149.25</td>
                                            <td>
                                                <div class="d-flex order-actions"><a href="javascript:;"
                                                                                     class="text-danger bg-light-danger border-0"><i
                                                            class='bx bxs-trash'></i></a>
                                                    <a href="javascript:;"
                                                       class="ms-4 text-primary bg-light-primary border-0"><i
                                                            class='bx bxs-edit'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--end row-->

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!-- modal starts -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Staff</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="validationCustom01" value=""
                                           required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" id="validationCustom01" value=""
                                           required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="text" class="form-control datepicker"/>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Phone Number</label>
                                    <input type="phone" class="form-control" id="validationCustom02" value=""
                                           required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="validationCustom02" value=""
                                           required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">Please provide a valid Address.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Role</label>
                                    <select class="form-select" id="validationCustom04"
                                            placeholder="Role(refer to user roles)" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Administrator (1)</option>
                                        <option value="">Stock Manager (2)</option>
                                        <option value="">Sales Rep (3)</option>
                                        <option value="">Accountant (4)</option>
                                        <option value="">Auditor (5)</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid Role.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Appointment Date</label>
                                    <input type="text" class="form-control datepicker" id="validationCustom03"
                                           required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Appointment Type</label>
                                    <select class="form-select" id="validationCustom04"
                                            placeholder="Role(refer to user roles)" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Full-time</option>
                                        <option value="">Part-time</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Note</label>
                                    <textarea type="" class="form-control" placeholder="Optional"
                                              value=""></textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->

        <!-- modal starts -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Staff</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0 text-danger">Confirmation</h4>
                                <div>Are you sure, you want to delete!</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">yes</button>
                        <button class="btn btn-danger" type="submit">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        <!--End Back To Top Button-->
    </x-layouts.content-layout>

    @pushonce('javascript-files')
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/highcharts.js')}}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/exporting.js')}}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/variable-pie.js')}}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/export-data.js')}}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/accessibility.js')}}"></script>
        <script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/js/index2.js')}}"></script>

        <script>
            new PerfectScrollbar('.customers-list');
            new PerfectScrollbar('.store-metrics');
            new PerfectScrollbar('.product-list');
        </script>
    @endpushonce

</x-layouts.layout>
