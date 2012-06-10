<?php
$this->breadcrumbs=array(
	'Disease Assigneds'=>array('index'),
	$model->id_disease_assigned=>array('view','id'=>$model->id_disease_assigned),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiseaseAssigned', 'url'=>array('index')),
	array('label'=>'Create DiseaseAssigned', 'url'=>array('create')),
	array('label'=>'View DiseaseAssigned', 'url'=>array('view', 'id'=>$model->id_disease_assigned)),
	array('label'=>'Manage DiseaseAssigned', 'url'=>array('admin')),
);
?>

<h1>Update DiseaseAssigned <?php echo $model->id_disease_assigned; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>