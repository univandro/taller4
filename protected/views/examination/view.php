<?php
$this->breadcrumbs=array(
	'Examinations'=>array('index'),
	$model->id_examination,
);

$this->menu=array(
	array('label'=>'List Examination', 'url'=>array('index')),
	array('label'=>'Create Examination', 'url'=>array('create')),
	array('label'=>'Update Examination', 'url'=>array('update', 'id'=>$model->id_examination)),
	array('label'=>'Delete Examination', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_examination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examination', 'url'=>array('admin')),
);
?>

<h1>View Examination #<?php echo $model->id_examination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_examination',
		'name_examination',
		'description',
	),
)); ?>
