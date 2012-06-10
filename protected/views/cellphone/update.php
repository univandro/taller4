<?php
$this->breadcrumbs=array(
	'Cellphones'=>array('index'),
	$model->id_cellphone=>array('view','id'=>$model->id_cellphone),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cellphone', 'url'=>array('index')),
	array('label'=>'Create Cellphone', 'url'=>array('create')),
	array('label'=>'View Cellphone', 'url'=>array('view', 'id'=>$model->id_cellphone)),
	array('label'=>'Manage Cellphone', 'url'=>array('admin')),
);
?>

<h1>Update Cellphone <?php echo $model->id_cellphone; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>