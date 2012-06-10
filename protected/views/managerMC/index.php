<?php
$this->breadcrumbs=array(
	'Manager Mcs',
);

$this->menu=array(
	array('label'=>'Create ManagerMC', 'url'=>array('create')),
	array('label'=>'Manage ManagerMC', 'url'=>array('admin')),
);
?>

<h1>Manager Mcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
