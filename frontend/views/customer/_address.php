<div class="form">


<?php 
$c_id = $model->country_id;
if($model->isNewRecord)
	$c_id = $model->country_id = 156;
	
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'address-form-'.$id,
	//'enableAjaxValidation' => true,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]firstname"); ?>
		<?php echo $form->textField($model,"[$id]firstname", array('maxlength' => 32)); ?>
		<?php echo $form->error($model,"[$id]firstname"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]lastname"); ?>
		<?php echo $form->textField($model,"[$id]lastname", array('maxlength' => 32)); ?>
		<?php echo $form->error($model,"[$id]lastname"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]company"); ?>
		<?php echo $form->textField($model,"[$id]company", array('maxlength' => 32)); ?>
		<?php echo $form->error($model,"[$id]company"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]tax_id"); ?>
		<?php echo $form->textField($model,"[$id]tax_id", array('maxlength' => 32)); ?>
		<?php echo $form->error($model,"[$id]tax_id"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]address_1"); ?>
		<?php echo $form->textField($model,"[$id]address_1", array('maxlength' => 128)); ?>
		<?php echo $form->error($model,"[$id]address_1"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]address_2"); ?>
		<?php echo $form->textField($model,"[$id]address_2", array('maxlength' => 128)); ?>
		<?php echo $form->error($model,"[$id]address_2"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]city"); ?>
		<?php echo $form->textField($model,"[$id]city", array('maxlength' => 128)); ?>
		<?php echo $form->error($model,"[$id]city"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]postal_code"); ?>
		<?php echo $form->textField($model,"[$id]postal_code", array('maxlength' => 10)); ?>
		<?php echo $form->error($model,"[$id]postal_code"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]country_id"); ?>
		<?php echo $form->dropDownList($model,"[$id]country_id", CHtml::listData(Country::model()->findAll(''), 'id', 'name'),
		array(
			'ajax' => array(
			'type'=>'POST', //request type
			'url'=>$this->createUrl('zones')."id/$id", //url to call.
			'update'=>'#CheckoutAddress_'.$id.'_zone_id',
		)));?>
		<?php echo $form->error($model,"[$id]country_id"); ?>
		</div><!-- row-fluid -->
		<div class="row-fluid">
		<?php echo $form->labelEx($model,"[$id]zone_id"); ?>
		<?php echo $form->dropDownList($model,"[$id]zone_id", CHtml::listData(Zone::model()->findAll('country_id=:country_id', array(':country_id'=>$c_id)), 'id', 'name')); ?>
		<?php echo $form->error($model,"[$id]zone_id"); ?>
		</div><!-- row-fluid -->


<?php
$this->endWidget();
?>
</div><!-- form -->
<div class="uid hide"><a href="<?php echo $this->createUrl('delete', array('id' => $model->id)) ?>" class="del-link"></a><a href="<?php echo $this->createUrl('update', array('id' => $model->id)) ?>" class="up-link"></a></div>