<div class="lins form">
<?php echo $this->Form->create('Lin'); ?>
	<fieldset>
		<legend><?php echo __('Add Lin'); ?></legend>
	<?php
		echo $this->Form->input('co_lin');
		echo $this->Form->input('lin_des');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lins'), array('action' => 'index')); ?></li>
	</ul>
</div>
