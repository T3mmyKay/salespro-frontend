    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/notifications/js/notifications.min.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('assets/js/app.js')}}"></script>


    <script>
        const axios_instance = axios.create({
            baseURL: 'http://salespro-api.test/api',
            headers: {
                // 'X-CSRF-TOKEN': document.querySelector("meta[name='csrf-token']").getAttribute('content'),
                'Authorization': `Bearer {{session()->get('info')['access_token'] ?? ''}}`,
            }
        })
    </script>

