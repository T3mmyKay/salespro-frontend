<x-layouts.layout>
    <x-slot:title>
        categories
    </x-slot:title>
    <x-layouts.content-layout>
        <div x-data="product_categories">
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Categories</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                           placeholder="Search Business">
                                    <span class="position-absolute top-50 product-show translate-middle-y"><i
                                            class="bx bx-search"></i></span>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-primary radius-30 mt-2 mt-lg-0"
                                       data-bs-toggle="modal" data-bs-target="#addCatModal">
                                        <i class="bx bxs-plus-square"></i>
                                        Add Category</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>SN</th>
                                        <th>Category Name</th>
                                        <th> Description</th>
                                        <th>View Details</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <template x-for="(category, index) in categories" :key="`category_${index}`">
                                        <tr>
                                            <td x-text="index+1"></td>
                                            <td x-text="category.name"></td>
                                            <td x-text="category.description"></td>
                                            <td><a href="" type="button" class="btn btn-primary btn-sm radius-30 px-4">Details</a>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:void(0);" class="" data-bs-toggle="modal"
                                                       @click="editCat(category)"
                                                       data-bs-target="#updateCatModal">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <a href="javascript:;" class="ms-3" data-bs-toggle="modal"
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
            <!-- modal start -->
            <div class="modal fade" id="addCatModal" tabindex="-1" aria-labelledby="addCatModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCatModalLabel">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4">
                                <form class="row g-3 needs-validation" id="addCatForm" novalidate
                                      @submit.prevent="addCategory">

                                    <div class="col-md-12">
                                        <label for="add_cat_name" class="form-label"> Category Name</label>
                                        <input type="text" class="form-control" id="add_cat_name"
                                               x-model="add_form.name"
                                               required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="add_cat_desc" class="form-label">Description</label>
                                        <textarea type="" class="form-control" id="add_cat_desc" placeholder="Optional"
                                                  x-model="add_form.description"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="addCatForm" type="submit"
                                    x-html="isSubmitting(isAdding,'Submit')"></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="updateCatModal" tabindex="-1" aria-labelledby="updateCatModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateCatModalLabel">Update category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="p-4">
                                <form class="row g-3 needs-validation" id="updateCatForm" novalidate
                                      @submit.prevent="updateCat">

                                    <div class="col-md-12">
                                        <label for="add_cat_name" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="edit_cat_name"
                                               x-model="edit_form.name"
                                               required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="edit_cat_desc" class="form-label">Description</label>
                                        <textarea type="" class="form-control" id="edit_cat_desc"
                                                  x-model="edit_form.description"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="updateCatForm" type="submit"
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
                            <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
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
        </div>
    </x-layouts.content-layout>

    @pushonce('javascript-files')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('product_categories', () => ({
                    isAdding: false,
                    isUpdating: false,
                    isFetching: false,
                    categories: [],
                    category: {},
                    links: [],
                    add_form: {
                        name: '',
                        description: '',
                    },
                    edit_form: {
                        category_id: '',
                        name: '',
                        description: '',
                    },

                    init() {
                        this.fetchCategories();
                    },

                    async addCategory() {
                        this.isAdding = true;

                        await axios_instance.post('/product_category/add', this.add_form)
                            .then(response => {
                                const data = response.data;
                                round_success_notification(data.message);
                                console.log(data)
                                this.categories.unshift({id: data.id, ...this.add_form});
                                $("#addCatModal").modal('hide');

                                clearForm(this.add_form);
                            }).catch(e => {
                                console.log(e);
                                const errors = e?.response?.data;
                                concatError(errors);
                            }).finally(_ => this.isAdding = false);

                    },

                    async fetchCategories() {
                        this.isFetching = true;

                        await axios_instance.get('/product_category')
                            .then(response => {
                                const data = response.data;
                                console.log(data)
                                this.categories = data.data;
                                this.links = data.links;
                            }).catch(e => {
                                console.log(e);
                                const errors = e?.response?.data;
                                concatError(errors);
                            }).finally(_ => this.isFetching = false);
                    },

                    editCat(cat) {
                        this.affiliate = cat;

                        this.edit_form['category_id'] = this.category['id'];
                        this.edit_form['name'] = this.category['name'];
                        this.edit_form['description'] = this.category['description'];
                    },

                    async updateCat() {
                        this.isUpdating = true;
                        console.log(this.edit_form)
                        await axios_instance.post('/product_category/update', this.edit_form)
                            .then(response => {
                                const data = response.data;
                                round_success_notification(data.message);

                                this.category['name'] = this.edit_form['name'];
                                this.category['description'] = this.edit_form['description'];
                                this.category['id'] = this.edit_form['category_id'];
                                console.log(this.category);
                                const index = this.categories.findIndex(cat => cat.id == this.category.id);
                                console.log(index);
                                this.categories.splice(index, 1);
                                setTimeout(() => {
                                    this.categories.unshift(this.category);
                                }, 0)
                                console.log(this.categories);
                                $("#updateCatModal").modal('hide');
                                clearForm(this.edit_form);
                            }).catch(e => {
                                console.log(e);
                                const errors = e?.response?.data;
                                concatError(errors);
                            }).finally(_ => this.isUpdating = false);

                    },
                }))
            })
        </script>
    @endpushonce
</x-layouts.layout>
