<x-layouts.layout>
    <x-slot:title>
        suppliers
    </x-slot:title>
    <x-layouts.content-layout>
        <div x-data="{suppliers:[],links:[],isFetching:false}">
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Point Of Sale</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end breadcrumb-->

                    <div class="card" x-data="supplier_list">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-5 radius-30"
                                           placeholder="Search Suppliers">
                                    <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                       data-bs-toggle="modal"
                                       data-bs-target="#addSupplierModal">
                                        <i class="bx bxs-plus-square"></i>
                                        Add New Suppliers</a>
                                </div>
                                <!-- Modal -->
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0" id="suppliers_table">
                                    <thead class="table-light">
                                    <tr>
                                        <th>No.#</th>
                                        <th>Full Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Category</th>
                                        <th>Profile</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody x-ref="suppliers_table_body">
                                    <tr x-show.important="isFetching">
                                        <td colspan="7" class="text-center">
                                            <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <template x-for="(supplier,index) in suppliers" :key="`supplier_${index}`">
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 font-14" x-text="index+=1"></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td x-text="supplier.fullname"></td>
                                            <td x-text="supplier.phone"></td>
                                            <td x-text="supplier.email"></td>
                                            <td x-text="supplier.category ?? 'sales'"></td>
                                            <td><a href="profile.php" type="button"
                                                   class="btn btn-primary btn-sm radius-30 px-4">View</a></td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:void(0);" class="" data-bs-toggle="modal"
                                                       @click="$dispatch('showsupplierinfo',{supplier})"
                                                       data-bs-target="#updateSupplierModal"><i class='bx bxs-edit'></i></a>
                                                    <a href="javascript:void(0);" class="ms-3" data-bs-toggle="modal"
                                                       @click="$dispatch('deleteselectedsupplier',{supplier_id:supplier['id']})"
                                                       data-bs-target="#deleteSupplierConfirm"><i
                                                            class='bx bxs-trash'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                                {{--                                    <ul class="pagination">--}}
                                {{--                                        <li class="page-item">--}}
                                {{--                                            <a class="page-link" href="javascript:;" aria-label="Previous">	<span aria-hidden="true">«</span>--}}
                                {{--                                            </a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="javascript:;">1</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="javascript:;">2</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="javascript:;">3</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="page-item">--}}
                                {{--                                            <a class="page-link" href="javascript:;" aria-label="Next">	<span aria-hidden="true">»</span>--}}
                                {{--                                            </a>--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}
                            </div>

                        </div>
                    </div>


                </div>


            </div>
            <!-- modals start -->
            <div class="modal fade" id="addSupplierModal" tabindex="-1" x-data="supplier_add"
                 aria-labelledby="addSupplierModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSupplierModalLabel">Add Suppliers</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" id="addSupplierForm" novalidate
                                      @submit.prevent="addSupplier">
                                    <div class="col-md-12">
                                        <label for="fullname"
                                               class="form-label">Fullname</label>
                                        <input type="text" class="form-control"
                                               id="fullname" required x-model="form.name">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="form-label">Phone
                                            Number</label>
                                        <input type="text" class="form-control"
                                               id="phone" required x-model="form.phone">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email"
                                               class="form-label">Email</label>
                                        <input type="email" class="form-control"
                                               id="email" required x-model="form.email">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="address"
                                               class="form-label">Address</label>
                                        <input type="text" class="form-control"
                                               id="address" required x-model="form.address">
                                        <div class="invalid-feedback">Please provide a valid
                                            Address.
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="categories"
                                               class="form-label">Category</label>
                                        <select class="form-select" id="categories" required
                                                x-model="form.category">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                            <option>agriculture</option>
                                            <option>stationary</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid
                                            Category.
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="notes"
                                               class="form-label">Note</label>
                                        <textarea class="form-control" id="notes" placeholder="Optional" required
                                                  x-model="form.note"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="addSupplierForm" type="submit"
                                    x-html="isSubmitting(isLoading,'Submit')"></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="updateSupplierModal" tabindex="-1" aria-labelledby="updateSupplierModalLabel"
                 x-data="update_supplier_info"
                 @showsupplierinfo.window="setSupplier($event.detail.supplier)"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateSupplierModalLabel">Update Suppliers</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate id="updateSupplierForm"
                                      @submit.prevent="updateSupplier"
                                >
                                    <div class="col-md-12">
                                        <label for="edit_name" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" id="edit_name" x-model="form.name"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_phone" class="form-label">Phone Number</label>
                                        <input type="phone" class="form-control" id="edit_phone" x-model="form.phone"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="edit_email" x-model="form.email"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="edit_address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="edit_address" required
                                               x-model="form.address">
                                        <div class="invalid-feedback">Please provide a valid Address.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_category" class="form-label">Category</label>
                                        <select class="form-select" id="edit_category" required x-model="form.category">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                            <option value="agric">agriculture</option>
                                            <option>stationary</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_note" class="form-label">Note</label>
                                        <textarea type="" class="form-control" id="edit_note" placeholder="Optional"
                                                  x-model="form.note"
                                                  required></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" form="updateSupplierForm"
                                    x-html="isSubmitting(isLoading,'Update')"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteSupplierConfirm" tabindex="-1"
                 aria-labelledby="deleteSupplierConfirmLabel" x-data="deleteComponent"
                 @deleteselectedsupplier.window=setSelectedSupplier($event.detail.supplier_id)
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteSupplierConfirmLabel">Delete Suppliers</h5>
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
                            <button class="btn btn-primary" type="button" @click="deleteSupplier">yes</button>
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal"
                                    @click="removeSelectedSupplier">No
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modals end -->
        </div>


    </x-layouts.content-layout>

    @pushonce('javascript-files')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('supplier_add', () => ({
                    isLoading: false,
                    form: {
                        name: '',
                        phone: '',
                        email: '',
                        address: '',
                        category: '',
                        note: ''
                    },

                    async addSupplier() {
                        this.isLoading = true;
                        try {

                            const response = await axios_instance.post('/supplier/add', this.form);
                            const data = response.data;
                            round_success_notification(data.message);
                            renameKey(this.form, 'name', 'fullname');
                            if (this.suppliers.length === 25) {
                                this.suppliers.pop();
                            }
                            this.suppliers.unshift({id: data.id, ...this.form});
                            console.log(this.suppliers)


                            $("#addSupplierModal").modal('hide');
                            clearForm(this.form)

                        } catch (e) {
                            console.log(e);
                            const errors = e.response?.data;
                            console.log(errors);
                            concatError(errors);
                        } finally {
                            this.isLoading = false;
                        }
                    }
                }))

                Alpine.data('supplier_list', () => ({
                    async fetchSuppliers() {
                        this.isFetching = true;
                        try {
                            const response = await axios_instance('/supplier')
                            const data = response.data;
                            console.log('data', data);
                            this.suppliers = data.data;
                            this.links = data.links;
                        } catch (e) {
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isFetching = false;
                        }

                    },
                    init() {
                        this.fetchSuppliers();

                    }
                }));

                Alpine.data('update_supplier_info', () => ({
                    isLoading: false,
                    supplier: [],
                    form: {
                        name: '',
                        phone: '',
                        email: '',
                        address: '',
                        category: '',
                        note: '',
                        id: ''
                    },
                    setSupplier(supp) {
                        this.supplier = supp;
                        this.form['supplier_id'] = supp.id;
                        this.form['name'] = supp.fullname;
                        this.form['phone'] = supp.phone;
                        this.form['email'] = supp.email;
                        this.form['address'] = supp.address;
                        this.form['category'] = supp.category;
                        this.form['note'] = supp.note;
                    },

                    async updateSupplier() {

                        this.isLoading = true;
                        try {
                            const response = await axios_instance.post('/supplier/update', this.form)
                            const data = response.data;
                            round_success_notification(data.message);


                            this.supplier['fullname'] = this.form['name'];
                            this.supplier['email'] = this.form['email'];
                            this.supplier['phone'] = this.form['phone'];
                            this.supplier['address'] = this.form['address'];
                            this.supplier['category'] = this.form['category'];
                            this.supplier['note'] = this.form['note'];

                            const index = this.suppliers.findIndex(supp => supp.id == this.supplier.id);
                            this.suppliers.splice(index, 1);
                            setTimeout(() => {
                                this.suppliers.unshift(this.supplier);
                            }, 0)
                            $("#updateSupplierModal").modal('hide');
                            setTimeout(() => {
                                document.querySelector(".breadcrumb-title").scrollIntoView()
                            }, 500)
                            clearForm(this.form);
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isLoading = false
                        }
                    }
                }));

                Alpine.data('deleteComponent', () => ({
                    id: '',
                    setSelectedSupplier(id) {
                        this.id = id;
                    },

                    removeSelectedSupplier() {
                        this.id = ''
                    },

                    deleteSupplier() {
                        console.log(this.id)
                        let index = this.suppliers.findIndex(supplier => supplier.id == this.id);
                        console.log(index);
                        this.suppliers.splice(index, 1);

                    }
                }));
            })
        </script>
    @endpushonce
</x-layouts.layout>
