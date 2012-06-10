<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'allergy-assigned-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_allergy'); ?>
		<?php echo $form->textField($model,'id_allergy'); ?>
		<?php echo $form->error($model,'id_allergy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medical_history'); ?>
		<?php echo $form->textField($model,'id_medical_history'); ?>
		<?php echo $form->error($model,'id_medical_history'); ?>
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