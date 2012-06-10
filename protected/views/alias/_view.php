<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_alias), array('view', 'id'=>$data->id_alias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_center')); ?>:</b>
	<?php echo CHtml::encode($data->id_medical_center); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />


</div>