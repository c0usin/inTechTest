<h1>Edit Page: #<?php echo $page->id; ?></h1>

<form action="" method="post" class="item-edit">
    <div>
        <div class="label">
            <label for="code">Code</label>
        </div>
        <div class="input">
            <input type="text" name="code" id="code" value="<?php echo $page->code; ?>">
        </div>
    </div>
    <div>
        <div class="label">
            <label for="name">Name</label>
        </div>
        <div class="input">
            <input type="text" name="name" id="name" value="<?php echo $page->name; ?>">
        </div>
    </div>
    <div>
        <div class="label">
            <label for="description">Description</label>
        </div>
        <div class="input">
            <textarea name="description" id="description"
                class="ckeditor"><?php echo $page->description; ?></textarea>
        </div>
    </div>
    <div>
        <div class="label">
            <label for="name">Is enabled</label>
        </div>
        <div class="input">
            <input type="checkbox" name="is_enabled" id="is_enabled" value="1"
                <?php echo ( ! empty( $page->is_enabled ) ? 'checked="checked"' : "" ); ?>>
        </div>
    </div>
    <div class="buttons">
        <div class="label">
            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages">
                Cancel
            </a>
        </div>
        <div class="input">
            <input type="submit" name="page-form" value="Save" />
        </div>
    </div>
</form>