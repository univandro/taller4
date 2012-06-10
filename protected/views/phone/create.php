<?php
$this->breadcrumbs=array(
	'Phones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Manage Phone', 'url'=>array('admin')),
);
?>

<h1>Create Phone</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>