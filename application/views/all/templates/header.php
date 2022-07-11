<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- Page Title -->
    <title><?= $title ?> | EBASA 📚 </title>

    <!-- 
    | =======================================================================================
    | META TAGS
    | =======================================================================================
    -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Angelo">
    <meta name="description" content="EBASA: Public Library Management System">

    <!-- EBASA Icon -->
    <link rel="icon" href="<?= base_url('assets') ?>/images/brand/ebasa_logo.png">

    <!-- 
    | =======================================================================================
    | CSS LINKS
    | =======================================================================================
    -->
    <!-- Bootstrap Custom CSS via SCSS-->
    <link href="<?php echo base_url('assets/css') ?>/custom.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons CSS -->
    <link href="<?php echo base_url('assets/css') ?>/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <!-- kailangan ko to sa may dashboard -->
    <!-- <link href="<?php echo base_url('assets/css') ?>/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> -->
    <!-- Toastr CSS -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/node_modules') ?>/toastr/build/toastr.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/node_modules') ?>/datatables/media/css/jquery.dataTables.min.css">

    <!-- 
    | =======================================================================================
    | SCRIPTS
    | =======================================================================================
    -->

    <!-- JQuery -->
    <script src="<?= base_url('assets/node_modules') ?>/jquery/dist/jquery.js"></script>

    <!-- jQuery Validation -->
    <script src="<?= base_url('assets/node_modules') ?>/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Moment JS -->
    <script src="<?= base_url('assets/node_modules') ?>/moment/min/moment.min.js"></script>

    <!-- Moment-Timer JS -->
    <script src="<?= base_url('assets/node_modules') ?>/moment-timer/lib/moment-timer.js"></script>

    <!-- QRCode.js -->
    <script src="<?= base_url('assets/node_modules') ?>/qrcodejs/qrcode.min.js"></script>

    <!-- 
    | =======================================================================================
    | CUSTOM-DEFINED SCRIPTS
    | =======================================================================================
    -->

    <!-- Constants -->
    <script src="<?= base_url('public') ?>/js/constant.js"></script>
</head>

<body class="user-select-none modal-open">

    <?php
    // Preloader 
    $this->load->view('all/components/preloader');

    // // Error Modal
    // $this->load->view('all/components/modals/error_modal');
    ?>