<x-layouts.layout>
    <x-slot:title>
        register
    </x-slot:title>
    <div class="authentication-header"></div>
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-4 text-center">
                        <img src="{{asset('assets/images/logo-img.png')}}" width="180" alt=""/>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Register Your Business</h3>
                                    <p>Already have an account? <a href="login.php">Sign in here</a>
                                    </p>
                                </div>
                                <hr>
                                <div class="form-body" x-data="registration">
                                    <form class="row g-3" @submit.prevent="registerBusiness">
                                        <div class="col-sm-12">
                                            <label for="inputFirstName" class="form-label">Business Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                   x-model="form.name"
                                                   placeholder="Jhon">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                   x-model="form.email"
                                                   placeholder="example@user.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="" x-model="form.phone"
                                                   placeholder="0813938338">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                       x-model="form.password"
                                                       id="inputChoosePassword" value="12345678"
                                                       placeholder="Enter Password"> <a href="javascript:;"
                                                                                        class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Confirm
                                                Password</label>
                                            <div class="input-group" id="show_hide_password1">
                                                <input type="password" class="form-control border-end-0"
                                                       x-model="form.confirmPassword"
                                                       id="inputChoosePassword1" value="12345678"
                                                       placeholder="Enter Password"> <a href="javascript:;"
                                                                                        class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                                    and
                                                    agree to Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary" :disabled="isLoading"
                                                        x-html="isLoading ? spinner : `<i class='bx bx-user'></i>Register`">
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

    @pushonce('javascript-files')
        <!--Password show & hide js -->
        <script>
            $(document).ready(function () {
                $("#show_hide_password a").on('click', function (event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bx-hide");
                        $('#show_hide_password i').removeClass("bx-show");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bx-hide");
                        $('#show_hide_password i').addClass("bx-show");
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#show_hide_password1 a").on('click', function (event) {
                    event.preventDefault();
                    if ($('#show_hide_password1 input').attr("type") == "text") {
                        $('#show_hide_password1 input').attr('type', 'password');
                        $('#show_hide_password1 i').addClass("bx-hide");
                        $('#show_hide_password1 i').removeClass("bx-show");
                    } else if ($('#show_hide_password1 input').attr("type") == "password") {
                        $('#show_hide_password1 input').attr('type', 'text');
                        $('#show_hide_password1 i').removeClass("bx-hide");
                        $('#show_hide_password1 i').addClass("bx-show");
                    }
                });
            });
        </script>

        <script>
            document.addEventListener('alpine:init', _ => {
                Alpine.data('registration', _ => ({
                    isLoading: false,
                    form: {
                        name: 'NAO',
                        email: '',
                        phone: '',
                        password: '',
                        confirmPassword: '',
                    },
                    async registerBusiness() {
                        this.isLoading = true
                        try {
                            const response = await axios_instance.post('/create_business', this.form)
                            if (response) {
                                console.log(response.data)
                            }
                        } catch (e) {

                            console.log(e.response.data);
                        } finally {
                            this.isLoading = false;
                        }

                    }
                }));
            })
        </script>
    @endpushonce
</x-layouts.layout>
