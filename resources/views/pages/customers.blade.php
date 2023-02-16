<x-layouts.layout>
    <x-slot:title>
        customers
    </x-slot:title>


    <x-layouts.content-layout>
        <div x-data="customers_app">
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
                                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
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
                                           placeholder="Search Customers">
                                    <span class="position-absolute top-50 product-show translate-middle-y">
                                    <i class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                       data-bs-toggle="modal" data-bs-target="#addCusModal">
                                        <i class="bx bxs-plus-square"></i>Add New Customer
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
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
                                    <tbody>
                                    <tr x-show.important="isFetching">
                                        <td colspan="7" class="text-center">
                                            <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <template x-for="(customer, index) in customers" :key="`customer_${index}`">
                                        <tr>
                                            <td x-text="index+1"></td>
                                            <td x-text="customer.fullname"></td>
                                            <td x-text="customer.phone"></td>
                                            <td x-text="customer.email"></td>
                                            <td x-text="customer.category"></td>
                                            <td><a href="" type="button"
                                                   class="btn btn-primary btn-sm radius-30 px-4">View</a></td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:void(0);" @click="$dispatch('showcustomerinfo',{customer})"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#updateCusModal">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="ms-3" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModal2">
                                                        <i class='bx bxs-trash'></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--end page wrapper -->
            <!-- modal start -->
            <div class="modal fade" id="addCusModal" tabindex="-1" aria-labelledby="addCusModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCusModalLabel">Add Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" id="addCusForm" @submit.prevent="addCustomer"
                                      novalidate>
                                    <div class="col-md-12">
                                        <label for="add_name" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" id="add_name" x-model="add_form.name"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_phone" class="form-label">Phone Number</label>
                                        <input type="number" inputmode="numeric" class="form-control" id="add_phone"
                                               x-model="add_form.phone"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="add_email" x-model="add_form.email"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="add_address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="add_address"
                                               x-model="add_form.address" required>
                                        <div class="invalid-feedback">Please provide a valid Address.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_category" class="form-label">Category</label>
                                        <select class="form-select" id="add_category" x-model="add_form.category">
                                            <option selected disabled value="">Choose...</option>
                                            <option>food</option>
                                            <option>business</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_note" class="form-label">Note</label>
                                        <textarea class="form-control" id="add_note" placeholder="Optional"
                                                  x-model="add_form.note"
                                                  required></textarea>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_referral" class="form-label">Referral</label>
                                        <input type="text" class="form-control" placeholder="Optional"
                                               x-model="add_form.referral"
                                               id="add_referral">
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" form="addCusForm"
                                    x-html="isSubmitting(isAdding,'Submit')"></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="updateCusModal" tabindex="-1" aria-labelledby="updateCusModalLabel" x-data="update_customer_info"
                 @showcustomerinfo.window="editCustomer($event.detail.customer)"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateCusModalLabel">Update Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" id="editCusForm" @submit.prevent="updateCustomer"
                                      novalidate>
                                    <div class="col-md-12">
                                        <label for="edit_name" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" id="edit_name" x-model="edit_form.name"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_phone" class="form-label">Phone Number</label>
                                        <input type="number" inputmode="numeric" class="form-control" id="edit_phone"
                                               x-model="edit_form.phone"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="edit_email"
                                               x-model="edit_form.email"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="edit_address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="edit_address"
                                               x-model="edit_form.address" required>
                                        <div class="invalid-feedback">Please provide a valid Address.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_category" class="form-label">Category</label>
                                        <select class="form-select" id="edit_category" x-model="edit_form.category">
                                            <option selected disabled value="">Choose...</option>
                                            <option>food</option>
                                            <option>business</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_note" class="form-label">Note</label>
                                        <textarea class="form-control" id="edit_note" placeholder="Optional"
                                                  x-model="edit_form.note"
                                                  required></textarea>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="editCusForm" type="submit"
                                    x-html="isSubmitting(isUpdating,'Update')"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
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
    @pushonce('javascript-files')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('customers_app', () => ({
                    customers: [],
                    links: [],
                    isFetching: false,
                    isAdding: false,
                    add_form: {
                        name: '',
                        phone: '',
                        address: '',
                        category: '',
                        note: '',
                        referral: '',
                    },

                    async fetchCustomers() {
                        this.isFetching = true
                        try {
                            const response = await axios_instance.get('/customer');
                            const data = response.data;
                            console.log(data)
                            this.customers = data.data;
                            this.links = data.links;
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data
                            concatError(errors);
                        } finally {
                            this.isFetching = false
                        }
                    },
                    init() {
                        this.fetchCustomers();
                    },

                    async addCustomer() {
                        this.isAdding = true;
                        try {
                            const response = await axios_instance.post('/customer/add', this.add_form);
                            const data = response.data;
                            console.log(data);
                            round_success_notification(data.message);
                            if (this.affiliates.length === 25) {
                                this.affiliates.pop();
                            }
                            renameKey(this.add_form, 'name', 'fullname')
                            this.customers.unshift({id: data.id, ...this.add_form});

                            $("#addCusModal").modal('hide');

                            clearForm(this.add_form);

                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isAdding = false
                        }
                    },

                }));

                Alpine.data('update_customer_info',()=>({
                    isUpdating: false,
                    customer: [],
                    edit_form: {
                        customer_id: '',
                        name: '',
                        phone: '',
                        address: '',
                        category: '',
                        note: '',
                    },

                    editCustomer(cus) {
                        this.customer = cus;

                        this.edit_form['customer_id'] = this.customer['id'];
                        this.edit_form['name'] = this.customer['fullname'];
                        this.edit_form['phone'] = this.customer['phone'];
                        this.edit_form['email'] = this.customer['email'];
                        this.edit_form['address'] = this.customer['address'];
                        this.edit_form['category'] = this.customer['category'];
                        this.edit_form['note'] = this.customer['note'];
                    },

                    async updateCustomer() {

                        this.isUpdating = true;
                        try {
                            const response = await axios_instance.post('/customer/update', this.edit_form)
                            const data = response.data;
                            round_success_notification(data.message);


                            this.customer['fullname'] = this.edit_form['name'];
                            this.customer['email'] = this.edit_form['email'];
                            this.customer['phone'] = this.edit_form['phone'];
                            this.customer['category'] = this.edit_form['category'];
                            this.customer['address'] = this.edit_form['address'];
                            this.customer['note'] = this.edit_form['note'];

                            const index = this.customers.findIndex(cus => cus.id == this.customer.id);
                            console.log(index);
                            this.customers.splice(index, 1);
                            setTimeout(() => {
                                this.customers.unshift(this.customer);
                            }, 0)
                            console.log(this.customers);
                            $("#updateCusModal").modal('hide');
                            clearForm(this.edit_form);
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isUpdating = false
                        }
                    }

                }))
            })
        </script>
    @endpushonce
</x-layouts.layout>
