<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_person), array('view', 'id'=>$data->id_person)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_name')); ?>:</b>
	<?php echo CHtml::encode($data->father_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_name')); ?>:</b>
	<?php echo CHtml::encode($data->mother_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />


</div>