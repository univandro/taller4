<?php
$this->breadcrumbs=array(
	'Phones',
);

$this->menu=array(
	array('label'=>'Create Phone', 'url'=>array('create')),
	array('label'=>'Manage Phone', 'url'=>array('admin')),
);
?>

<h1>Phones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
