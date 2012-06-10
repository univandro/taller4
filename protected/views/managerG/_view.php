<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_manager_g')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_manager_g), array('view', 'id'=>$data->id_manager_g)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />


</div>