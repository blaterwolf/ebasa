<!-- 
| =======================================================================================
| SCRIPTS
| =======================================================================================
-->

<!-- jQuery JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Bundle JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- MetisMenu JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/metismenu/dist/metisMenu.min.js"></script>
<!-- SimpleBar JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/simplebar/dist/simplebar.min.js"></script>
<!-- Node Waves JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/node-waves/dist/waves.min.js"></script>
<!-- Parsley JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/parsleyjs/dist/parsley.min.js"></script>
<!-- Toastr JS -->
<script src="<?php echo base_url('assets/node_modules') ?>/toastr/build/toastr.min.js"></script>
<!-- App js -->
<script src="<?php echo base_url('assets') ?>/js/app.js"></script>

<!-- 
| =======================================================================================
| SCRIPTS FOR SESSIONED PAGES
| ---------------------------------------------------------------------------------------
| This has been done in order for the web app to load only necessary scripts thus improve
| loading time and performance
| =======================================================================================
-->

<?php if (isset($this->session->user_ID) && isset($this->session->user_type)) : ?>

<!-- DataTables JS -->
<script src="<?= base_url() ?>node_modules/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap JS -->
<script src="<?= base_url() ?>node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- QRCode.js -->
<script src="<?= base_url('assets/node_modules') ?>/qrcodejs/qrcode.min.js"></script>

<!-- HTML5-QRCode -->
<script src="<?= base_url() ?>node_modules/html5-qrcode/minified/html5-qrcode.min.js"></script>

<?php endif ?>

<!-- 
| =======================================================================================
| CUSTOM SCRIPT
| =======================================================================================
-->

<script src="<?= base_url('public/js') ?>/app.js"></script>

<!-- 
| =======================================================================================
| COMMON AND AJAX SCRIPTS
| ---------------------------------------------------------------------------------------
| * Common scripts are scripts loaded only for specific user
| * AJAX scripts are scripts loaded for handling and executing AJAX functions and methods
| =======================================================================================
-->

<!-- AJAX Scripts for all pages, ito yung search book soon -->

<!-- Common Scripts -->
<?php if (isset($dir)) : ?>
<script src="<?= base_url() . 'public/js/commons/' . $dir . '.common.js' ?>"></script>
<?php endif ?>

<!-- AJAX Scripts -->
<?php if (isset($AJAX_files) && $AJAX_files != []) foreach ($AJAX_files as $file) : ?>
<script src="<?= base_url('public/js/ajax/') . $dir . '/' .  $file ?>.ajax.js"></script>
<?php endforeach ?>
</body>

</html>