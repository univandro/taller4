<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disease_assigned')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_disease_assigned), array('view', 'id'=>$data->id_disease_assigned)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disease')); ?>:</b>
	<?php echo CHtml::encode($data->id_disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_history')); ?>:</b>
	<?php echo CHtml::encode($data->id_medical_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php echo CHtml::encode($data->details); ?>
	<br />


</div>