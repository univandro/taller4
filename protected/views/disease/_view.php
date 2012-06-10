<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disease')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_disease), array('view', 'id'=>$data->id_disease)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_disease')); ?>:</b>
	<?php echo CHtml::encode($data->name_disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>