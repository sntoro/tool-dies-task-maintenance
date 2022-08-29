<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/assets/css/style_login.css'); ?>" rel="stylesheet" />
    <link rel="icon" href="<?php echo base_url('/assets/image/icon.png'); ?>">
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>" ></script>
    <script src="<?php echo base_url('/assets/js/axios.min.js'); ?>" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div class="container py-4">

        <!-- <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h4 class="display-5"></h4>
            </div>
        </div> -->

        <?php $this->load->view($content); ?>

    </div>
    
</body>

</html>