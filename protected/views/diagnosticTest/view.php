<?php
/* @var $this DiagnosticTestController */
/* @var $model DiagnosticTest */

$this->breadcrumbs=array(
	'Diagnostic Tests'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DiagnosticTest', 'url'=>array('index')),
	array('label'=>'Create DiagnosticTest', 'url'=>array('create')),
	array('label'=>'Update DiagnosticTest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DiagnosticTest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiagnosticTest', 'url'=>array('admin')),
);
?>

<h1>View DiagnosticTest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('name'=>'disease.disease_name'),
		'name',
		'cost',
	),
)); ?>
