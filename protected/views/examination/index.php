<?php
$this->breadcrumbs=array(
	'Examinations',
);

$this->menu=array(
	array('label'=>'Create Examination', 'url'=>array('create')),
	array('label'=>'Manage Examination', 'url'=>array('admin')),
);
?>

<h1>Examinations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
