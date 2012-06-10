<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicine-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_medicine'); ?>
		<?php echo $form->textField($model,'name_medicine',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name_medicine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'composed'); ?>
		<?php echo $form->textField($model,'composed',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'composed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indications'); ?>
		<?php echo $form->textField($model,'indications',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'indications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraindications'); ?>
		<?php echo $form->textField($model,'contraindications',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contraindications'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->