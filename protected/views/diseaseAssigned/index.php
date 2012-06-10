<?php
$this->breadcrumbs=array(
	'Disease Assigneds',
);

$this->menu=array(
	array('label'=>'Create DiseaseAssigned', 'url'=>array('create')),
	array('label'=>'Manage DiseaseAssigned', 'url'=>array('admin')),
);
?>

<h1>Disease Assigneds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
