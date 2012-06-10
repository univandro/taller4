<?php
$this->breadcrumbs=array(
	'Allergies'=>array('index'),
	$model->id_allergy=>array('view','id'=>$model->id_allergy),
	'Update',
);

$this->menu=array(
	array('label'=>'List Allergy', 'url'=>array('index')),
	array('label'=>'Create Allergy', 'url'=>array('create')),
	array('label'=>'View Allergy', 'url'=>array('view', 'id'=>$model->id_allergy)),
	array('label'=>'Manage Allergy', 'url'=>array('admin')),
);
?>

<h1>Update Allergy <?php echo $model->id_allergy; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>