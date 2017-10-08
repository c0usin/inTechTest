<?php

class AdminslidesController extends AdminController
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact slide
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// slide action renders "static" slides stored under 'protected/views/site/slides'
			// They can be accessed via: index.php?r=site/slide&view=FileName
			'slide'=>array(
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
        $this->data["slides"] = SlideModel::model()->getListForAdmin( 50 );

        // display the login form
        $this->render( '//slides/index', $this->data );
    }

    public function actionItem()
    {
        $slide_id = intval( ( ! empty( $_GET["id"] ) ? $_GET["id"] : 0 ) );

        $this->LoadSlide( $slide_id );
        $this->handlePost();

        // display the login form
        $this->render( '//slides/item/index', $this->data );
    }

    private function LoadSlide( $slide_id, $required = FALSE )
    {
        $slide = SlideModel::model()->findByPk( $slide_id );

        if( empty( $slide ) && ( ! empty( $slide_id ) || $required ) )
        {
            if( ! empty( $_POST["is_ajax"] ) )
            {
                Yii::app()->user->setFlash( "errorMessage", "Slide not found" );
                $this->redirect( Yii::app()->baseUrl . "/admin/slides" );
            }

            return FALSE;
        }

        if( empty( $slide ) )
        {
            $slide = new SlideModel();
        }

        $this->data["slide"] = $slide;
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

        $this->saveSlide();
    }

    private function validatePost()
    {
        $slideForm = new SlideForm();
        $slideForm->attributes = $_POST;

        if( ! $slideForm->validate() )
        {
            $this->data["errorMessage"] = $slideForm->getErrors();

            return FALSE;
        }

        return TRUE;
    }

    private function saveSlide()
    {
        $slide              = $this->data["slide"];
        $slide->code        = $_POST["code"];
        $new_file_name      = ( ! empty( $_FILES["file_name"]["name"] ) ? $_FILES["file_name"]["name"] : "" );
        $slide->is_enabled  = intval( ( isset( $_POST["is_enabled"] ) ? $_POST["is_enabled"] : 0 ) );

        if( ! $slide->save() )
        {
            $this->data["errorMessage"] = $slide->getErrors();
        }

        if( ! empty( $new_file_name ) )
        {
            $this->moveFile( $slide->id, $new_file_name );

            $slide->file_name = $new_file_name;
            $slide->save();
        }

        Yii::app()->user->setFlash( "successMessage", "Slide details saved" );

        $this->redirect( Yii::app()->baseUrl."/admin/slides/item/?id=".$slide->id );
    }

    private function moveFile( $slide_id, $new_file_name )
    {
        $temp_file_name = ( ! empty( $_FILES["file_name"]["tmp_name"] ) ? $_FILES["file_name"]["tmp_name"] : "" );
        $path           = "upload/slides/" . $slide_id . "/";

        if( empty( $temp_file_name ) )
        {
            return;
        }

        if( ! file_exists( $path ) || ! is_dir( $path ) )
        {
            mkdir( $path, 0777, TRUE );
        }

        @move_uploaded_file( $temp_file_name, $path . $new_file_name );
    }


    public function actionDelete()
    {
        $slide_id = intval( ( ! empty( $_GET["id"] ) ? $_GET["id"] : 0 ) );

        $this->LoadSlide( $slide_id );

        if( $this->data["slide"]->delete() )
        {
            Yii::app()->user->setFlash( "successMessage", "Slide deleted" );
        }

        $this->redirect( Yii::app()->baseUrl."/admin/slides/" );
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
        $slide_id    = intval( ( ! empty( $_POST["item_id"] ) ? $_POST["item_id"] : 0 ) );

        $this->LoadSlide( $slide_id );

        if( empty( $this->data["slide"] ) )
        {
            $result["message"] = "Slide not found";
            return $this->showResultForAjax( $result );
        }

        $this->data["slide"]->is_enabled = intval( ! $this->data["slide"]->is_enabled );

        if( ! $this->data["slide"]->save() )
        {
            $result["message"] = $this->data["slide"]->getErrors();
            return $this->showResultForAjax( $result );
        }

        $result["status"]   = "success";

        $this->showResultForAjax( $result );
    }
}
