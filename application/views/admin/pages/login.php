<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>E-Shop Login Panel</title>
    <meta name="description" content="E-Shop Login Panel">
    <meta name="author" content="Rostom Ali">
    <meta name="keyword" content="E-Shop Login Panel">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link id="base-style-responsive" href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        .login-form .remember {
            margin-bottom: 10px;
            display: block;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #23527c;
        }
    </style>


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="<?php echo base_url()?>assets/admin/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="<?php echo base_url()?>assets/admin/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/img/favicon.jpg">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background-color: skyblue; }
        </style>



</head>

<body>
    <div class="container">
        <div class="login-logo">E-Shop Login Panel</div>
        <div id="result">
            <p><?php echo $this->session->flashdata('message');?></p>
        </div>
        <form class="login-form" action="<?php echo base_url()?>admin_login_check" method="post">
        <?php

        $csrf = array(

        'name' => $this->security->get_csrf_token_name(),

        'hash' => $this->security->get_csrf_hash()

        );

        ?>

    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />          
            <label for="user_email">Email</label>
            <input type="text" id="user_email" name="user_email" placeholder="Enter your email">

            <label for="user_password">Password</label>
            <input type="password" id="user_password" name="user_password" placeholder="Enter your password">

            <div class="remember">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>

            <button type="submit">Admin Login</button>
        </form>
    </div>
</body>
</html>