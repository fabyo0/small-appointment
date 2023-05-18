<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>DentCare Yönetim Paneli</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="{{ asset('site/images/favicon.png') }}" />
    <link href="{{ asset('/panel/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/panel/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('/panel/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/panel/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('/panel/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/panel/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" href="{{ asset('/panel/plugins/font-icons/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{ asset('/panel/plugins/font-icons/fontawesome/css/fontawesome.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/panel/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel/plugins/table/datatable/dt-global_style.css')}}">

    <link href="{{ asset('/panel/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/panel/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('/panel/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/panel/plugins/select2/select2.min.css">
    <script src="https://kit.fontawesome.com/a68cf04f4c.js" crossorigin="anonymous"></script>
    <style>
        .widget-content-area{
            border: unset !important;
        }
        .dataTables_wrapper{
            padding: 15px !important;
        }
    </style>
</head>
