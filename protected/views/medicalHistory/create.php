<?php
$this->breadcrumbs=array(
	'Medical Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicalHistory', 'url'=>array('index')),
	array('label'=>'Manage MedicalHistory', 'url'=>array('admin')),
);
?>

<h1>Create MedicalHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>