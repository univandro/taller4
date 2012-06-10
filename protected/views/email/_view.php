<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_email), array('view', 'id'=>$data->id_email)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::encode($data->id_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_primary')); ?>:</b>
	<?php echo CHtml::encode($data->is_primary); ?>
	<br />

	*/ ?>

</div>