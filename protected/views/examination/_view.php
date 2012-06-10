<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_examination')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_examination), array('view', 'id'=>$data->id_examination)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_examination')); ?>:</b>
	<?php echo CHtml::encode($data->name_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>