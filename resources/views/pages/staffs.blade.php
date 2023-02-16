<x-layouts.layout>
    <x-slot:title>
        staffs
    </x-slot:title>
    <x-layouts.content-layout>
        <!--end header -->

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Staffs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end breadcrumb-->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-5 radius-30" placeholder="Search Staff">
                                    <span class="position-absolute top-50 product-show translate-middle-y"><i
                                            class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                       data-bs-toggle="modal" data-bs-target="#addStaffModal">
                                        <i class="bx bxs-plus-square"></i>
                                        Add New Staff</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="addStaffModal" tabindex="-1"
                                     aria-labelledby="addStaffModalLabel" aria-hidden="true" x-data="add_staff">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addStaffModalLabel">Add Staff</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="p-4 border rounded">
                                                    <form class="row g-3 needs-validation" @submit.prevent="addStaff"
                                                          novalidate id="addStaffForm">
                                                        <div class="col-md-12">
                                                            <label for="firstname"
                                                                   class="form-label">Firstname</label>
                                                            <input type="text" class="form-control"
                                                                   id="firstname" x-model="form.firstname" required>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="lastname"
                                                                   class="form-label">Lastname</label>
                                                            <input type="text" class="form-control"
                                                                   id="lastname" x-model="form.lastname" required>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="dob" class="form-label">Date Of Birth</label>
                                                            <input type="date" id="dob" x-model="form.date_of_birth"
                                                                   class="form-control"/>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="phone" class="form-label">Phone
                                                                Number</label>
                                                            <input type="number" inputmode="numeric"
                                                                   class="form-control"
                                                                   id="phone" x-model="form.phone" required>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="email"
                                                                   class="form-label">Email</label>
                                                            <input type="email" class="form-control"
                                                                   id="email" x-model="form.email" required>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="address"
                                                                   class="form-label">Address</label>
                                                            <input type="text" class="form-control"
                                                                   id="address" x-model="form.address" required>
                                                            <div class="invalid-feedback">Please provide a valid
                                                                Address.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="user_role"
                                                                   class="form-label">Role</label>
                                                            <select class="form-select" id="user_role"
                                                                    x-model="form.role" required>
                                                                <option selected disabled value="">select user role
                                                                </option>
                                                                <option value="1">Administrator</option>
                                                                <option value="2">Stock Manager</option>
                                                                <option value="3">Sales Rep</option>
                                                                <option value="4">Accountant</option>
                                                                <option value="5">Auditor</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please select a valid Role.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="appointment_date"
                                                                   class="form-label">Appointment Date</label>
                                                            <input type="date" x-model="form.appointment_date"
                                                                   class="form-control"
                                                                   id="appointment_date" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="validationCustom04"
                                                                   class="form-label">Appointment Type</label>
                                                            <select class="form-select" id="validationCustom04"
                                                                    x-model="form.appointment_type" required>
                                                                <option selected disabled value="">appointment type
                                                                </option>
                                                                <option>Full-time</option>
                                                                <option value="">Part-time</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="staff_note"
                                                                   class="form-label">Note</label>
                                                            <textarea id="staff_note" class="form-control"
                                                                      x-model="form.note"
                                                                      placeholder="Optional"></textarea>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="submit" form="addStaffForm"
                                                        x-html="isSubmitting(isLoading,'Submit')"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>FullName</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Role</th>
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
                                    <template x-for="(staff, index) in staffs" :key="`staff_${index}`">
                                        <tr>
                                            <td x-text="index+=1"></td>
                                            <td x-text="`${staff.firstname} ${staff.lastname}`"></td>
                                            <td x-text="staff.phone"></td>
                                            <td x-text="staff.email"></td>
                                            <td x-text="setRole(staff.role)"></td>
                                            <td>
                                                <a href="" type="button"
                                                   class="btn btn-primary btn-sm radius-30 px-4">View</a>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:void(0);" class="" data-bs-toggle="modal"
                                                       @click="$dispatch('showstaffinfo',{staff})"
                                                       data-bs-target="#editStaffModal">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="ms-3" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModal2"><i class='bx bxs-trash'></i></a>
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
            <div class="overlay toggle-icon"></div>
            <!-- modal starts -->
            <div class="modal fade" id="editStaffModal" tabindex="-1" aria-labelledby="editStaffModalLabel"
                 x-data="edit_staff" @showstaffinfo.window="setInformation($event.detail.staff)"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editStaffModalLabel">Update Staff</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate id="updateStaffForm"
                                      @submit.prevent="updateStaff">
                                    <div class="col-md-12">
                                        <label for="edit_firstname" class="form-label">Firstname</label>
                                        <input type="text" class="form-control" id="edit_firstname"
                                               x-model="form.firstname"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_lastname" class="form-label">Lastname</label>
                                        <input type="text" class="form-control" id="edit_lastname"
                                               x-model="form.lastname"
                                               required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="edit_dob">Date Of Birth</label>
                                        <input type="date" class="form-control" x-model="form.date_of_birth"
                                               id="edit_dob"/>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label">Phone Number</label>
                                        <input type="number" inputmode="numeric" class="form-control"
                                               id="validationCustom02" x-model="form.phone"
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
                                        <input type="text" class="form-control" id="edit_address" x-model="form.address"
                                               required>
                                        <div class="invalid-feedback">Please provide a valid Address.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_role" class="form-label">Role</label>
                                        <select class="form-select" id="edit_role" x-model="form.role" required>
                                            <option selected disabled value="">select user role</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Stock Manager</option>
                                            <option value="3">Sales Rep</option>
                                            <option value="4">Accountant</option>
                                            <option value="5">Auditor</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid Role.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="edit_appointment_date" class="form-label">Appointment Date</label>
                                        <input type="date" class="form-control" id="edit_appointment_date"
                                               x-model="form.appointment_date" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="edit_appointment_type" class="form-label">Appointment Type</label>
                                        <select class="form-select" id="edit_appointment_type"
                                                x-model="form.appointment_type" required>
                                            <option selected disabled value="">user role</option>
                                            <option>Full-time</option>
                                            <option value="">Part-time</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_note" class="form-label">Note</label>
                                        <textarea class="form-control" id="edit_note" x-model="form.note"
                                                  placeholder="Optional"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" form="updateStaffForm"
                                    x-html="isSubmitting(isLoading,'Update')"></button>
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
            <!--end overlay-->
        </div>
        <!--Start Back To Top Button-->
    </x-layouts.content-layout>


    @pushonce('javascript-files')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('selected_staff', {
                    staff: {},
                });

                Alpine.data('app', () => ({
                    staffs: [],
                    links: [],
                    isFetching: false,
                    init() {
                        this.fetchSuppliers();
                    },
                    async fetchSuppliers() {
                        this.isFetching = true
                        try {
                            const response = await axios_instance.get('/staff');
                            const data = response.data;
                            console.log(data)
                            this.staffs = data.data;
                            this.links = data.links;
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data
                            concatError(errors);
                        } finally {
                            this.isFetching = false
                        }
                    },
                    setRole(role) {
                        const roles = {
                            1: 'administrator',
                            2: 'stock-manager',
                            3: 'sales-rep',
                            4: 'accountant',
                            5: 'auditor'
                        };
                        const roleMapper = (role) => roles[role];
                        return roleMapper(role);

                    }
                }));


                Alpine.data('add_staff', () => ({
                    isLoading: false,
                    form: {
                        firstname: '',
                        lastname: '',
                        phone: '',
                        email: '',
                        role: '',
                        address: '',
                        note: '',
                        date_of_birth: '',
                        appointment_date: '',
                        appointment_type: '',
                    },
                    async addStaff() {
                        this.isLoading = true;
                        try {
                            const response = await axios_instance.post('/staff/add', this.form);
                            const data = response.data;
                            console.log(data);
                            round_success_notification(data.message);
                            if (this.staffs.length === 25) {
                                this.staffs.pop();
                            }
                            this.staffs.unshift({id: data.id, ...this.form});

                            $("#addStaffModal").modal('hide');

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

                Alpine.data('edit_staff', () => ({
                    staff: {},
                    form: {
                        staff_id: '',
                        firstname: '',
                        lastname: '',
                        phone: '',
                        email: '',
                        role: '',
                        address: '',
                        note: '',
                        date_of_birth: '',
                        appointment_date: '',
                        appointment_type: '',
                    },
                    isLoading: false,
                    setInformation(staff) {
                        this.staff = staff;
                        this.form.staff_id = staff.id;
                        this.form.firstname = staff.firstname;
                        this.form.lastname = staff.lastname;
                        this.form.phone = staff.phone;
                        this.form.email = staff.email;
                        this.form.role = staff.role;
                        this.form.address = staff.address;
                        this.form.note = staff.note;
                        this.form.date_of_birth = staff.date_of_birth;
                        this.form.appointment_date = staff.appointment_date;
                        this.form.appointment_type = staff.appouitment_type;
                    },

                    async updateStaff() {

                        this.isLoading = true;
                        try {
                            const response = await axios_instance.post('/staff/update', this.form)
                            const data = response.data;
                            round_success_notification(data.message);


                            this.staff['firstname'] = this.form['firstname'];
                            this.staff['lastname'] = this.form['lastname'];
                            this.staff['email'] = this.form['email'];
                            this.staff['phone'] = this.form['phone'];
                            this.staff['role'] = this.form['role'];
                            this.staff['address'] = this.form['address'];
                            this.staff['date_of_birth'] = this.form['date_of_birth']
                            this.staff['appointment_date'] = this.form['appointment_date'];
                            this.staff['appointment_type'] = this.form['appointment_type'];
                            this.staff['note'] = this.form['note'];

                            const index = this.staffs.findIndex(st => st.id == this.staff.id);
                            console.log(index);
                            this.staffs.splice(index, 1);

                            setTimeout(() => {
                                this.staffs.unshift(this.staff)
                            }, 0);
                            console.log(this.staffs);
                            $("#editStaffModal").modal('hide');
                            clearForm(this.form);
                        } catch (e) {
                            console.log(e);
                            const errors = e?.response?.data;
                            concatError(errors);
                        } finally {
                            this.isLoading = false
                        }
                    }

                }))
            })
        </script>
    @endpushonce
</x-layouts.layout>
