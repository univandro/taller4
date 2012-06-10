<?php
$this->breadcrumbs=array(
	'Medicine Assigneds',
);

$this->menu=array(
	array('label'=>'Create MedicineAssigned', 'url'=>array('create')),
	array('label'=>'Manage MedicineAssigned', 'url'=>array('admin')),
);
?>

<h1>Medicine Assigneds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
