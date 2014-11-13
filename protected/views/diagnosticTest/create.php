<?php
/* @var $this DiagnosticTestController */
/* @var $model DiagnosticTest */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
'links' => array(
'Diagnostic Tests' =>array('diagnosticTest/index'),
'Create' => '#',
),
));

$this->menu=array(
	array('label'=>'List DiagnosticTest', 'url'=>array('index')),
	array('label'=>'Manage DiagnosticTest', 'url'=>array('admin')),
);
?>

<h1>Create DiagnosticTest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>