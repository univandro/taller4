<?php
$this->breadcrumbs=array(
	'Contact Emergencies'=>array('index'),
	$model->id_contact_emergency=>array('view','id'=>$model->id_contact_emergency),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactEmergency', 'url'=>array('index')),
	array('label'=>'Create ContactEmergency', 'url'=>array('create')),
	array('label'=>'View ContactEmergency', 'url'=>array('view', 'id'=>$model->id_contact_emergency)),
	array('label'=>'Manage ContactEmergency', 'url'=>array('admin')),
);
?>

<h1>Update ContactEmergency <?php echo $model->id_contact_emergency; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>