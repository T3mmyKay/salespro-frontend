<!--sidebar wrapper -->
<x-layouts.sidebar/>
<!--end sidebar wrapper -->
<!--start header -->
<header>
    <x-layouts.topbar/>
</header>
<!--end header -->
<!--start page wrapper -->

{{$slot}}

<!--end page wrapper -->

<!--End Back To Top Button-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<a href="javaScript:void(0);" class="back-to-top">
    <i class='bx bxs-up-arrow-alt'></i>
</a>
<x-layouts.footer/>
