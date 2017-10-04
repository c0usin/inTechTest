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
        ?>
        <li>
            <a href="<?php echo $menuItem["url"][0]; ?>">
                <?php echo $menuItem["label"]; ?>
            </a>
        </li>
        <?php
    }
    ?>
</ul>