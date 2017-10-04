<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends Controller
{
	/**
	 * @var string the default layout for the controller view. Defaults to 'column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout = '//layouts/main';

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
        Yii::app()->theme = "admin";

        if( Yii::app()->user->isGuest && Yii::app()->controller->action->id != "login" )
        {
            $this->redirect( Yii::app()->baseUrl."/admin/users/login" );
        }

        $this->data = array(
            "menuItems" => array(
                'items' => array(
                    array( 'label' => 'Main Menu', 'url' => array( 'menu' ) ),
                    array( 'label' => 'Pages', 'url' => array( 'pages', 'view' => 'about' ), 'visible' => ! Yii::app()->user->isGuest  ),
                    array( 'label' => 'Navigations', 'url' => array( 'navigations' ), 'visible' => ! Yii::app()->user->isGuest  ),
                    array( 'label' => 'Categories', 'url' => array( 'categories' ), 'visible' => ! Yii::app()->user->isGuest ),
                    array( 'label' => 'Sliders', 'url' => array( 'sliders' ), 'visible' => ! Yii::app()->user->isGuest ),
                    array( 'label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array( 'users/logout'), 'visible' => ! Yii::app()->user->isGuest )
                ),
            ),
        );

        return TRUE;
    }
}