<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_history')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medical_history), array('view', 'id'=>$data->id_medical_history)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_type')); ?>:</b>
	<?php echo CHtml::encode($data->blood_type); ?>
	<br />


</div>