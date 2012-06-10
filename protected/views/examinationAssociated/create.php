<?php
$this->breadcrumbs=array(
	'Examination Associateds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExaminationAssociated', 'url'=>array('index')),
	array('label'=>'Manage ExaminationAssociated', 'url'=>array('admin')),
);
?>

<h1>Create ExaminationAssociated</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>