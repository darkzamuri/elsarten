<div class="zonas form">
<?php echo $this->Form->create('Zona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Zona'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Zona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Zonas'), array('action' => 'index')); ?></li>
	</ul>
</div>
