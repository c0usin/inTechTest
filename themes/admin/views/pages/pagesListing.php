<div id="yw0" class="grid-view items-listing">
    <div class="summary">Displaying 1-1 of 1 result.</div>
    <table class="items">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Name</th>
                <th class="is_enabled">Is enabled</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if( ! empty( $pages ) )
            {
                foreach( $pages as $page )
                {
                ?>
                    <tr>
                        <td><?php echo $page->id; ?></td>
                        <td><?php echo $page->code; ?></td>
                        <td><?php echo $page->name; ?></td>
                        <td class="item_enabled">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/ajaxwork"
                                class="back-<?php echo ( $page->is_enabled ? "green" : "red" ); ?>"
                                data-item-id="<?php echo $page->id; ?>">
                                <i class="<?php echo ( $page->is_enabled ? "enabled" : "disabled" ); ?>"></i>
                            </a>
                        </td>
                        <td class="actions">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/item/?id=<?php echo $page->id; ?>">Edit</a>
                            <a href="<?php echo Yii::app()->baseUrl; ?>/admin/pages/delete/?id=<?php echo $page->id; ?>"
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