<?php
$this->breadcrumbs=array(
	'Allergy Assigneds'=>array('index'),
	$model->id_allergy_assigned,
);

$this->menu=array(
	array('label'=>'List AllergyAssigned', 'url'=>array('index')),
	array('label'=>'Create AllergyAssigned', 'url'=>array('create')),
	array('label'=>'Update AllergyAssigned', 'url'=>array('update', 'id'=>$model->id_allergy_assigned)),
	array('label'=>'Delete AllergyAssigned', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_allergy_assigned),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AllergyAssigned', 'url'=>array('admin')),
);
?>

<h1>View AllergyAssigned #<?php echo $model->id_allergy_assigned; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_allergy_assigned',
		'id_allergy',
		'id_medical_history',
		'details',
	),
)); ?>
