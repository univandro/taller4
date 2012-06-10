<?php
$this->breadcrumbs=array(
	'Medical Histories'=>array('index'),
	$model->id_medical_history,
);

$this->menu=array(
	array('label'=>'List MedicalHistory', 'url'=>array('index')),
	array('label'=>'Create MedicalHistory', 'url'=>array('create')),
	array('label'=>'Update MedicalHistory', 'url'=>array('update', 'id'=>$model->id_medical_history)),
	array('label'=>'Delete MedicalHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medical_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicalHistory', 'url'=>array('admin')),
);
?>

<h1>View MedicalHistory #<?php echo $model->id_medical_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medical_history',
		'weight',
		'height',
		'blood_type',
	),
)); ?>
