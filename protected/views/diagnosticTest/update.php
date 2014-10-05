<?php
/* @var $this DiagnosticTestController */
/* @var $model DiagnosticTest */

$this->breadcrumbs=array(
	'Diagnostic Tests'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiagnosticTest', 'url'=>array('index')),
	array('label'=>'Create DiagnosticTest', 'url'=>array('create')),
	array('label'=>'View DiagnosticTest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DiagnosticTest', 'url'=>array('admin')),
);
?>

<h1>Update DiagnosticTest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>