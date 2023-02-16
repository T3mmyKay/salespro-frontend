<x-layouts.layout>
    <x-slot:title>
        business-registration
    </x-slot:title>

    <x-layouts.content-layout>
        <div x-data="business_reg">
            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Point Of Sale</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Registered Business</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end breadcrumb-->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-5 radius-30"
                                           placeholder="Search Business"> <span
                                        class="position-absolute top-50 product-show translate-middle-y"><i
                                            class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto"><a href="javascript:;"
                                                        class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i
                                            class="bx bxs-plus-square"></i>
                                        Register Business</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>No.#</th>
                                        <th>Business Type</th>
                                        <th>Business Categories</th>
                                        <th>Business Sub-category</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>type</td>
                                        <td>categories</td>
                                        <td>class</td>
                                        <!-- <td><a href="profile.php" type="button"class="btn btn-primary btn-sm radius-30 px-4">View</a></td> -->
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
            <!--start overlay-->
            <!-- modal start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Register Business</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"> Business Type</label>
                                        <select class="form-select" id="validationCustom04" placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>Stocks / inventory</option>
                                            <option>production</option>
                                            <option>Services</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label">Business Category</label>
                                        <select class="form-select" id="validationCustom04" placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
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


            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Business</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"> Business Type</label>
                                        <select class="form-select" id="validationCustom04" placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>Stocks / inventory</option>
                                            <option>production</option>
                                            <option>Services</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label">Business Category</label>
                                        <select class="form-select" id="validationCustom04" placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
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

            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Business</h5>
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
        </div>
    </x-layouts.content-layout>
</x-layouts.layout>
