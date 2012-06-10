<?php
$this->breadcrumbs=array(
	'Aliases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alias', 'url'=>array('index')),
	array('label'=>'Manage Alias', 'url'=>array('admin')),
);
?>

<h1>Create Alias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>