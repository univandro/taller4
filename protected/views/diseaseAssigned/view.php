<?php
$this->breadcrumbs=array(
	'Disease Assigneds'=>array('index'),
	$model->id_disease_assigned,
);

$this->menu=array(
	array('label'=>'List DiseaseAssigned', 'url'=>array('index')),
	array('label'=>'Create DiseaseAssigned', 'url'=>array('create')),
	array('label'=>'Update DiseaseAssigned', 'url'=>array('update', 'id'=>$model->id_disease_assigned)),
	array('label'=>'Delete DiseaseAssigned', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_disease_assigned),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiseaseAssigned', 'url'=>array('admin')),
);
?>

<h1>View DiseaseAssigned #<?php echo $model->id_disease_assigned; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_disease_assigned',
		'id_disease',
		'id_medical_history',
		'details',
	),
)); ?>
