<?php
	/** 
	 * Template Name: navigation
	 */

?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
            </button>
            <?php //home_url(); ?>
            <a class="navbar-brand" href="<?= home_url(); ?>/#page-top"><img src="<?= img_uri(); ?>logo-small.png"><span class="navi">BeGreen Company</span></a>
        </div>
    <?php //wp_nav_menu('top'); ?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about">A propos</a>
                </li>
                <li class="page-scroll">
                    <a href="#aviculture">Aviculture</a>
                </li>
                <li class="page-scroll">
                    <a href="#agriculture">Agriculture</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>