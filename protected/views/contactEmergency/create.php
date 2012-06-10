<?php
$this->breadcrumbs=array(
	'Contact Emergencies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactEmergency', 'url'=>array('index')),
	array('label'=>'Manage ContactEmergency', 'url'=>array('admin')),
);
?>

<h1>Create ContactEmergency</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>