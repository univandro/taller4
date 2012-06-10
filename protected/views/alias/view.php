<?php
$this->breadcrumbs=array(
	'Aliases'=>array('index'),
	$model->id_alias,
);

$this->menu=array(
	array('label'=>'List Alias', 'url'=>array('index')),
	array('label'=>'Create Alias', 'url'=>array('create')),
	array('label'=>'Update Alias', 'url'=>array('update', 'id'=>$model->id_alias)),
	array('label'=>'Delete Alias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_alias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alias', 'url'=>array('admin')),
);
?>

<h1>View Alias #<?php echo $model->id_alias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_alias',
		'id_medical_center',
		'id_user',
		'state',
	),
)); ?>
