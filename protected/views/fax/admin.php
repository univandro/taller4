<?php
$this->breadcrumbs=array(
	'Faxes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Fax', 'url'=>array('index')),
	array('label'=>'Create Fax', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('fax-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Faxes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fax-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_fax',
		'id_person',
		'fax',
		'date_created',
		'created_by',
		'date_modified',
		/*
		'modified_by',
		'is_primary',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
