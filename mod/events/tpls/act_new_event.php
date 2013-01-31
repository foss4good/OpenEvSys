<?php global $conf; ?>

<div class="panel">
          <div class="fuelux">
        <div id="myWizard" class="wizard">
            <ul class="steps">
                <li class="active">
                        <span class="badge badge-info">1</span><?php echo _t('ADD_EVENT_INFORMATION') ?><span class="chevron"></span>
                   
                 <li><span class="badge">2</span><?php echo _t('FINISH') ?><span class="chevron"></span></li>
            </ul>
           
        </div>
    </div>

<br />
<h3><?php echo _t('ADDING_EVENT_INFORMATION').' ...'?></h3>
<div class="form-container"> 
<form class="form-horizontal"  action='<?php echo get_url('events','new_event')?>' id="event_form" name="event_form" method='post' enctype='multipart/form-data'>
<?php $fields = shn_form_get_html_fields($event_form);  ?>
<?php $fields = place_form_elements($event_form,$fields); ?>
      <div class="control-group">
                <div class="controls">

                    <button type="submit" class="btn" name="save" ><i class="icon-ok"></i> <?php echo _t('SAVE') ?></button>

                    <a class='btn' href="<?php get_url('events', 'browse') ?>"><i class="icon-stop"></i> <?php echo _t('CANCEL') ?></a>
                </div>
      </div>

</form>
</div>
</div>
