<?php
$this->breadcrumbs=array(
	'Medical Centers'=>array('index'),
	$model->id_medical_center,
);

$this->menu=array(
	array('label'=>'List MedicalCenter', 'url'=>array('index')),
	array('label'=>'Create MedicalCenter', 'url'=>array('create')),
	array('label'=>'Update MedicalCenter', 'url'=>array('update', 'id'=>$model->id_medical_center)),
	array('label'=>'Delete MedicalCenter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medical_center),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicalCenter', 'url'=>array('admin')),
);
?>

<h1>View MedicalCenter #<?php echo $model->id_medical_center; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medical_center',
		'name_medical_center',
		'code_m_c',
	),
)); ?>
