<?php
/* @var $this DiseaseController */
/* @var $data Disease */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease_name')); ?>:</b>
	<?php echo CHtml::encode($data->disease_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hint')); ?>:</b>
	<?php echo CHtml::encode($data->hint); ?>
	<br />
</div>