<?php
$this->breadcrumbs=array(
	'Contact Emergencies',
);

$this->menu=array(
	array('label'=>'Create ContactEmergency', 'url'=>array('create')),
	array('label'=>'Manage ContactEmergency', 'url'=>array('admin')),
);
?>

<h1>Contact Emergencies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
