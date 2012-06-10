<?php
$this->breadcrumbs=array(
	'Allergy Assigneds'=>array('index'),
	$model->id_allergy_assigned=>array('view','id'=>$model->id_allergy_assigned),
	'Update',
);

$this->menu=array(
	array('label'=>'List AllergyAssigned', 'url'=>array('index')),
	array('label'=>'Create AllergyAssigned', 'url'=>array('create')),
	array('label'=>'View AllergyAssigned', 'url'=>array('view', 'id'=>$model->id_allergy_assigned)),
	array('label'=>'Manage AllergyAssigned', 'url'=>array('admin')),
);
?>

<h1>Update AllergyAssigned <?php echo $model->id_allergy_assigned; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>