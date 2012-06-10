<?php
$this->breadcrumbs=array(
	'Examinations'=>array('index'),
	$model->id_examination=>array('view','id'=>$model->id_examination),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examination', 'url'=>array('index')),
	array('label'=>'Create Examination', 'url'=>array('create')),
	array('label'=>'View Examination', 'url'=>array('view', 'id'=>$model->id_examination)),
	array('label'=>'Manage Examination', 'url'=>array('admin')),
);
?>

<h1>Update Examination <?php echo $model->id_examination; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>