<?php

class AdminpagesController extends AdminController
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if( $error=Yii::app()->errorHandler->error )
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render( '//site/error', $error );
	    }
	}

	public function actionIndex()
    {
        $this->data["pages"] = PageModel::model()->getListForAdmin( 50 );

        // display the login form
        $this->render( '//pages/index', $this->data );
    }

	public function actionItem()
    {
        $page_id = intval( ( ! empty( $_GET["id"] ) ? $_GET["id"] : 0 ) );

        $this->LoadPage( $page_id );
        $this->handlePost();

        // display the login form
        $this->render( '//pages/item/index', $this->data );
    }

    private function LoadPage( $page_id, $required = FALSE )
    {
        $page = PageModel::model()->findByPk( $page_id );

        if( empty( $page ) && ( ! empty( $page_id ) || $required ) )
        {
            if( ! empty( $_POST["is_ajax"] ) )
            {
                Yii::app()->user->setFlash( "errorMessage", "Page not found" );
                $this->redirect( Yii::app()->baseUrl . "/admin/pages" );
            }

            return FALSE;
        }

        if( empty( $page ) )
        {
            $page = new PageModel();
        }

        $this->data["page"] = $page;
    }

    private function handlePost()
    {
        if( empty( $_POST ) )
        {
            return;
        }

        if( ! $this->validatePost() )
        {
            return;
        }

        $this->savePage();
    }

    private function validatePost()
    {
        $pageForm = new PageForm();
        $pageForm->attributes = $_POST;

        if( ! $pageForm->validate() )
        {
            $this->data["errorMessage"] = $pageForm->getErrors();

            return FALSE;
        }

        return TRUE;
    }

    private function savePage()
    {
        $page               = $this->data["page"];
        $page->code         = $_POST["code"];
        $page->name         = $_POST["name"];
        $page->description  = $_POST["description"];
        $page->is_enabled   = intval( ( isset( $_POST["is_enabled"] ) ? $_POST["is_enabled"] : 0 ) );

        if( ! $page->save() )
        {
            $this->data["errorMessage"] = $page->getErrors();
        }

        Yii::app()->user->setFlash( "successMessage", "Page details saved" );

        $this->redirect( Yii::app()->baseUrl."/admin/pages/item/?id=".$page->id );
    }

    public function actionDelete()
    {
        $page_id = intval( ( ! empty( $_GET["id"] ) ? $_GET["id"] : 0 ) );

        $this->LoadPage( $page_id );

        if( $this->data["page"]->delete() )
        {
            Yii::app()->user->setFlash( "successMessage", "Page deleted" );
        }

        $this->redirect( Yii::app()->baseUrl."/admin/pages/" );
    }

    public function actionAjaxwork()
    {
        $type   = intval( ( ! empty( $_POST["ajax_function"] ) ? $_POST["ajax_function"] : 0 ) );
        $result = array( "status" => 0 );

        switch( $type )
        {
            case 1:
                return $this->changeStatus();
        }

        $this->showResultForAjax( $result );
    }

    private function changeStatus()
    {
        $result     = array( "status" => "error" );
        $page_id    = intval( ( ! empty( $_POST["item_id"] ) ? $_POST["item_id"] : 0 ) );

        $this->LoadPage( $page_id );

        if( empty( $this->data["page"] ) )
        {
            $result["message"] = "Page not found";
            return $this->showResultForAjax( $result );
        }

        $this->data["page"]->is_enabled = intval( ! $this->data["page"]->is_enabled );

        if( ! $this->data["page"]->save() )
        {
            $result["message"] = $this->data["page"]->getErrors();
            return $this->showResultForAjax( $result );
        }

        $result["status"]   = "success";

        $this->showResultForAjax( $result );
    }
}
