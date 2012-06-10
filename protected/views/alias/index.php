<?php
$this->breadcrumbs=array(
	'Aliases',
);

$this->menu=array(
	array('label'=>'Create Alias', 'url'=>array('create')),
	array('label'=>'Manage Alias', 'url'=>array('admin')),
);
?>

<h1>Aliases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
