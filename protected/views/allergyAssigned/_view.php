<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_allergy_assigned')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_allergy_assigned), array('view', 'id'=>$data->id_allergy_assigned)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_allergy')); ?>:</b>
	<?php echo CHtml::encode($data->id_allergy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_history')); ?>:</b>
	<?php echo CHtml::encode($data->id_medical_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php echo CHtml::encode($data->details); ?>
	<br />


</div>