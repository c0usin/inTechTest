<?php

class AdminmenuController extends AdminController
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if( $error=Yii::app()->errorHandler->error )
	    {
	    	if( Yii::app()->request->isAjaxRequest )
	    		echo $error['message'];
	    	else
	        	$this->render( '//site/error', $error );
	    }
	}

	public function actionIndex()
	{
		$this->render( "//menu/index", $this->data );
	}
}
