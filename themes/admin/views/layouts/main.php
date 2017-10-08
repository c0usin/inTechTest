<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div class="container" id="page">
            <div id="header">
                <div id="logo"><?php echo CHtml::encode( Yii::app()->name ); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php $this->renderPartial( "//partials/menuListing", $this->data ); ?>
            </div><!-- mainmenu -->

            <?php
            $this->renderPartial( "//partials/error_notices", $this->data );
            $this->renderPartial( "//partials/success_notices", $this->data );
            $this->renderPartial( "//partials/breadcrumbs", $this->data );
            ?>

            <div id="content">
                <?php echo $content; ?>
            </div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by SC Saker Soft SRL-D.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div><!-- page -->


        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ckeditor/ckeditor.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-3.2.1.min.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-ui.1.11.4.min.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js" ></script>
    </body>
</html>