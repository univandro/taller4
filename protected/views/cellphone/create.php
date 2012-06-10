<?php
$this->breadcrumbs=array(
	'Cellphones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cellphone', 'url'=>array('index')),
	array('label'=>'Manage Cellphone', 'url'=>array('admin')),
);
?>

<h1>Create Cellphone</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>