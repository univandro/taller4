<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_medical_center'); ?>
		<?php echo $form->textField($model,'id_medical_center'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_medical_center'); ?>
		<?php echo $form->textField($model,'name_medical_center',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_m_c'); ?>
		<?php echo $form->textField($model,'code_m_c',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->