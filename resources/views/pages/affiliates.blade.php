<x-layouts.layout>
    <x-slot:title>
        affiliate
    </x-slot:title>


    <x-layouts.content-layout>
        <div x-data="app">
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
                                    <li class="breadcrumb-item active" aria-current="page">Affiliates</li>
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
                                           placeholder="Search Customers"> <span
                                        class="position-absolute top-50 product-show translate-middle-y"><i
                                            class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                       data-bs-toggle="modal" data-bs-target="#addAffModal"><i
                                            class="bx bxs-plus-square"></i>
                                        Add New Affiliates
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
                                    <template x-for="(aff, index) in affiliates" :key="`affiliate_${index}`">
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 font-14" x-text="index+=1"></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td x-text="aff.fullname"></td>
                                            <td x-text="aff.phone"></td>
                                            <td x-text="aff.email"></td>
                                            <td x-text="aff.category"></td>
                                            <td>
                                                <a href="" type="button"
                                                   class="btn btn-primary btn-sm radius-30 px-4">View</a>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:;" class="" data-bs-toggle="modal"
                                                       data-bs-target="#editAffModal" @click="editAffiliate(aff)"><i
                                                            class='bx bxs-edit'></i></a>
                                                    <a href="javascript:;" class="ms-3" data-bs-toggle="modal"
                                                       data-bs-target="#deleteAffModal"><i class='bx bxs-trash'></i></a>
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
            <!--start overlay-->
            <!-- modal start -->
            <div class="modal fade" id="addAffModal" tabindex="-1" aria-labelledby="addAffModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addAffModalLabel">Add Affiliates</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate id="addAffForm"
                                      @submit.prevent="addAffiliates">
                                    <div class="col-md-12">
                                        <label for="fullname" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" id="fullname" x-model="add_form.name"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="number" inputmode="numeric" class="form-control" id="phone"
                                               x-model="add_form.phone"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" x-model="add_form.email"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" x-model="add_form.address"
                                               required>
                                        <div class="invalid-feedback">Please provide a valid Address.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" id="category" x-model="add_form.category"
                                                placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                            <option>content</option>
                                            <option>business</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="note" class="form-label">Note</label>
                                        <textarea class="form-control" id="note" x-model="add_form.note"
                                                  placeholder="Optional"
                                                  required></textarea>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="referral" class="form-label">Referral</label>
                                        <input type="text" class="form-control" x-model="add_form.referral"
                                               placeholder="Optional"
                                               id="referral">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" form="addAffForm"
                                    x-html="isSubmitting(isAdding,'Submit')"></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="editAffModal" tabindex="-1" aria-labelledby="editAffModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editAffModalLabel">Update Affiliates</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate id="editAffForm"
                                      @submit.prevent="updateAfilliate">
                                    <div class="col-md-12">
                                        <label for="edit_name" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" id="edit_name" x-model="edit_form.name"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_phone" class="form-label">Phone Number</label>
                                        <input type="number" inputmode="numeric" class="form-control" id="edit_phone"
                                               x-model="edit_form.phone" required>
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
                                        <select class="form-select" id="edit_category" x-model="edit_form.category"
                                                placeholder="optional">
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                            <option>business</option>
                                            <option>marketing</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Category.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_note" class="form-label">Note</label>
                                        <textarea class="form-control" id="edit_note" x-model="edit_form.note"
                                                  placeholder="Optional"
                                                  required></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" form="editAffForm"
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
                            <h5 class="modal-title" id="exampleModalLabel">Delete Affiliate</h5>
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
                Alpine.data('app', () => ({
                    affiliates: [],
                    links: [],
                    affiliate: {},
                    isFetching: false,
                    isAdding: false,
                    isUpdating: false,
                    add_form: {
                        name: '',
                        phone: '',
                        address: '',
                        category: '',
                        note: '',
                        referral: '',
                    },
                    edit_form: {
                        affiliate_id: '',
                        name: '',
                        phone: '',
                        address: '',
                        category: '',
                        note: '',
                    },
                    async fetchAffiliates() {
                        this.isFetching = true
                        try {
                            const response = await axios_instance.get('/affiliate');
                            const data = response.data;
                            console.log(data)
                            this.affiliates = data.data;
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
                        this.fetchAffiliates();
                    },

                    async addAffiliates() {
                        this.isAdding = true;
                        try {
                            const response = await axios_instance.post('/affiliate/add', this.add_form);
                            const data = response.data;
                            console.log(data);
                            round_success_notification(data.message);
                            if (this.affiliates.length === 25) {
                                this.affiliates.pop();
                            }
                            renameKey(this.add_form, 'name', 'fullname')
                            this.affiliates.unshift({id: data.id, ...this.add_form});

                            $("#addAffModal").modal('hide');

                            clearForm(this.add_form);

                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isAdding = false
                        }
                    },

                    editAffiliate(aff) {
                        this.affiliate = aff;

                        this.edit_form['affiliate_id'] = this.affiliate['id'];
                        this.edit_form['name'] = this.affiliate['fullname'];
                        this.edit_form['phone'] = this.affiliate['phone'];
                        this.edit_form['email'] = this.affiliate['email'];
                        this.edit_form['address'] = this.affiliate['address'];
                        this.edit_form['category'] = this.affiliate['category'];
                        this.edit_form['note'] = this.affiliate['note'];
                    },

                    async updateAfilliate() {

                        this.isUpdating = true;
                        try {
                            const response = await axios_instance.post('/affiliate/update', this.edit_form)
                            const data = response.data;
                            round_success_notification(data.message);


                            this.affiliate['fullname'] = this.edit_form['name'];
                            this.affiliate['email'] = this.edit_form['email'];
                            this.affiliate['phone'] = this.edit_form['phone'];
                            this.affiliate['category'] = this.edit_form['category'];
                            this.affiliate['address'] = this.edit_form['address'];
                            this.affiliate['note'] = this.edit_form['note'];

                            const index = this.affiliates.findIndex(aff => aff.id == this.affiliate.id);
                            console.log(index);
                            this.affiliates.splice(index, 1);
                            setTimeout(() => {
                                this.affiliates.unshift(this.affiliate);
                            }, 0)
                            // this.staffs.unshift(this.staff);
                            console.log(this.affiliates);
                            $("#editAffModal").modal('hide');
                            clearForm(this.edit_form);
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isUpdating = false
                        }
                    }

                }));
            })
        </script>
    @endpushonce
</x-layouts.layout>
