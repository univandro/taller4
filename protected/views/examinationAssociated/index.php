<?php
$this->breadcrumbs=array(
	'Examination Associateds',
);

$this->menu=array(
	array('label'=>'Create ExaminationAssociated', 'url'=>array('create')),
	array('label'=>'Manage ExaminationAssociated', 'url'=>array('admin')),
);
?>

<h1>Examination Associateds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
