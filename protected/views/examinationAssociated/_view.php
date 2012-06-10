<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_examination_associated')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_examination_associated), array('view', 'id'=>$data->id_examination_associated)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consult')); ?>:</b>
	<?php echo CHtml::encode($data->id_consult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	*/ ?>

</div>