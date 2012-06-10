<?php
$this->breadcrumbs=array(
	'Faxes'=>array('index'),
	$model->id_fax,
);

$this->menu=array(
	array('label'=>'List Fax', 'url'=>array('index')),
	array('label'=>'Create Fax', 'url'=>array('create')),
	array('label'=>'Update Fax', 'url'=>array('update', 'id'=>$model->id_fax)),
	array('label'=>'Delete Fax', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fax),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fax', 'url'=>array('admin')),
);
?>

<h1>View Fax #<?php echo $model->id_fax; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fax',
		'id_person',
		'fax',
		'date_created',
		'created_by',
		'date_modified',
		'modified_by',
		'is_primary',
	),
)); ?>
