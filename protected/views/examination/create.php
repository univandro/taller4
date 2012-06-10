<?php
$this->breadcrumbs=array(
	'Examinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examination', 'url'=>array('index')),
	array('label'=>'Manage Examination', 'url'=>array('admin')),
);
?>

<h1>Create Examination</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>