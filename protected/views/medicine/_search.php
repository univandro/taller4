<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_medicine'); ?>
		<?php echo $form->textField($model,'id_medicine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_medicine'); ?>
		<?php echo $form->textField($model,'name_medicine',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'composed'); ?>
		<?php echo $form->textField($model,'composed',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indications'); ?>
		<?php echo $form->textField($model,'indications',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contraindications'); ?>
		<?php echo $form->textField($model,'contraindications',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->