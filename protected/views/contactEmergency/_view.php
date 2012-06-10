<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contact_emergency')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contact_emergency), array('view', 'id'=>$data->id_contact_emergency)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::encode($data->id_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_patient')); ?>:</b>
	<?php echo CHtml::encode($data->id_patient); ?>
	<br />


</div>