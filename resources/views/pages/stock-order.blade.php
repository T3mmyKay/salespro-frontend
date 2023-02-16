<x-layouts.layout>
    <x-slot:title>
        stock-order
    </x-slot:title>

    <x-layouts.content-layout>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Stock Order</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Stock Order</li>
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
                                            <span class="position-absolute top-50 product-show translate-middle-y"><i
                                                    class="bx bx-search"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Item Name</h5>
                                    </div>
                                    <div class="card-body p-0 ">
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
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="unit" class="form-label">Unit Quatity</label>
                                                <input type="number" class="form-control" id="" placeholder="00.00">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="unitprice" class="form-label">Unit Price</label>
                                                <input type="text" class="form-control" id="" placeholder="00.00">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="amount" class="form-label">Amount</label>
                                                <input type="text" class="form-control" id="" placeholder="00.00">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Order Confirmation</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                                            <div class="position-relative">
                                                <input type="text" class="form-control ps-5 radius-30"
                                                       placeholder="Search Order"> <span
                                                    class="position-absolute top-50 product-show translate-middle-y"><i
                                                        class="bx bx-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Unit Qty</th>
                                                    <th>Price</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                       value="" aria-label="...">
                                                            </div>
                                                            <div class="ms-0">
                                                                <h6 class="mb-0 font-14">1</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td contentEditable="true">22</td>
                                                    <td>#485.20</td>
                                                    <td>#485.20</td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm radius-30 px-4">Add to
                                                            Cart
                                                        </button>
                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Cart Details</h5>
                                    </div>
                                    <div class="card-body">
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
                                        <h5>Checkout</h5>
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
                                            Supplier
                                            <select class="single-select" onchange="checkNew(this.value)">
                                                <option value="">Search supplier...</option>
                                                <option value="0">New supplier</option>
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
                                                        <button type="button" class="btn btn-primary">Submit</button>
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
        <!--end page wrapper -->
    </x-layouts.content-layout>
    @pushonce('javascript-files')
        <script src="{{('assets/plugins/select2/js/select2.min.js')}}"></script>
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
