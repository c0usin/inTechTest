<h1>Edit Page: #<?php echo $slide->id; ?></h1>

<form action="" method="post" class="item-edit" enctype="multipart/form-data">
    <div>
        <div class="label">
            <label for="code">Code</label>
        </div>
        <div class="input">
            <input type="text" name="code" id="code" value="<?php echo $slide->code; ?>">
        </div>
    </div>
    <div>
        <div class="label">
            <label for="file_name">Name</label>
        </div>
        <div class="input">
            <input type="file" name="file_name" id="file_name" value="" />
            <?php
            if( ! empty( $slide->file_name ) )
            {
            ?>
                <div class="already_uploaded_image">
                    <div>Already uploaded</div>
                    <img src="<?php echo Yii::app()->baseUrl."/upload/slides/".$slide->id."/".$slide->file_name; ?>"
                        alt="<?php echo $slide->file_name; ?>">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div>
        <div class="label">
            <label for="name">Is enabled</label>
        </div>
        <div class="input">
            <input type="checkbox" name="is_enabled" id="is_enabled" value="1"
                <?php echo ( ! empty( $slide->is_enabled ) ? 'checked="checked"' : "" ); ?>>
        </div>
    </div>
    <div class="buttons">
        <div class="label">
            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides">
                Cancel
            </a>
        </div>
        <div class="input">
            <input type="submit" name="page-form" value="Save" />
        </div>
    </div>
</form>