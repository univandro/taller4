<?php
$this->breadcrumbs=array(
	'Medical Centers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicalCenter', 'url'=>array('index')),
	array('label'=>'Manage MedicalCenter', 'url'=>array('admin')),
);
?>

<h1>Create MedicalCenter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>