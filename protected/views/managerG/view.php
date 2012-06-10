<?php
$this->breadcrumbs=array(
	'Manager Gs'=>array('index'),
	$model->id_manager_g,
);

$this->menu=array(
	array('label'=>'List ManagerG', 'url'=>array('index')),
	array('label'=>'Create ManagerG', 'url'=>array('create')),
	array('label'=>'Update ManagerG', 'url'=>array('update', 'id'=>$model->id_manager_g)),
	array('label'=>'Delete ManagerG', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_manager_g),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManagerG', 'url'=>array('admin')),
);
?>

<h1>View ManagerG #<?php echo $model->id_manager_g; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_manager_g',
		'id_user',
	),
)); ?>
