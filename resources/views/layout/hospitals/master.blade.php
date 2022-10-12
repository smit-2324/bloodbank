<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?=env('SITE_URL');?>/admin-theme/assets/images/favicon_smallbyzloans.png" type="image/png" />
    <!--plugins-->
    <link href="<?=env('SITE_URL');?>/admin-theme/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
   <link href="<?=env('SITE_URL');?>/css/font.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
  <link href="<?=env('SITE_URL');?>/admin-theme/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=env('SITE_URL');?>/admin-theme/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->
    <link href="<?=env('SITE_URL');?>/admin-theme/assets/css/app.css" rel="stylesheet">
    <link href="<?=env('SITE_URL');?>/admin-theme/assets/css/icons.css" rel="stylesheet">
    <link href="<?=env('SITE_URL');?>/admin-theme/assets/css/custom.css" rel="stylesheet">
    <!-- <script src="{{ URL::to('admin-theme/assets/js/datephoneformat.js') }}"></script> -->

    <title>Online Blood Bank System</title>
<style>
.global-heading {
    font-family: 'Montserrat', sans-serif;
    font-size: 30px;
    font-weight: bold;
}
container-sm{
width: 85%;
    padding-right: var(--bs-gutter-x, .75rem);
    padding-left: var(--bs-gutter-x, .75rem);
    margin-right: auto;
    margin-left: auto;
}
</style>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

    @include('layout.hospitals.sidebar')

    @include('layout.hospitals.header')

            <div class="page-wrapper">
			<div class="page-content">
            <div class="card">
            <div class="card-body">
            <h1 class="global-heading">@yield('heading')</h1>
                    @yield('content')

</div>
            </div>

            </div>

            </div>








    </div>
    <!-- @stack('scripts') -->
    <!-- Bootstrap JS -->

    <script src="<?=env('SITE_URL');?>/admin-theme/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/js/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->



    <!-- <script src="{{ URL::to('admin-theme/assets/js/datephoneformat.js') }}"></script> -->
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="{{ URL::to('admin-theme/assets/js/cdnfile.js') }}"></script>
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/js/app.js"></script>
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/js/jquery.dataTables.min.js"  type="text/javascript"></script>
    <script src="<?=env('SITE_URL');?>/admin-theme/assets/plugins/chartjs/js/chartjs-custom.js"></script>


</body>
@stack('scripts')
</html>
