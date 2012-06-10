<?php
$this->breadcrumbs=array(
	'Medical Centers'=>array('index'),
	$model->id_medical_center=>array('view','id'=>$model->id_medical_center),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicalCenter', 'url'=>array('index')),
	array('label'=>'Create MedicalCenter', 'url'=>array('create')),
	array('label'=>'View MedicalCenter', 'url'=>array('view', 'id'=>$model->id_medical_center)),
	array('label'=>'Manage MedicalCenter', 'url'=>array('admin')),
);
?>

<h1>Update MedicalCenter <?php echo $model->id_medical_center; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>