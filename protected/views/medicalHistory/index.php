<?php
$this->breadcrumbs=array(
	'Medical Histories',
);

$this->menu=array(
	array('label'=>'Create MedicalHistory', 'url'=>array('create')),
	array('label'=>'Manage MedicalHistory', 'url'=>array('admin')),
);
?>

<h1>Medical Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
