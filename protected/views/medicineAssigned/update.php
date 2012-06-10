<?php
$this->breadcrumbs=array(
	'Medicine Assigneds'=>array('index'),
	$model->id_medicine_assigned=>array('view','id'=>$model->id_medicine_assigned),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicineAssigned', 'url'=>array('index')),
	array('label'=>'Create MedicineAssigned', 'url'=>array('create')),
	array('label'=>'View MedicineAssigned', 'url'=>array('view', 'id'=>$model->id_medicine_assigned)),
	array('label'=>'Manage MedicineAssigned', 'url'=>array('admin')),
);
?>

<h1>Update MedicineAssigned <?php echo $model->id_medicine_assigned; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>