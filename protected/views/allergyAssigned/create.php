<?php
$this->breadcrumbs=array(
	'Allergy Assigneds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AllergyAssigned', 'url'=>array('index')),
	array('label'=>'Manage AllergyAssigned', 'url'=>array('admin')),
);
?>

<h1>Create AllergyAssigned</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>