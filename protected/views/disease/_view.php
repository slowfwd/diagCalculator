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

	<b><?php echo CHtml::encode($data->getAttributeLabel('hints_lower')); ?>:</b>
	<?php echo CHtml::encode($data->hints_lower); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('hints_upper')); ?>:</b>
	<?php echo CHtml::encode($data->hints_upper); ?>
	<br />
</div>