<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medical')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medical), array('view', 'id'=>$data->id_medical)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specialty')); ?>:</b>
	<?php echo CHtml::encode($data->specialty); ?>
	<br />


</div>