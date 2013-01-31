<?php global $conf; ?>
<div id="browse">
<table class='table table-bordered table-striped table-hover'>
    <thead>
        <tr>
            <th><?php echo(_t('FIELD_NUMBER')); ?></th>
            <th><?php echo(_t('FIELD_NAME')); ?></th>
            <th><?php echo(_t('FIELD_TYPE')); ?></th>
            <th><?php echo(_t('LABEL')); ?></th>
            <th><?php echo(_t('VISIBLE_IN_FORM')); ?></th>
            <th><?php echo(_t('VISIBLE_IN_VIEW')); ?></th>
            <?php if($browse_needed){?>     
            <th><?php echo(_t('VISIBLE_IN_BROWSE')); ?></th>
            <?php } ?>     
        </tr>
    </thead>
    <tbody>
    <?php foreach($res as $record){  ?>
        <tr <?php echo ($i++%2==1)?'class="odd"':''; ?>>
            <td><?php echo $record['field_number']; ?></td>
            <td><?php echo $record['field_name']; ?></td>
            <td><?php echo $record['field_type']; ?></td>
            <td><?php echo $record['field_label'];?></td>
            
            <td align="center">
                <?php $name = 'visible_new_'.$record['field_number'];?>
                <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value='y' <?php if($record['visible_new']=='y')echo "checked='true'";?> <?php  echo ($record['essential'] =='y' ? ' disabled="disables"' : null) ?> />
            </td>
            <td align="center">
                <?php $name = 'visible_view_'.$record['field_number'];?>
                <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value='y' <?php if($record['visible_view']=='y')echo "checked='true'";?> />
            </td>
            
            <?php if($browse_needed){?>           
            <td align="center">
                <?php $name = 'visible_browse_'.$record['field_number']; ?>
                <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value='y' <?php if($record['visible_browse']=='y' || $record['visible_browse']=='Y')echo "checked='true'";?> <?php  echo (  $record['visible_browse_editable'] !='y' ? ' disabled="disabled"' : null) ?>  />
                <?php if( $record['visible_browse']=='y' && $record['visible_browse_editable'] !='y'){  ?>
                <input type="hidden" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value='y'    />
                <?php 
                }
                ?>
            </td>
            <?php }?>
        </tr>

    <?php } ?>
            <tr  <?php echo ($i++%2==1)?'class="odd"':''; ?>>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td>  </td>
            <td>
            <button type="submit" name="reset_visible_new" class='btn'  ><i class="icon-remove"></i> <?php echo _t('RESET') ?></button>
             </td>
            <td>
            <button type="submit" name="reset_visible_view" class='btn'  ><i class="icon-remove"></i> <?php echo _t('RESET') ?></button>
            </td>
            <?php if($browse_needed){?>     
            <td>
            <button type="submit" name="reset_visible_browse" class='btn'  ><i class="icon-remove"></i> <?php echo _t('RESET') ?></button>
            </td>
            <?php } ?>     
        </tr>
    </tbody>
</table>
</div>
<input type="hidden" name="visible_new" id="visible_new" value="used"/>
<input type="hidden" name="visible_edit" id="visible_edit" value="used"/>
<input type="hidden" name="visible_view" id="visible_view" value="used"/>
<?php if($browse_needed){?>     
<input type="hidden" name="visible_browse" id="visible_browse" value="used"/>
<?php } ?>     
