<h1>Admin Pages</h1>

<div>
    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/item" class="new_item">
        Add new
    </a>
</div>
<br />

<?php
$dataProvider=new CActiveDataProvider('PageModel', array(
    'criteria' => array(
        'condition' => '',
        'order' => 'id DESC',
    ),
    'countCriteria'=>array(
        'condition' => '',
        // 'order' and 'with' clauses have no meaning for the count query
    ),
    'pagination' => array(
        'pageSize' => 20,
    ),
));

/*$this->widget(
    'zii.widgets.grid.CGridView',
    array(
        'dataProvider' => $dataProvider,
        'columns' => array(
            array(
                'id' => 'Id',
                'value'=> '$data->id'
            ),
            array(
                'name' => 'Name',
                'value'=> '$data->name'
            ),
        )
    )
);*/

$this->renderPartial( "//pages/pagesListing", $this->data );
?>

<div>
    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/item" class="new_item">
        Add new
    </a>
</div>
