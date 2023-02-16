<x-layouts.layout>
    <x-slot:title>
        staff-profile
    </x-slot:title>
    <x-layouts.content-layout>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Supplier Profile</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Supplier Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                            <div class="mt-3">
                                                <h4>John Doe</h4>
                                                <p class="text-secondary mb-1">Administrator</p>
                                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                                <div class="col-sm-9  m-auto text-secondary">
                                                    <input type="button" class="btn btn-sm btn-primary px-4" value="Update Photo" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="John Doe" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Date of Birth</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control"  value="date" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="john@example.com" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone Number</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="(239) 816-9029" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="Bay Area, San Francisco, CA" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Role</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Appointment Date</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Appointment Type</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="" disabled />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="button"data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary px-4" value="Update" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- supply history -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                <h1 class=" fw-bold fs-4" >Sales History</h1>
                            </div>
                            <div class="ms-auto position-relative">
                                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Suppliers">
                                <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>External Invoice No.</th>
                                    <th>internal Invoice No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Processed By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10....</td>
                                    <td>46...</td>
                                    <td>23/06..</td>
                                    <td>#25,000</td>
                                    <td>Adewale</td>
                                    <td><a href="javascript:;" type="button"class="btn btn-primary btn-sm radius-30 px-4"
                                           data-bs-toggle="modal" data-bs-target="#exampleModal1">Details</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                <h1 class=" fw-bold fs-4" >Returns History</h1>
                            </div>
                            <div class="ms-auto position-relative">
                                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Suppliers">
                                <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>External Invoice No.</th>
                                    <th>internal Invoice No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Processed By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10....</td>
                                    <td>46...</td>
                                    <td>23/06..</td>
                                    <td>#25,000</td>
                                    <td>Adewale</td>
                                    <td><a href="javascript:;" type="button"class="btn btn-primary btn-sm radius-30 px-4"
                                           data-bs-toggle="modal" data-bs-target="#exampleModal1">Details</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                <h1 class=" fw-bold fs-4" >Unstock History</h1>
                            </div>
                            <div class="ms-auto position-relative">
                                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Suppliers">
                                <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>External Invoice No.</th>
                                    <th>internal Invoice No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Processed By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10....</td>
                                    <td>46...</td>
                                    <td>23/06..</td>
                                    <td>#25,000</td>
                                    <td>Adewale</td>
                                    <td><a href="javascript:;" type="button"class="btn btn-primary btn-sm radius-30 px-4"
                                           data-bs-toggle="modal" data-bs-target="#exampleModal1">Details</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="position-relative">
                                <h1 class=" fw-bold fs-4" >Stocking History</h1>
                            </div>
                            <div class="ms-auto position-relative">
                                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Suppliers">
                                <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>External Invoice No.</th>
                                    <th>internal Invoice No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Processed By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10....</td>
                                    <td>46...</td>
                                    <td>23/06..</td>
                                    <td>#25,000</td>
                                    <td>Adewale</td>
                                    <td><a href="javascript:;" type="button"class="btn btn-primary btn-sm radius-30 px-4"
                                           data-bs-toggle="modal" data-bs-target="#exampleModal1">Details</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- modal starts -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="p-4">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="John Doe" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of Birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="john@example.com" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="(239) 816-9029"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="Bay Area, San Francisco, CA"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Role</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Appointment Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Appointment Type</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal ends -->

        <!-- modal starts -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supply Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="">
                            <div class="card-body">
                                <div class=" d-flex">
                                    <h5 class=" fw-semibold fs-6 " >Invoice No:</h5>
                                    <h5  class=" fw-semibold fs-6 ms-auto ">Date: 23/06/22</h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Qty.</th>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>tricycle</td>
                                            <td>#25,000</td>
                                            <td>#100,000</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>bicycle</td>
                                            <td>#25,000</td>
                                            <td>#100,000</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>Car</td>
                                            <td>#25,000</td>
                                            <td>#100,000</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td colspan="3" class="fw-bold">SUBTOTAL</td>
                                            <td>#300,000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td colspan="3" class="fw-bold">DISCOUNT</td>
                                            <td>#1,500.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td colspan="3"class="fw-bold">GRAND TOTAL</td>
                                            <td>#301,500.00</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal ends -->
    </x-layouts.content-layout>
</x-layouts.layout>
