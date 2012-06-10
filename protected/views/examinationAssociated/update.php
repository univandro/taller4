<?php
$this->breadcrumbs=array(
	'Examination Associateds'=>array('index'),
	$model->id_examination_associated=>array('view','id'=>$model->id_examination_associated),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExaminationAssociated', 'url'=>array('index')),
	array('label'=>'Create ExaminationAssociated', 'url'=>array('create')),
	array('label'=>'View ExaminationAssociated', 'url'=>array('view', 'id'=>$model->id_examination_associated)),
	array('label'=>'Manage ExaminationAssociated', 'url'=>array('admin')),
);
?>

<h1>Update ExaminationAssociated <?php echo $model->id_examination_associated; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>