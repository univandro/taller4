<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medicine')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medicine), array('view', 'id'=>$data->id_medicine)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_medicine')); ?>:</b>
	<?php echo CHtml::encode($data->name_medicine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('composed')); ?>:</b>
	<?php echo CHtml::encode($data->composed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indications')); ?>:</b>
	<?php echo CHtml::encode($data->indications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contraindications')); ?>:</b>
	<?php echo CHtml::encode($data->contraindications); ?>
	<br />


</div>