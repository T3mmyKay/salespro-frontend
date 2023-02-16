<x-layouts.layout>
    <x-slot:title>
        restock-items
    </x-slot:title>

    <x-layouts.content-layout>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Point Of Sale</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Re-Stock Items</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Items">
                                <span class="position-absolute top-50 product-show translate-middle-y"><i
                                        class="bx bx-search"></i></span>
                            </div>
                            <div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                    <i class="bx bxs-plus-square"></i>Re-stock Items</a></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>Product No.</th>
                                    <th>Invoice No.</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Unit Qty</th>
                                    <th>Unit Selling Price</th>
                                    <th>Description</th>
                                    <th>Profile</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>....</td>
                                    <td>.....</td>
                                    <td>....</td>
                                    <td>....</td>
                                    <td>....</td>
                                    <td>Reasons</td>
                                    <td><a href="stockdetails.php" type="button"
                                           class="btn btn-primary btn-sm radius-30 px-4">Item Details</a></td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="javascript:;" class="" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal1"><i class='bx bxs-edit'></i></a>
                                            <a href="javascript:;" class="ms-3" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal2"><i class='bx bxs-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->

        <!-- modal start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UnStock Items</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="p-4">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">category</label>
                                    <select class="form-select" id="validationCustom04"
                                            placeholder="Select Item Category" required>
                                        <option value="">Select Item Category...</option>
                                        <option value="">Food</option>
                                        <option value="">Drinks</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Unit Selling Price</label>
                                    <input type="text" class="form-control" id="validationCustom02" value=""
                                           placeholder="00.00" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Unit Buying Price</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="00"
                                           required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Bar Code</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="00"
                                           required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Batch No.</label>
                                    <input type="text" class="form-control" placeholder="#######"
                                           id="validationCustom03">
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //second modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Re-Stock Items</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="p-4">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">category</label>
                                    <select class="form-select" id="validationCustom04"
                                            placeholder="Select Item Category" required>
                                        <option value="">Select Item Category...</option>
                                        <option value="">Food</option>
                                        <option value="">Drinks</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Unit Selling Price</label>
                                    <input type="text" class="form-control" id="validationCustom02" value=""
                                           placeholder="00.00" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Unit Buying Price</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="00"
                                           required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Bar Code</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="00"
                                           required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Batch No.</label>
                                    <input type="text" class="form-control" placeholder="#######"
                                           id="validationCustom03">
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
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
    </x-layouts.content-layout>
</x-layouts.layout>
