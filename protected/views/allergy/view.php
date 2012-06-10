<?php
$this->breadcrumbs=array(
	'Allergies'=>array('index'),
	$model->id_allergy,
);

$this->menu=array(
	array('label'=>'List Allergy', 'url'=>array('index')),
	array('label'=>'Create Allergy', 'url'=>array('create')),
	array('label'=>'Update Allergy', 'url'=>array('update', 'id'=>$model->id_allergy)),
	array('label'=>'Delete Allergy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_allergy),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Allergy', 'url'=>array('admin')),
);
?>

<h1>View Allergy #<?php echo $model->id_allergy; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_allergy',
		'name_allergy',
		'description',
	),
)); ?>
