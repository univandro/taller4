<?php
$this->breadcrumbs=array(
	'Contact Emergencies'=>array('index'),
	$model->id_contact_emergency,
);

$this->menu=array(
	array('label'=>'List ContactEmergency', 'url'=>array('index')),
	array('label'=>'Create ContactEmergency', 'url'=>array('create')),
	array('label'=>'Update ContactEmergency', 'url'=>array('update', 'id'=>$model->id_contact_emergency)),
	array('label'=>'Delete ContactEmergency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contact_emergency),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactEmergency', 'url'=>array('admin')),
);
?>

<h1>View ContactEmergency #<?php echo $model->id_contact_emergency; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contact_emergency',
		'id_person',
		'id_patient',
	),
)); ?>
