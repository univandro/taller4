<?php
$this->breadcrumbs=array(
	'Allergies',
);

$this->menu=array(
	array('label'=>'Create Allergy', 'url'=>array('create')),
	array('label'=>'Manage Allergy', 'url'=>array('admin')),
);
?>

<h1>Allergies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
