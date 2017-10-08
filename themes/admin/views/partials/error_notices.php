<?php

if( empty( $errorMessage ) )
{
    return;
}
?>

<div class="notification">
    <div class="error">
        <?php
        if( is_string( $errorMessage ) )
        {
            echo $errorMessage;
        }
        else
        {
            foreach( $errorMessage as $message )
            {
            ?>
                <div><?php echo implode( "<br />", $message ); ?></div>
            <?php
            }
        }
        ?>
    </div>
</div>
