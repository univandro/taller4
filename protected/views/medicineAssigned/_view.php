<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medicine_assigned')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medicine_assigned), array('view', 'id'=>$data->id_medicine_assigned)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medicine')); ?>:</b>
	<?php echo CHtml::encode($data->id_medicine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consult')); ?>:</b>
	<?php echo CHtml::encode($data->id_consult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php echo CHtml::encode($data->details); ?>
	<br />


</div>