<?php
$this->breadcrumbs=array(
	'Medicals',
);

$this->menu=array(
	array('label'=>'Create Medical', 'url'=>array('create')),
	array('label'=>'Manage Medical', 'url'=>array('admin')),
);
?>

<h1>Medicals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
