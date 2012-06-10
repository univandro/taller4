<?php
$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	$model->id_disease=>array('view','id'=>$model->id_disease),
	'Update',
);

$this->menu=array(
	array('label'=>'List Disease', 'url'=>array('index')),
	array('label'=>'Create Disease', 'url'=>array('create')),
	array('label'=>'View Disease', 'url'=>array('view', 'id'=>$model->id_disease)),
	array('label'=>'Manage Disease', 'url'=>array('admin')),
);
?>

<h1>Update Disease <?php echo $model->id_disease; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>