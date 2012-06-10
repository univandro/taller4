<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_allergy')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_allergy), array('view', 'id'=>$data->id_allergy)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_allergy')); ?>:</b>
	<?php echo CHtml::encode($data->name_allergy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>