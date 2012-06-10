<?php
$this->breadcrumbs=array(
	'Emails'=>array('index'),
	$model->id_email,
);

$this->menu=array(
	array('label'=>'List Email', 'url'=>array('index')),
	array('label'=>'Create Email', 'url'=>array('create')),
	array('label'=>'Update Email', 'url'=>array('update', 'id'=>$model->id_email)),
	array('label'=>'Delete Email', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_email),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Email', 'url'=>array('admin')),
);
?>

<h1>View Email #<?php echo $model->id_email; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_email',
		'id_person',
		'email',
		'date_created',
		'created_by',
		'date_modified',
		'modified_by',
		'is_primary',
	),
)); ?>
