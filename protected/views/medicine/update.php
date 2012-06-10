<?php
$this->breadcrumbs=array(
	'Medicines'=>array('index'),
	$model->id_medicine=>array('view','id'=>$model->id_medicine),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medicine', 'url'=>array('index')),
	array('label'=>'Create Medicine', 'url'=>array('create')),
	array('label'=>'View Medicine', 'url'=>array('view', 'id'=>$model->id_medicine)),
	array('label'=>'Manage Medicine', 'url'=>array('admin')),
);
?>

<h1>Update Medicine <?php echo $model->id_medicine; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>