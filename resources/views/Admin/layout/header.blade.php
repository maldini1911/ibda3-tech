<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield("title")</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/plugins/fontawesome-free/css/all.min.css">
  @if(App::getLocale() == 'en')
   <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="{{url('/')}}/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @elseif(App::getLocale() == 'ar')
   <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/rtl/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/rtl/AdminLTE.min.css">
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/rtl/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/rtl/custom-style.css">
  <link rel="stylesheet" href="{{url('/')}}/adminlte/css/rtl/persian-datepicker.min.css">
  <style>
 .sidebar-mini .nav-sidebar, .sidebar-mini .nav-sidebar .nav-link, .sidebar-mini .nav-sidebar > .nav-header
 {
  direction:rtl
 }
  </style>
  @endif

 <!-- DataTables -->
<link rel="stylesheet" href="{{url('/')}}/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{url('/')}}/adminlte/css/style.css">
@stack('css')
<style>
  .login-page{margin-top:50px}
  </style>

  <!-- Include this in your blade layout -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
@if(App::getLocale() == 'en')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed

{{ Request::is('admin/login') ? 'login-page' : '' }}
{{ Request::is('admin/register') ? 'register-page' : '' }}
{{ Request::is('admin/forget/password')  ? 'login-page' : '' }}
@isset($data->email) login-page @else '' @endisset
" @if(Request::is('admin/login')) style="background:#3AADE6" @endif>
@elseif(App::getLocale() == 'ar')
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed">
@endif
@include('sweet::alert')
<div class="wrapper">
