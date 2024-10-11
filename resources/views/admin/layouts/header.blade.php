<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@stack('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png"  href="{{ asset('frontend-assets/img/favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
   <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="{{ asset('owner-assets/js/font.js') }}"></script>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/fontawesome-pro-5/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/slick/slick.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/magnific-popup/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/chartjs/Chart.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/dropzone/css/dropzone.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/timepicker/bootstrap-timepicker.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/mapbox-gl/mapbox-gl.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/vendors/dataTables/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/css/themes.css')}}">
        <link rel="stylesheet" href="{{ asset('owner-assets/css/admincustom.css')}}">
       
        <link rel="icon" href="{{ asset('owner-assets/img/favicon.png') }}"> 
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
    @stack('css')
</head>