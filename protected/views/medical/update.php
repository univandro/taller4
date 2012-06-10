<?php
$this->breadcrumbs=array(
	'Medicals'=>array('index'),
	$model->id_medical=>array('view','id'=>$model->id_medical),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medical', 'url'=>array('index')),
	array('label'=>'Create Medical', 'url'=>array('create')),
	array('label'=>'View Medical', 'url'=>array('view', 'id'=>$model->id_medical)),
	array('label'=>'Manage Medical', 'url'=>array('admin')),
);
?>

<h1>Update Medical <?php echo $model->id_medical; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>