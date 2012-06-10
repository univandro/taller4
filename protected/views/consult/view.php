<?php
$this->breadcrumbs=array(
	'Consults'=>array('index'),
	$model->id_consult,
);

$this->menu=array(
	array('label'=>'List Consult', 'url'=>array('index')),
	array('label'=>'Create Consult', 'url'=>array('create')),
	array('label'=>'Update Consult', 'url'=>array('update', 'id'=>$model->id_consult)),
	array('label'=>'Delete Consult', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consult),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consult', 'url'=>array('admin')),
);
?>

<h1>View Consult #<?php echo $model->id_consult; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_consult',
		'id_patient',
		'id_alias',
		'date',
		'reason',
		'result',
	),
)); ?>
