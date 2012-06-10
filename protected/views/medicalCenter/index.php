<?php
$this->breadcrumbs=array(
	'Medical Centers',
);

$this->menu=array(
	array('label'=>'Create MedicalCenter', 'url'=>array('create')),
	array('label'=>'Manage MedicalCenter', 'url'=>array('admin')),
);
?>

<h1>Medical Centers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
