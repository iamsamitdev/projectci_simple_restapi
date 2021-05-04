<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?> | Smart Stock</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/frontend/img/favicon.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <?php 
		$this->load->view('frontend/includes/default_css');
	?>

</head>
<body>
    <?php 
		$this->load->view('frontend/includes/header');
		$this->load->view($main_content);
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php
        $this->load->view('frontend/includes/footer');
        $this->load->view('frontend/includes/default_script');
	?>
</body>
</html>