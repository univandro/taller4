<?php
$this->breadcrumbs=array(
	'Aliases'=>array('index'),
	$model->id_alias=>array('view','id'=>$model->id_alias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alias', 'url'=>array('index')),
	array('label'=>'Create Alias', 'url'=>array('create')),
	array('label'=>'View Alias', 'url'=>array('view', 'id'=>$model->id_alias)),
	array('label'=>'Manage Alias', 'url'=>array('admin')),
);
?>

<h1>Update Alias <?php echo $model->id_alias; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>