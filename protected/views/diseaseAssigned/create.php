<?php
$this->breadcrumbs=array(
	'Disease Assigneds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiseaseAssigned', 'url'=>array('index')),
	array('label'=>'Manage DiseaseAssigned', 'url'=>array('admin')),
);
?>

<h1>Create DiseaseAssigned</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>