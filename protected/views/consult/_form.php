<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consult-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_patient'); ?>
		<?php echo $form->textField($model,'id_patient'); ?>
		<?php echo $form->error($model,'id_patient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_alias'); ?>
		<?php echo $form->textField($model,'id_alias'); ?>
		<?php echo $form->error($model,'id_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'result'); ?>
		<?php echo $form->textField($model,'result',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'result'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->