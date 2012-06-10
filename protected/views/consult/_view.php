<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consult')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_consult), array('view', 'id'=>$data->id_consult)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_patient')); ?>:</b>
	<?php echo CHtml::encode($data->id_patient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_alias')); ?>:</b>
	<?php echo CHtml::encode($data->id_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />


</div>