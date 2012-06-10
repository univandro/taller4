<?php
$this->breadcrumbs=array(
	'Manager Mcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ManagerMC', 'url'=>array('index')),
	array('label'=>'Manage ManagerMC', 'url'=>array('admin')),
);
?>

<h1>Create ManagerMC</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>