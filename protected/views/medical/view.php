<?php
$this->breadcrumbs=array(
	'Medicals'=>array('index'),
	$model->id_medical,
);

$this->menu=array(
	array('label'=>'List Medical', 'url'=>array('index')),
	array('label'=>'Create Medical', 'url'=>array('create')),
	array('label'=>'Update Medical', 'url'=>array('update', 'id'=>$model->id_medical)),
	array('label'=>'Delete Medical', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medical),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medical', 'url'=>array('admin')),
);
?>

<h1>View Medical #<?php echo $model->id_medical; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medical',
		'id_user',
		'specialty',
	),
)); ?>
