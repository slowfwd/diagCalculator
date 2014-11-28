<?php
/* @var $this DiseaseController */
/* @var $model Disease */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disease-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'disease_name'); ?>
		<?php echo $form->textField($model,'disease_name'); ?>
		<?php echo $form->error($model,'disease_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Hint'); ?>
		<?php echo $form->textField($model,'hint'); ?>
		<?php echo $form->error($model,'hint'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->