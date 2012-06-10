<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_patient')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_patient), array('view', 'id'=>$data->id_patient)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::encode($data->id_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_history')); ?>:</b>
	<?php echo CHtml::encode($data->id_medical_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_m_c')); ?>:</b>
	<?php echo CHtml::encode($data->code_m_c); ?>
	<br />


</div>