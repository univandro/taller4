<?php
$this->breadcrumbs=array(
	'Consults'=>array('index'),
	$model->id_consult=>array('view','id'=>$model->id_consult),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consult', 'url'=>array('index')),
	array('label'=>'Create Consult', 'url'=>array('create')),
	array('label'=>'View Consult', 'url'=>array('view', 'id'=>$model->id_consult)),
	array('label'=>'Manage Consult', 'url'=>array('admin')),
);
?>

<h1>Update Consult <?php echo $model->id_consult; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>