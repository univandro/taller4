<?php
$this->breadcrumbs=array(
	'Manager Mcs'=>array('index'),
	$model->id_manager_m_c,
);

$this->menu=array(
	array('label'=>'List ManagerMC', 'url'=>array('index')),
	array('label'=>'Create ManagerMC', 'url'=>array('create')),
	array('label'=>'Update ManagerMC', 'url'=>array('update', 'id'=>$model->id_manager_m_c)),
	array('label'=>'Delete ManagerMC', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_manager_m_c),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManagerMC', 'url'=>array('admin')),
);
?>

<h1>View ManagerMC #<?php echo $model->id_manager_m_c; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_manager_m_c',
		'id_user',
		'code_m_c',
	),
)); ?>
