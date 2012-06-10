<?php
$this->breadcrumbs=array(
	'Consults',
);

$this->menu=array(
	array('label'=>'Create Consult', 'url'=>array('create')),
	array('label'=>'Manage Consult', 'url'=>array('admin')),
);
?>

<h1>Consults</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
