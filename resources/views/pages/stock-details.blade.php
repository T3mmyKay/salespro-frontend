<x-layouts.layout>
    <x-slot:title>
        stock-details
    </x-slot:title>
    <x-layouts.layout>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Point of Sale</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Stock Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Item Name , Category</h4>
                        <div class="d-flex gap-3 py-3">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-secondary'></i>
                            </div>
                            <div>142 reviews</div>
                            <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div>
                        </div>
                        <div class="mb-3">
                            <span class="price h4">Unit Selling Price</span>
                            <span class="text-muted">Unit Quantity</span>
                        </div>
                        <p class="card-text fs-6">Description</p>
                        <dl class="row">
                            <dt class="col-sm-3">Batch No</dt>
                            <dd class="col-sm-9">########</dd>

                            <dt class="col-sm-3">Bar Code Number</dt>
                            <dd class="col-sm-9">############</dd>

                            <dt class="col-sm-3">Expiry Date</dt>
                            <dd class="col-sm-9">00/00/00</dd>
                        </dl>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </x-layouts.layout>
</x-layouts.layout>
