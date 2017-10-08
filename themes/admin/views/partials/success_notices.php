<?php

if( empty( $successMessage ) )
{
    return;
}
?>

<div class="notification">
    <div class="success">
        <?php
        if( is_string( $successMessage ) )
        {
            echo $successMessage;
        }
        else
        {
            foreach( $successMessage as $message )
            {
            ?>
                <div><?php echo implode( "<br />", $message ); ?></div>
            <?php
            }
        }
        ?>
    </div>
</div>
