<div class="zonas form">
<?php echo $this->Form->create('Zona'); ?>
	<fieldset>
		<legend><?php echo __('Add Zona'); ?></legend>
	<?php
		echo $this->Form->input('co_zon');
		echo $this->Form->input('zon_des');
		echo $this->Form->input('co_us_in');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Zonas'), array('action' => 'index')); ?></li>
	</ul>
</div>
