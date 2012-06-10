<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_person'); ?>
		<?php echo $form->textField($model,'id_person'); ?>
		<?php echo $form->error($model,'id_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medical_history'); ?>
		<?php echo $form->textField($model,'id_medical_history'); ?>
		<?php echo $form->error($model,'id_medical_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code_m_c'); ?>
		<?php echo $form->textField($model,'code_m_c',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'code_m_c'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->