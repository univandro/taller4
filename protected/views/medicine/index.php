<?php
$this->breadcrumbs=array(
	'Medicines',
);

$this->menu=array(
	array('label'=>'Create Medicine', 'url'=>array('create')),
	array('label'=>'Manage Medicine', 'url'=>array('admin')),
);
?>

<h1>Medicines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
