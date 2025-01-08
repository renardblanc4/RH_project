<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GestionDoc')</title>
    <!-- AdminLTE CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('cripen.png') }}">
    <style>
        .content-wrapper {
            padding: 20px;
            margin-left: 0;
        }
        .main-header .navbar {
            margin-left: 0;
        }
    </style>
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <!-- AdminLTE JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
