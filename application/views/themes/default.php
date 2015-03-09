<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="description" content="TODO List - sample application for NetBeans IDE" />
    <meta name="keywords" content="NetBeans, PHP" />
    <meta name="author" content="NetBeans PHP team" />
    
    <?php require 'application/views/head.php'; ?>

    <link type="text/css" href="<?php echo base_url(); ?>assets/themes/default/css/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/themes/default/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/themes/default/css/layout.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap-responsive.css" rel="stylesheet">

</head>
<body id="page">
    <div class="tail-top-right"></div>
    <div id="main">
        <!-- header -->
        <div id="header"></div>
        <!-- content -->
        <div id="content">
            <div class="wrapper">
                <div class="col-1">
                    <div class="box">
                        <div class="inner">
<!--                            <div class="title"><a href="http://netbeans.org/features/php/">NetBeans IDE PHP</a></div>-->
                            <ul class="list">
<!--                                <li><span><a href="<?php echo site_url('todos');?>">Home</a></span></li>
                                <li><span><a href="<?php echo site_url('todos/status/pending');?>"
                                             ><img src="<?php echo base_url(); ?>assets/themes/default/images/status/PENDING.png" alt="" title="Pending TODOs" class="icon" />Pending TODOs</a></span></li>
                                <li><span><a href="<?php echo site_url('todos/status/done');?>"
                                             ><img src="<?php echo base_url(); ?>assets/themes/default/images/status/DONE.png" alt="" title="Done TODOs" class="icon" />Done TODOs</a></span></li>
                                <li><span><a href="<?php echo site_url('todos/status/voided');?>"
                                             ><img src="<?php echo base_url(); ?>assets/themes/default/images/status/VOIDED.png" alt="" title="Voided TODOs" class="icon" />Voided TODOs</a></span></li>-->
                                <li class="last"><span><a href="<?php echo site_url('contact');?>"
                                             ><img src="<?php echo base_url(); ?>assets/themes/default/images/action/add.png" alt="" title="Contact" class="icon" />Contact</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="indent">
                        <!--flashes go here-->

                        <?php echo $output; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div id="footer">
            <div class="indent">
                <div class="fleft"><a href="https://blogs.oracle.com/netbeansphp/">NetBeans PHP team</a>, 2011 &copy; Copyright Oracle corp., All rights reserved</div>
            </div>
        </div>
    </div>
</body>
</html>
