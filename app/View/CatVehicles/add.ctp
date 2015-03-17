<div class="catVehicles form">
<?php echo $this->Form->create('CatVehicle'); ?>
	<fieldset>
		<legend><?php echo __('Add Vehicle'); ?></legend>

		<div class="form-group required">
			<label for="CatVehicleTitle">Add Title</label>
			<?php echo $this->Form->input('title',array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
		</div>
		<div class="form-group required">
			<label for="CatVehicleCategoryId">Select Category</label>
			<?php echo $this->Form->input('category_id',array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
		</div>
		<div class="form-group required">
			<label for="CatVehicleSubcategoryId">Select Subcategory</label>
			<?php echo $this->Form->input('subcategory_id',array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
		</div>
		<div class="form-group required">
			<label for="CatVehicleSubcategoryId">Type Of Ad</label>
			<?php echo $this->Form->radio('add_type',array('1'=>'I Want To Sale', '2'=>'I Want To Buy'));?>
		</div>
	<?php
		echo $this->Form->input('add_type');
		echo $this->Form->input('make');
		echo $this->Form->input('model');
		echo $this->Form->input('type');
		echo $this->Form->input('engine_cappacity');
		echo $this->Form->input('milage');
		echo $this->Form->input('mfg_year');
		echo $this->Form->input('reg_year');
		echo $this->Form->input('fuel_type');
		echo $this->Form->input('kms_driven');
		echo $this->Form->input('city');
		echo $this->Form->input('location');
		echo $this->Form->input('seller_type');
		echo $this->Form->input('premium_type');
		echo $this->Form->input('can_message');
		echo $this->Form->input('created_at');
		echo $this->Form->input('deleted_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cat Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
