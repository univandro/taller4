<?php
$this->breadcrumbs=array(
	'Faxes',
);

$this->menu=array(
	array('label'=>'Create Fax', 'url'=>array('create')),
	array('label'=>'Manage Fax', 'url'=>array('admin')),
);
?>

<h1>Faxes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
