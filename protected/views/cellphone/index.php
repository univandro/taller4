<?php
$this->breadcrumbs=array(
	'Cellphones',
);

$this->menu=array(
	array('label'=>'Create Cellphone', 'url'=>array('create')),
	array('label'=>'Manage Cellphone', 'url'=>array('admin')),
);
?>

<h1>Cellphones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
