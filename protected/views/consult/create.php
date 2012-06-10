<?php
$this->breadcrumbs=array(
	'Consults'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consult', 'url'=>array('index')),
	array('label'=>'Manage Consult', 'url'=>array('admin')),
);
?>

<h1>Create Consult</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>