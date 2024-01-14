<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | {{ $title }}</title>
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

        <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset ('assets/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/template/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset ('assets/template/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>

</head>

<body>

    @include('nav-foot.sidebar-admin')

    <div>
        @yield('isi-content')
    </div>

    @include('nav-foot.footer-admin')

    <script src="{{ asset('assets/template/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/template/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dataTable.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
</body>

</html>
