<?php
$this->breadcrumbs=array(
	'Examination Associateds'=>array('index'),
	$model->id_examination_associated,
);

$this->menu=array(
	array('label'=>'List ExaminationAssociated', 'url'=>array('index')),
	array('label'=>'Create ExaminationAssociated', 'url'=>array('create')),
	array('label'=>'Update ExaminationAssociated', 'url'=>array('update', 'id'=>$model->id_examination_associated)),
	array('label'=>'Delete ExaminationAssociated', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_examination_associated),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExaminationAssociated', 'url'=>array('admin')),
);
?>

<h1>View ExaminationAssociated #<?php echo $model->id_examination_associated; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_examination_associated',
		'id_examination',
		'id_consult',
		'date',
		'description',
		'state',
		'result',
		'file',
	),
)); ?>
