<?php
$this->breadcrumbs=array(
	'Manager Gs',
);

$this->menu=array(
	array('label'=>'Create ManagerG', 'url'=>array('create')),
	array('label'=>'Manage ManagerG', 'url'=>array('admin')),
);
?>

<h1>Manager Gs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
