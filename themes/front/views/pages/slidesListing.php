<?php
if( empty( $slides ) )
{
    return;
}
?>


<div class="content-wrapper">
    <div class="content">
        <div class="images-listing">
            <div class="cycle-slideshow carousel" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div"
                 data-allow-wrap="false" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-carousel-visible="3">
            <?php
            foreach( $slides as $slide )
            {
            ?>
                <div>
                    <div>
                        <a href="#">
                            <img src="<?php echo Yii::app()->baseUrl."/upload/slides/".$slide->id."/".$slide->file_name; ?>"
                                 alt="<?php echo $slide->file_name; ?>">
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>

            <div class="arrows">
                <a href="#" id="prev">
                    <i class="icon-left-arrow"></i>
                </a>
                <a href="#" id="next">
                    <i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</div>
