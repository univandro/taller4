<?php
$this->breadcrumbs=array(
	'Cellphones'=>array('index'),
	$model->id_cellphone,
);

$this->menu=array(
	array('label'=>'List Cellphone', 'url'=>array('index')),
	array('label'=>'Create Cellphone', 'url'=>array('create')),
	array('label'=>'Update Cellphone', 'url'=>array('update', 'id'=>$model->id_cellphone)),
	array('label'=>'Delete Cellphone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cellphone),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cellphone', 'url'=>array('admin')),
);
?>

<h1>View Cellphone #<?php echo $model->id_cellphone; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cellphone',
		'id_person',
		'cellphone',
		'date_created',
		'created_by',
		'date_modified',
		'modified_by',
		'is_primary',
	),
)); ?>
