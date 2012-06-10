<?php
$this->breadcrumbs=array(
	'Medicals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medical', 'url'=>array('index')),
	array('label'=>'Manage Medical', 'url'=>array('admin')),
);
?>

<h1>Create Medical</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>