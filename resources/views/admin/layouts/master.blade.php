<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Zhiwar - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('admin/assets/img/favicon.ico') }}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
      <!-- Main Content -->
    @yield('content')
@include('admin.layouts.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>


</html>
