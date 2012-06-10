<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_manager_m_c')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_manager_m_c), array('view', 'id'=>$data->id_manager_m_c)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_m_c')); ?>:</b>
	<?php echo CHtml::encode($data->code_m_c); ?>
	<br />


</div>