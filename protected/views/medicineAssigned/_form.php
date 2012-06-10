<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicine-assigned-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medicine'); ?>
		<?php echo $form->textField($model,'id_medicine'); ?>
		<?php echo $form->error($model,'id_medicine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_consult'); ?>
		<?php echo $form->textField($model,'id_consult'); ?>
		<?php echo $form->error($model,'id_consult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textField($model,'details',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->