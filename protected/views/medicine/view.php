<?php
$this->breadcrumbs=array(
	'Medicines'=>array('index'),
	$model->id_medicine,
);

$this->menu=array(
	array('label'=>'List Medicine', 'url'=>array('index')),
	array('label'=>'Create Medicine', 'url'=>array('create')),
	array('label'=>'Update Medicine', 'url'=>array('update', 'id'=>$model->id_medicine)),
	array('label'=>'Delete Medicine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medicine),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medicine', 'url'=>array('admin')),
);
?>

<h1>View Medicine #<?php echo $model->id_medicine; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medicine',
		'name_medicine',
		'composed',
		'indications',
		'contraindications',
	),
)); ?>
