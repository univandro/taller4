<?php
$this->breadcrumbs=array(
	'Manager Gs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ManagerG', 'url'=>array('index')),
	array('label'=>'Manage ManagerG', 'url'=>array('admin')),
);
?>

<h1>Create ManagerG</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>