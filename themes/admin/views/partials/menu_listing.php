<?php
if( empty( $menuItems["items"] ) )
{
    return;
}
?>

<ul>
    <?php
    foreach( $menuItems["items"] as $menuItem )
    {
        $visible = TRUE;

        if( isset( $menuItem["visible"] ) )
        {
            $visible = $menuItem["visible"];
        }

        if( $visible )
        {
        ?>
            <li>
                <a href="<?php echo Yii::app()->baseUrl."/".$menuItem["url"][0]; ?>">
                    <?php echo $menuItem["label"]; ?>
                </a>
            </li>
        <?php
        }
    }
    ?>
</ul>