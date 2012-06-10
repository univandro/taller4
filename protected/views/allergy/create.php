<?php
$this->breadcrumbs=array(
	'Allergies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Allergy', 'url'=>array('index')),
	array('label'=>'Manage Allergy', 'url'=>array('admin')),
);
?>

<h1>Create Allergy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>