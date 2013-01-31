
<?php include_once('event_title.php') ?>

<div class="panel">
    <?php include_once('src_list_table.php'); ?>
    <br />
    <br />
    <h3><?php echo _t('EDIT_THIS_INFORMATION') . " [" . $event->event_title . "] "; ?></h3>    
    <div class="form-container"> 
        <form class="form-horizontal"  id="information" name="information" action='<?php echo get_url('events', 'edit_information', null, array('information_id' => $_GET['information_id'], 'eid' => $event_id)) ?>' method='post' enctype='multipart/form-data'>
            <?php
            $information_form['update'] = array('type' => 'submit', 'label' => _t('UPDATE'));
            $fields = shn_form_get_html_fields($information_form);
            place_form_elements($information_form, $fields);
            ?>
            <br />
            <div class="control-group">
                <div class="controls">

                    <button type="submit" class="btn" name="update" ><i class="icon-ok"></i> <?php echo _t('SAVE') ?></button>
                    <a class="btn" href="<?php echo get_url('events', 'src_list', null, array('eid' => $event_id)) ?>"><i class="icon-stop"></i> <?php echo _t('CANCEL') ?></a>
                </div>
            </div>

        </form>
    </div>
</div>
