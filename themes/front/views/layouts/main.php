<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery/jquery-ui.1.12.1.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <div class="container" id="page">
        <div id="header">
        </div>
        <!-- header -->

        <?php
        $this->widget('zii.widgets.CBreadcrumbs',
            array( 'links'=>$this->breadcrumbs, )
        );
        ?>
        <!-- breadcrumbs -->

        <?php echo $content; ?>

        <div id="footer">
            <div class="content-wrapper">
                <div class="content">
                    <div class="copyright">
                        &copy; <?php echo date('Y'); ?> All Rights Reserved
                    </div>

                    <div class="pages-listing">
                        <ul>
                            <li>
                                <a href="#">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="separator">
                                |
                            </li>
                            <li>
                                <a href="#">
                                    Terms and Conditions
                                </a>
                            </li>
                            <li class="separator">
                                |
                            </li>
                            <li>
                                <a href="#">
                                    Sitemap
                                </a>
                            </li>
                            <li class="separator">
                                |
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="fallow-us">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/inSegment" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/inSegment" target="_blank">
                                    <i class="icon-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/insegment" target="_blank">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/insegment" target="_blank">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="logo-mini">
                        Powered by
                        <a href="http://intechdynamics.com/" target="_blank">
                            InTech
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
    </div>
    <!-- page -->

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-ui.1.11.4.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-cycle2.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-cycle2-carousel.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/lightbox.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>
</body>
</html>