<?php
$this->breadcrumbs=array(
	'Medicine Assigneds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicineAssigned', 'url'=>array('index')),
	array('label'=>'Manage MedicineAssigned', 'url'=>array('admin')),
);
?>

<h1>Create MedicineAssigned</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>