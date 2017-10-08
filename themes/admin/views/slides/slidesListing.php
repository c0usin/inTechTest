<div id="yw0" class="grid-view items-listing">
    <div class="summary">Displaying 1-1 of 1 result.</div>
    <table class="items">
        <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Code</th>
                <th>File name</th>
                <th class="is_enabled">Is enabled</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if( ! empty( $slides ) )
            {
                foreach( $slides as $slide )
                {
                ?>
                    <tr>
                        <td>
                            <?php
                            if( ! empty( $slide->file_name ) )
                            {
                            ?>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl . "/upload/slides/" . $slide->id . "/" . $slide->file_name; ?>"
                                        alt="<?php echo $slide->file_name; ?>">
                                </div>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $slide->id; ?>
                        </td>
                        <td><?php echo $slide->code; ?></td>
                        <td><?php echo $slide->file_name; ?></td>
                        <td class="item_enabled">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides/ajaxwork"
                                class="back-<?php echo ( $slide->is_enabled ? "green" : "red" ); ?>"
                                data-item-id="<?php echo $slide->id; ?>">
                                <i class="<?php echo ( $slide->is_enabled ? "enabled" : "disabled" ); ?>"></i>
                            </a>
                        </td>
                        <td class="actions">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides/item/?id=<?php echo $slide->id; ?>">Edit</a>
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/slides/delete/?id=<?php echo $slide->id; ?>"
                               class="confirm">Delete</a>
                        </td>
                    </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php /*
<ul class="items-listing">
    <li class="header">
        <div>ID</div>
        <div>Code</div>
        <div>Name</div>
        <div>Actions</div>
    </li>

    <?php
    if( ! empty( $pages ) )
    {
        foreach( $pages as $page )
        {
        ?>
            <li>
                <div><?php echo $page->id; ?></div>
                <div><?php echo $page->code; ?></div>
                <div><?php echo $page->name; ?></div>
                <div>
                    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/item/?id=<?php echo $page->id; ?>">Edit</a>
                    <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/delete/?id=<?php echo $page->id; ?>">Delete</a>
                </div>
            </li>
        <?php
        }
    }
    ?>
</ul> */ ?>