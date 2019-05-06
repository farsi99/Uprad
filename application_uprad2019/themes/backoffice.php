<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        ADMIN UPRAD
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="<?php echo base_url(); ?>assets/admin/Ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/admin/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/admin/css/skins/_all-skins.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js">     
        </script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"> </script>
   <![endif]-->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php echo $headerBO; ?>

        <?php echo $output; ?>

        <?php echo $footerBO; ?>
    </div>
</body>

</html>