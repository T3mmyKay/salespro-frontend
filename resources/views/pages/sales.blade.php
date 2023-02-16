<x-layouts.layout>
    <x-slot:title>
        sales
    </x-slot:title>
    <x-layouts.content-layout>
        <!--wrapper-->
        <div class="wrapper">
            <!--sidebar wrapper -->
            <?php include('nav.php') ?>
                <!--end sidebar wrapper -->
            <!--start header -->
            <header>
                <?php include('header.php'); ?>
            </header>
            <!--end header -->
            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Sales</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sales</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="container">
                        <div class="main-body">
                            <div class="row">
                                <div class="col-lg-7">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Search Item</h5>
                                        </div>
                                        <div class="card-body ">
                                            <div class="position-relative">
                                                <input type="text" class="form-control ps-5 radius-30"
                                                       placeholder="Enter Item name to Search">
                                                <span
                                                    class="position-absolute top-50 product-show translate-middle-y"><i
                                                        class="bx bx-search"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Item Name</h5>
                                        </div>
                                        <div class="card-body p-0">

                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Unit Qty</th>
                                                        <th>Price</th>
                                                        <th>Description</th>
                                                        <th>Indicator</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>#20,000</td>
                                                        <td>provision</td>
                                                        <td>2...</td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body ">
                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <label for="unit" class="form-label">Unit Quatity</label>
                                                    <input type="number" value="1" class="form-control" id=""
                                                           placeholder="00.00">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="unitprice" class="form-label">Unit Price</label>
                                                    <input type="text" class="form-control" value="200" id=""
                                                           placeholder="00.00">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="amount" class="form-label">Amount</label>
                                                    <input type="text" value="200" class="form-control" id=""
                                                           placeholder="00.00">
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Cart Details</h5>
                                        </div>
                                        <div class="card-body p-0">

                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Item</th>
                                                        <th>Unit Qty</th>
                                                        <th>Price</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>provision</td>
                                                        <td contentEditable="true">44</td>
                                                        <td>#20,000</td>
                                                        <td>#300,000</td>

                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2" class="fw-bold">SUBTOTAL</td>
                                                        <td>#300,000</td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Chechout</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-md-12 mb-3">
                                                <div class="row mb-3">
                                                    <div class="col-6">
                                                        Discount
                                                        <input class="form-control">
                                                    </div>
                                                    <div class="col-6">
                                                        Amount Paid
                                                        <input class="form-control" value="300">
                                                    </div>
                                                </div>
                                                Customer
                                                <select class="single-select" onchange="checkNew(this.value)">
                                                    <option value="">Search Customer...</option>
                                                    <option value="0">New Customer</option>
                                                    <option value="1">Adewale James</option>
                                                </select>
                                                <div class="row mt-3" id="addnew" style="display:none">
                                                    <div class="col-sm-12">
                                                        <label for="name">name</label>
                                                        <input class="form-control">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="phonenumber">Phone Number</label>
                                                        <input class="form-control" value="300">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class=" mt-2 d-grid">
                                                            <button type="button"
                                                                    class="btn btn-primary">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-warning">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </x-layouts.content-layout>
    @pushonce('javascript-files')
        <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
        <script>
            $('.single-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            $('.multiple-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        </script>
    @endpushonce
</x-layouts.layout>
