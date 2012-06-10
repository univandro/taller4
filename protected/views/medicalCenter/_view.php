<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical_center')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medical_center), array('view', 'id'=>$data->id_medical_center)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_medical_center')); ?>:</b>
	<?php echo CHtml::encode($data->name_medical_center); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_m_c')); ?>:</b>
	<?php echo CHtml::encode($data->code_m_c); ?>
	<br />


</div>