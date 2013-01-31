
<?php include_once('event_title.php'); ?>

<div class="panel">
      <div class="fuelux">
        <div id="myWizard" class="wizard">
            <ul class="steps">
                <li class="complete">
                        <span class="badge badge-success">1</span><?php echo _t('ADD_VICTIM') ?><span class="chevron"></span>
                   
                
                <li class="complete"><span class="badge badge-success">2</span><?php echo _t('ADD_ACT') ?><span class="chevron"></span></li>
                <li class="active"><span class="badge badge-info">3</span><?php echo _t('ADD_PERPETRATOR') ?><span class="chevron"></span></li>
                <li><span class="badge">4</span><?php echo _t('ADD_INVOLVEMENT') ?><span class="chevron"></span></li>
                <li><span class="badge">5</span><?php echo _t('FINISH') ?><span class="chevron"></span></li>
            </ul>
           
        </div>
    </div>

<br />
<h2><?php echo _t('WHO_IS_RESPONSIBLE_FOR_THE').' <em>"'.$act_name.'"</em> '._t('AGAINST').' <em>"'.$victim->person_name.'"</em> ?' ?></h2>
<br />
<?php
//if a perpetrator is selected show perpetrator record
if(isset($perpetrator)){
    $person_form = person_form('view');
    popuate_formArray($person_form , $perpetrator);
    shn_form_get_html_labels($person_form , false);
}
?>
<div class="control-group">
            <div class="controls"> 
<a class="btn btn-primary" href="<?php echo get_url('events','add_perpetrator','new_perpetrator',array('eid'=>$event_id)) ?>"><i class="icon-plus icon-white"></i> <?php echo _t('ADD_NEW')?></a>
<a class="btn" href="<?php echo get_url('events','add_perpetrator','search_perpetrator',array('eid'=>$event_id)) ?>"><i class="icon-search"></i> <?php echo _t('SEARCH_IN_DATABASE')?></a>
<a class="btn" href="<?php echo get_url('events','vp_list',null,array('eid'=>$event_id)) ?>"><i class="icon-stop"></i> <?php echo _t('CANCEL')?></a>
<?php if(isset($perpetrator)){ ?>
<a class="btn" href="<?php echo get_url('events','add_involvement',null,array('eid'=>$event_id, 'perpetrator'=>$perpetrator->person_record_number)) ?>"><?php echo _t('CONTINUE')?></a>
<?php } ?>
            </div></div>
</div>
