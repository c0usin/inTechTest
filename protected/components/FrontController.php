<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class FrontController extends Controller
{
	/**
	 * @var string the default layout for the controller view. Defaults to 'column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout = 'main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu = array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();

    protected $data     = array();

    protected function beforeAction( $action )
    {
        Yii::app()->theme = "front";

        /*$this->data = array(
            "menuItems" => array(
                'items' => array(
                    array( 'label' => 'Main Menu', 'url' => array( 'admin/menu' ) ),
                    array( 'label' => 'Pages', 'url' => array( 'admin/pages', 'view' => 'about' ), 'visible' => ! Yii::app()->user->isGuest  ),
                    array( 'label' => 'Navigations', 'url' => array( 'admin/navigations' ), 'visible' => ! Yii::app()->user->isGuest  ),
                    array( 'label' => 'Categories', 'url' => array( 'admin/categories' ), 'visible' => ! Yii::app()->user->isGuest ),
                    array( 'label' => 'Sliders', 'url' => array( 'admin/sliders' ), 'visible' => ! Yii::app()->user->isGuest ),
                    array( 'label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array( 'admin/users/logout'), 'visible' => ! Yii::app()->user->isGuest )
                ),
            ),
        );*/

        if( Yii::app()->user->hasFlash( "errorMessage" ) )
        {
            $this->data["errorMessage"] = Yii::app()->user->getFlash( "errorMessage" );
        }

        if( Yii::app()->user->hasFlash( "successMessage" ) )
        {
            $this->data["successMessage"] = Yii::app()->user->getFlash( "successMessage" );
        }

        return TRUE;
    }
}