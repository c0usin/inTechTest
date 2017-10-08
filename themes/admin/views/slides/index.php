<h1>Admin Slides</h1>

<div>
    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides/item" class="new_item">
        Add new
    </a>
</div>
<br />

<?php
$dataProvider=new CActiveDataProvider('SlideModel', array(
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

$this->renderPartial( "//slides/slidesListing", $this->data );
?>

<div>
    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides/item" class="new_item">
        Add new
    </a>
</div>
