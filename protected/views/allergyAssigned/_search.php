<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_allergy_assigned'); ?>
		<?php echo $form->textField($model,'id_allergy_assigned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_allergy'); ?>
		<?php echo $form->textField($model,'id_allergy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_medical_history'); ?>
		<?php echo $form->textField($model,'id_medical_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'details'); ?>
		<?php echo $form->textField($model,'details',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->