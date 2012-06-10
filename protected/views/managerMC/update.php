<?php
$this->breadcrumbs=array(
	'Manager Mcs'=>array('index'),
	$model->id_manager_m_c=>array('view','id'=>$model->id_manager_m_c),
	'Update',
);

$this->menu=array(
	array('label'=>'List ManagerMC', 'url'=>array('index')),
	array('label'=>'Create ManagerMC', 'url'=>array('create')),
	array('label'=>'View ManagerMC', 'url'=>array('view', 'id'=>$model->id_manager_m_c)),
	array('label'=>'Manage ManagerMC', 'url'=>array('admin')),
);
?>

<h1>Update ManagerMC <?php echo $model->id_manager_m_c; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>