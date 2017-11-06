<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('backend.layout.partials.htmlheader')
@show



<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('backend.layout.partials.mainheader')

    @include('backend.layout.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('backend.layout.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    @include('backend.layout.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('backend.layout.partials.script')
@show

</body>
</html>
