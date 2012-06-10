<?php
$this->breadcrumbs=array(
	'Medicine Assigneds'=>array('index'),
	$model->id_medicine_assigned,
);

$this->menu=array(
	array('label'=>'List MedicineAssigned', 'url'=>array('index')),
	array('label'=>'Create MedicineAssigned', 'url'=>array('create')),
	array('label'=>'Update MedicineAssigned', 'url'=>array('update', 'id'=>$model->id_medicine_assigned)),
	array('label'=>'Delete MedicineAssigned', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medicine_assigned),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicineAssigned', 'url'=>array('admin')),
);
?>

<h1>View MedicineAssigned #<?php echo $model->id_medicine_assigned; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medicine_assigned',
		'id_medicine',
		'id_consult',
		'details',
	),
)); ?>
