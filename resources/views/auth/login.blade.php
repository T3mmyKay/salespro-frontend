<x-layouts.layout>
    <x-slot:title>
        login
    </x-slot:title>


    <div class="authentication-header"></div>
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="{{asset('assets/images/logo-img.png')}}" width="180" alt=""/>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                    <p>Don't have an account yet? <a href="{{route('auth.register')}}">Register here</a>
                                    </p>
                                </div>
                                <hr>
                                <div class="form-body" x-data="login">
                                    <form class="row g-3" @submit.prevent="userLogin">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                   x-model="form.email"
                                                   placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                       id="inputChoosePassword" value="12345678" x-model="form.password"
                                                       placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent">
                                                    <i class='bx bx-hide'></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end"><a href="{{route('auth.forgot-password')}}">Forgot
                                                Password
                                                ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary" :disabled="isLoading"
                                                        x-html="isLoading ? spinner : `<i class='bx bxs-lock-open'></i>Sign in`"></button>
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
            document.addEventListener('alpine:init', () => {
                Alpine.data('login', () => ({
                    isLoading: false,
                    form: {
                        email: '',
                        password: '',
                    },
                    async userLogin() {
                        try {
                            this.isLoading = true;
                            const response = await axios_instance.post('/login', this.form)
                            const data = response.data
                            const sessionInformation = await axios.post(`${window.location.origin}/log-session`, {data})
                            console.log(2, sessionInformation);

                            round_success_notification(data.message);
                            setTimeout(() => {
                                window.location.href = `/dashboard`;
                            }, 1000)

                        } catch (e) {
                            const errors = e.response.data;
                            concatError(errors);
                        } finally {
                            this.isLoading = false;
                        }


                    }
                }));
            })
        </script>
    @endpushonce
</x-layouts.layout>
