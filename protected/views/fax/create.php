<?php
$this->breadcrumbs=array(
	'Faxes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fax', 'url'=>array('index')),
	array('label'=>'Manage Fax', 'url'=>array('admin')),
);
?>

<h1>Create Fax</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>