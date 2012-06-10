<?php
$this->breadcrumbs=array(
	'Allergy Assigneds',
);

$this->menu=array(
	array('label'=>'Create AllergyAssigned', 'url'=>array('create')),
	array('label'=>'Manage AllergyAssigned', 'url'=>array('admin')),
);
?>

<h1>Allergy Assigneds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
