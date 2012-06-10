<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_consult'); ?>
		<?php echo $form->textField($model,'id_consult'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_patient'); ?>
		<?php echo $form->textField($model,'id_patient'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_alias'); ?>
		<?php echo $form->textField($model,'id_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reason'); ?>
		<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'result'); ?>
		<?php echo $form->textField($model,'result',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->