<?php
$this->breadcrumbs=array(
	'Faxes'=>array('index'),
	$model->id_fax=>array('view','id'=>$model->id_fax),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fax', 'url'=>array('index')),
	array('label'=>'Create Fax', 'url'=>array('create')),
	array('label'=>'View Fax', 'url'=>array('view', 'id'=>$model->id_fax)),
	array('label'=>'Manage Fax', 'url'=>array('admin')),
);
?>

<h1>Update Fax <?php echo $model->id_fax; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>