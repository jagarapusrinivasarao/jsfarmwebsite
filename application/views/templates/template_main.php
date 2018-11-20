<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- page header -->
<?php $this->load->view('templates/template_header'); ?>
<!-- /page header -->

<!-- page content -->
<?php $this->load->view($main_content); ?>
<!-- /page content -->

<!-- page footer -->
<?php $this->load->view('templates/template_footer'); ?>
<!-- /page footer -->
<script>
    /** After windod Load */
    $(window).bind("load", function () {
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 4000);
    });
</script>