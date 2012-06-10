<?php
$this->breadcrumbs=array(
	'Diseases',
);

$this->menu=array(
	array('label'=>'Create Disease', 'url'=>array('create')),
	array('label'=>'Manage Disease', 'url'=>array('admin')),
);
?>

<h1>Diseases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
