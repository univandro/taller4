<?php
$this->breadcrumbs=array(
	'Manager Gs'=>array('index'),
	$model->id_manager_g=>array('view','id'=>$model->id_manager_g),
	'Update',
);

$this->menu=array(
	array('label'=>'List ManagerG', 'url'=>array('index')),
	array('label'=>'Create ManagerG', 'url'=>array('create')),
	array('label'=>'View ManagerG', 'url'=>array('view', 'id'=>$model->id_manager_g)),
	array('label'=>'Manage ManagerG', 'url'=>array('admin')),
);
?>

<h1>Update ManagerG <?php echo $model->id_manager_g; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>