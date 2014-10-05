<?php
/* @var $this DiagnosticTestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diagnostic Tests',
);

$this->menu=array(
	array('label'=>'Create DiagnosticTest', 'url'=>array('create')),
	array('label'=>'Manage DiagnosticTest', 'url'=>array('admin')),
);
?>

<h1>Diagnostic Tests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
