<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?></title>
    <?php echo $meta; ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
    <link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--[if lt IE 9]>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                                   <![endif]-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/colorbox.css" rel="stylesheet">
    <link href="assets/css/agenda.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php echo $header; ?>

        <?php echo $output; ?>

        <?php echo $footer; ?>
    </div>
    <!--wrapper end -->
</body>

</html>