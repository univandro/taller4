<?php
$this->breadcrumbs=array(
	'Medical Histories'=>array('index'),
	$model->id_medical_history=>array('view','id'=>$model->id_medical_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicalHistory', 'url'=>array('index')),
	array('label'=>'Create MedicalHistory', 'url'=>array('create')),
	array('label'=>'View MedicalHistory', 'url'=>array('view', 'id'=>$model->id_medical_history)),
	array('label'=>'Manage MedicalHistory', 'url'=>array('admin')),
);
?>

<h1>Update MedicalHistory <?php echo $model->id_medical_history; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>