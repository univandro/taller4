<?php
$this->breadcrumbs=array(
	'Emails'=>array('index'),
	$model->id_email=>array('view','id'=>$model->id_email),
	'Update',
);

$this->menu=array(
	array('label'=>'List Email', 'url'=>array('index')),
	array('label'=>'Create Email', 'url'=>array('create')),
	array('label'=>'View Email', 'url'=>array('view', 'id'=>$model->id_email)),
	array('label'=>'Manage Email', 'url'=>array('admin')),
);
?>

<h1>Update Email <?php echo $model->id_email; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>