<?php
$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	$model->id_address=>array('view','id'=>$model->id_address),
	'Update',
);

$this->menu=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Create Address', 'url'=>array('create')),
	array('label'=>'View Address', 'url'=>array('view', 'id'=>$model->id_address)),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>Update Address <?php echo $model->id_address; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>