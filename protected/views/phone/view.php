<?php
$this->breadcrumbs=array(
	'Phones'=>array('index'),
	$model->id_phone,
);

$this->menu=array(
	array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone', 'url'=>array('create')),
	array('label'=>'Update Phone', 'url'=>array('update', 'id'=>$model->id_phone)),
	array('label'=>'Delete Phone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_phone),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phone', 'url'=>array('admin')),
);
?>

<h1>View Phone #<?php echo $model->id_phone; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_phone',
		'id_person',
		'phone',
		'date_created',
		'created_by',
		'date_modified',
		'modified_by',
		'is_primary',
	),
)); ?>
