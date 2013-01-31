<?php global $conf; ?>
<h2><?php echo _t('ADD_NEW_USER')  ?></h2>



<?php $fields = shn_form_get_html_fields($user_form);?>

<div class="form-container"> 

<form class="form-horizontal"  action='<?php echo get_url('admin','add_user')?>' method='post'>

<fieldset>
    <legend>Login Information</legend>

        <?php  echo $fields['username']  ?>
        <?php  echo $fields['password1']  ?>
        <?php  echo $fields['password2']  ?>
        

</fieldset>
<fieldset>
    <legend>Profile Information</legend>
        <?php  echo $fields['first_name']  ?>
        <?php  echo $fields['last_name']  ?>
        <?php  echo $fields['organization']  ?>
        <?php  echo $fields['designation']  ?>
        <?php  echo $fields['email']  ?>
        <?php  echo $fields['address']  ?>
        <?php  echo $fields['role']  ?>
        <?php  echo $fields['status']  ?>      
              
 
  </fieldset>  
         <div class="control-group">
            <div class="controls">

                <button type="submit" class="btn" name="save" ><i class="icon-ok"></i> <?php echo _t('SAVE') ?></button>

            <a class="btn" href="<?php get_url('admin','user_management' ) ?> " ><i class="icon-stop"></i> <?php echo _t('CANCEL') ?></a>
            </div></div>
    
       
</form>
</div>

