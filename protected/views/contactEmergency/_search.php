<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contact_emergency'); ?>
		<?php echo $form->textField($model,'id_contact_emergency'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_person'); ?>
		<?php echo $form->textField($model,'id_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_patient'); ?>
		<?php echo $form->textField($model,'id_patient'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->